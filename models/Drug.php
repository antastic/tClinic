<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drug".
 *
 * @property int $drug_id รหัสยา
 * @property string $drugname ชือยา
 * @property string $used วิธีใช้
 *
 * @property Dispense[] $dispenses
 * @property Drugitem[] $drugitems
 */
class Drug extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drug';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['drugname'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            [['drugname', 'used'], 'string', 'max' => 200],
            [['drugname'], 'unique','message' => 'ข้อมูลมีอยู่แล้ว.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'drug_id' => 'รหัสยา',
            'drugname' => 'ชือยา',
            'used' => 'วิธีใช้',
        ];
    }

    /**053885612
     * @return \yii\db\ActiveQuery
     */
    public function getDispenses()
    {
        return $this->hasMany(Dispense::className(), ['drug_id' => 'drug_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrugitems()
    {
        return $this->hasMany(Drugitem::className(), ['drug_id' => 'drug_id']);
    }
}
