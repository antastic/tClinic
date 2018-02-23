<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dispense".
 *
 * @property int $vsd_id เลขที่
 * @property int $drug_amount จำนวน
 * @property string $drug_prices ราคา
 * @property int $drug_id เลขที่ยา
 * @property int $emp_id
 * @property string $vtd_unit
 * @property int $service_id
 * @property int $Expenses_id
 *
 * @property Expenses $expenses
 * @property Service $service
 * @property Drug $drug
 */
class Dispense extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dispense';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['drug_amount', 'drug_prices', 'drug_id', 'emp_id', 'vtd_unit', 'service_id', 'Expenses_id'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            [['drug_amount', 'drug_id', 'emp_id', 'service_id', 'Expenses_id'], 'integer'],
            [['drug_prices'], 'number'],
            [['vtd_unit'], 'string', 'max' => 20],
            [['Expenses_id'], 'exist', 'skipOnError' => true, 'targetClass' => Expenses::className(), 'targetAttribute' => ['Expenses_id' => 'ex_id']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'sv_id']],
            [['drug_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drug::className(), 'targetAttribute' => ['drug_id' => 'drug_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vsd_id' => 'เลขที่',
            'drug_amount' => 'จำนวน',
            'drug_prices' => 'ราคา',
            'drug_id' => 'เลขที่ยา',
            'emp_id' => 'เจ้าหน้าที่',
            'vtd_unit' => 'หน่วย',
            'service_id' => 'รหัสบริการ',
            'Expenses_id' => 'ประเภทการบริการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasOne(Expenses::className(), ['ex_id' => 'Expenses_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['sv_id' => 'service_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrug()
    {
        return $this->hasOne(Drug::className(), ['drug_id' => 'drug_id']);
    }
}
