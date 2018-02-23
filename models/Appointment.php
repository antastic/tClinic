<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $apps_id รหัสนัด
 * @property string $apps_date วันนัด
 * @property string $apps_details รายละเอียดการนัด
 * @property int $emp_id
 * @property int $service_id
 *
 * @property Service $service
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apps_date', 'apps_details', 'emp_id', 'service_id'], 'required'],
            [['apps_date'], 'safe'],
            [['apps_details'], 'string'],
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
            'apps_id' => 'รหัสนัด',
            'apps_date' => 'วันนัด',
            'apps_details' => 'รายละเอียดการนัด',
            'emp_id' => 'เจ้าหน้าที่นัด',
            'service_id' => 'รหัสการตรวจรักษา',
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
