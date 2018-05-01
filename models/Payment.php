<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $ic_id
 * @property string $ic_date
 * @property string $ic_summary
 * @property int $emp_id
 * @property int $service_id
 *
 * @property Service $service
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ic_date', 'ic_summary', 'emp_id', 'service_id'], 'required'],
            [['ic_date'], 'safe'],
            [['ic_summary'], 'number'],
            [['emp_id', 'service_id'], 'integer'],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'sv_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ic_id' => 'เลขที่',
            'ic_date' => 'วีนที่ชำระเงิน',
            'ic_summary' => 'จำนวนเงิน',
            'emp_id' => 'เจ้าหน้าที่',
            'service_id' => 'รหัสบริการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['sv_id' => 'service_id']);
    }
}
