<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $sv_id
 * @property string $svdx
 * @property string $sv_details
 * @property int $visit_id
 * @property int $emp_id
 *
 * @property Appointment[] $appointments
 * @property Dispense[] $dispenses
 * @property Payment[] $payments
 * @property Visit $visit
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['svdx', 'visit_id', 'emp_id'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            [['visit_id', 'emp_id'], 'integer'],
            [['svdx', 'sv_details'], 'string', 'max' => 200],
            [['visit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Visit::className(), 'targetAttribute' => ['visit_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sv_id' => 'Sv ID',
            'svdx' => 'โรค',
            'sv_details' => 'รายละเอียดการรักษา',
            'visit_id' => 'รหัสการรับบริการ',
            'emp_id' => 'เจ้าหน้าที่',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['service_id' => 'sv_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDispenses()
    {
        return $this->hasMany(Dispense::className(), ['service_id' => 'sv_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['service_id' => 'sv_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisit()
    {
        return $this->hasOne(Visit::className(), ['id' => 'visit_id']);
    }
}
