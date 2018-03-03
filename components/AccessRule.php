<?php

namespace app\components;
use dektrium\user\models\User;

class AccessRule extends \yii\filters\AccessRule{
    protected function matchRole($user) {
        if(empty($this->role)){
            return TRUE;
        }
        foreach ($this->roles as $role){
            if($role=='?' && $user->getIsGuese()){
                return TRUE;
            }
            elseif ($role== User::ROLE_USER && !getIsGuese()) {
                return TRUE;
        }
        elseif (!$user->getIsGuese() && $role==$user->identity->role) {
            return TRUE;
    }
        }
        return FALSE;
    }
}
