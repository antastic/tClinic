<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $emp_id
 * @property string $emp_name
 * @property string $emp_lname
 * @property string $emp_uname
 * @property string $emp_pwd
 * @property string $em_licenlse
 * @property string $emp_type
 *
 * @property Visit[] $visits
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_name', 'emp_lname', 'emp_uname', 'emp_pwd', 'emp_type'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            [['emp_uname'], 'unique','message' => 'ข้อมูลมีอยู่แล้ว.'],
            [['emp_type'], 'string'],
            [['emp_name', 'emp_lname'], 'string', 'max' => 50],
            [['emp_uname', 'em_licenlse'], 'string', 'max' => 20],
            [['emp_pwd'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'รหัสเจ้าหน้าที่',
            'emp_name' => 'ชื่อเจ้าหน้าที่',
            'emp_lname' => 'นามสกุลเจ้าหน้าที่',
            'emp_uname' => 'UserName',
            'emp_pwd' => 'Password',
            'em_licenlse' => 'เลขใบประกอบวิชาชีพ',
            'emp_type' => 'ประเภทผู้ใช้งานระบบ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['emp_id' => 'emp_id']);
    }
}
