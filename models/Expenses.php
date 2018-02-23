<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expenses".
 *
 * @property int $ex_id
 * @property string $Expenses
 *
 * @property Dispense[] $dispenses
 */
class Expenses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expenses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Expenses'], 'required'],
            [['Expenses'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ex_id' => 'รหัสค่าใช้จ่าย',
            'Expenses' => 'ประเภทค่าใช้จ่าย',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDispenses()
    {
        return $this->hasMany(Dispense::className(), ['Expenses_id' => 'ex_id']);
    }
}
