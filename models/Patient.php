<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $pt_id
 * @property string $ptName
 * @property string $ptLname
 * @property string $ptAddress
 * @property string $pt_phone
 * @property string $pt_dad
 * @property string $pt_mom
 * @property string $pt_blood
 * @property string $pt_bloodtype
 * @property string $pt_drug
 * @property string $pt_dx
 * @property string $pt_sex
 * @property string $pt_bd
 * @property string $pt_cid
 * @property string $pt_datail
 *
 * @property Visit[] $visits
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ptName', 'ptLname', 'ptAddress', 'pt_phone', 'pt_sex', 'pt_bd', 'pt_cid'], 'required','message' => 'กรอกข้อมูลให้ครบ.'],
            //[['pt_cid'], 'integer'],
            [['ptAddress', 'pt_blood', 'pt_bloodtype', 'pt_sex', 'pt_datail'], 'string'],
            [['pt_bd'], 'safe'],
            [['ptName', 'ptLname', 'pt_dad', 'pt_mom'], 'string', 'max' => 50],
            [['pt_phone'], 'string', 'max' => 12],
            [['pt_drug', 'pt_dx'], 'string', 'max' => 200],
            [['pt_cid'], 'string', 'max' => 17],
            [['pt_cid'], 'unique','message' => 'ข้อมูลมีอยู่แล้ว.'],
           // [['pt_cid'], 'validateIdCard'],
        ];
    }
    
   /* public function validateIdCard()
    {
        $id = str_split(str_replace('-','', $this->id_card)); //ตัดรูปแบบและเอา ตัวอักษร ไปแยกเป็น array $id
        $sum = 0;
        $total = 0;
        $digi = 13;
        
        for($i=0; $i<12; $i++){
            $sum = $sum + (intval($id[$i]) * $digi);
            $digi--;
        }
        $total = (11 - ($sum % 11)) % 10;
        
        if($total != $id[12]){ //ตัวที่ 13 มีค่าไม่เท่ากับผลรวมจากการคำนวณ ให้ add error
            $this->addError('id_card', 'หมายเลขบัตรประชาชนไม่ถูกต้อง');
        }
        
        
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pt_id' => 'รหัสผู้รับบริการ',
            'ptName' => 'ชื่อผู้รับบริการ',
            'ptLname' => 'นามสกุล',
            'ptAddress' => 'ทีอยู่',
            'pt_phone' => 'เบอร์โทรศัพท์',
            'pt_dad' => 'พ่อ',
            'pt_mom' => 'แม่',
            'pt_blood' => 'กรุ๊ปเลือด',
            'pt_bloodtype' => 'ประเภทกรุ๊ปเลือด',
            'pt_drug' => 'แพ้ยา',
            'pt_dx' => 'โรคประจำตัว',
            'pt_sex' => 'เพศ',
            'pt_bd' => 'วันเกิด',
            'pt_cid' =>'เลขประจำตัว',
            'pt_datail' => 'รายละเอียดอื่นๆ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['pt_id' => 'pt_id']);
    }
}
