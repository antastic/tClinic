<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visit".
 *
 * @property int $id เลขทีบริการ
 * @property string $datetimesv วันที
 * @property int $visit_vts สัญญาณชีพ
 * @property int $visit_bpup ความดัน
 * @property int $visit_bpdown
 * @property double $visit_weigth น้ำหนัก
 * @property int $visit_higth ส่วนสูง
 * @property string $visit_cc อาการสำคัญ
 * @property int $emp_id
 * @property int $pt_id
 *
 * @property Service[] $services
 * @property Employee $emp
 * @property Patient $pt
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetimesv'], 'safe'],
            [['visit_vts', 'visit_bpup', 'visit_bpdown', 'visit_weigth', 'visit_cc', 'emp_id', 'pt_id'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            [['visit_vts', 'visit_bpup', 'visit_bpdown', 'visit_higth', 'emp_id', 'pt_id'], 'integer'],
            [['visit_weigth'], 'number'],
            [['visit_cc'], 'string', 'max' => 200],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['emp_id' => 'emp_id']],
            [['pt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['pt_id' => 'pt_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'เลขทีบริการ',
            'datetimesv' => 'วันที',
            'visit_vts' => 'สัญญาณชีพ',
            'visit_bpup' => 'ความดันด้านบน',
            'visit_bpdown' => 'ความดันด้านล่าง',
            'visit_weigth' => 'น้ำหนัก',
            'visit_higth' => 'ส่วนสูง',
            'visit_cc' => 'อาการสำคัญ',
            'emp_id' => 'เจ้าหน้าที่',
            'pt_id' => 'ชื่อ นามสกุลผู้รับบริการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['visit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['emp_id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPt()
    {
        return $this->hasOne(Patient::className(), ['pt_id' => 'pt_id']);
    }
}
