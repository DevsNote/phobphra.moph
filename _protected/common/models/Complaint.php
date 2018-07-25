<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "complaint".
 *
 * @property int $id
 * @property string $complaint_name
 * @property string $complaint_tel
 * @property string $complaint_email
 * @property string $complaint_subject
 * @property string $complaint_detail
 * @property string $complaint_ip
 * @property string $created_at
 * @property int $complaint_status
 * @property string $complaint_answer
 * @property string $updated_at
 */
class Complaint extends \yii\db\ActiveRecord
{
    public $verifyCode;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'complaint';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complaint_name', 'complaint_tel', 'complaint_email', 'complaint_subject', 'complaint_detail'], 'required'],
            [['complaint_detail', 'complaint_answer'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['complaint_status'], 'integer'],
            [['complaint_name', 'complaint_email', 'complaint_subject'], 'string', 'max' => 150],
            [['complaint_tel'], 'string', 'max' => 10],
            [['complaint_ip'], 'string', 'max' => 20],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'complaint_name' => 'ชื่อผู้ส่งข้อมูล',
            'complaint_tel' => 'เบอร์โทรศัพท์',
            'complaint_email' => 'Email',
            'complaint_subject' => 'หัวข้อ',
            'complaint_detail' => 'รายละเอียด',
            'complaint_ip' => 'IP',
            'created_at' => 'วันที่เพิ่มข้อมูล',
            'complaint_status' => 'สถานะการตอบกลับ',
            'complaint_answer' => 'Complaint Answer',
            'updated_at' => 'Updated At',
            'verifyCode' => Yii::t('app', 'Verification Code'),
        ];
    }
}
