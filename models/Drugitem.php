<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drugitem".
 *
 * @property int $ip_id
 * @property string $ip_date
 * @property int $drug_id
 * @property int $in_amount
 * @property string $in_unit
 * @property string $ip_exp
 * @property string $ip_status
 *
 * @property Drug $drug
 */
class Drugitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drugitem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_date', 'drug_id', 'in_amount', 'in_unit', 'ip_exp', 'ip_status'], 'required'],
            [['ip_date', 'ip_exp'], 'safe'],
            [['drug_id', 'in_amount'], 'integer'],
            [['ip_status'], 'string'],
            [['in_unit'], 'string', 'max' => 45],
            [['drug_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drug::className(), 'targetAttribute' => ['drug_id' => 'drug_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ip_id' => 'รหัสรับยา',
            'ip_date' => 'วันที่รับยา',
            'drug_id' => 'ชื่อยา',
            'in_amount' => 'จำนวน',
            'in_unit' => 'หน่วย',
            'ip_exp' => 'วันหมดอายุ',
            'ip_status' => 'สถานะ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrug()
    {
        return $this->hasOne(Drug::className(), ['drug_id' => 'drug_id']);
    }
}
