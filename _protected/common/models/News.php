<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use common\models\Newstype;
/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $detail
 * @property integer $newtype
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property integer $status
 */
class News extends \yii\db\ActiveRecord
{
    public $upload_folder = "/uploads/files";
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','detail','newtype','file_pdf'], 'required'],
            [['detail'], 'string'],
            [['newtype', 'created_by', 'updated_by', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['file_pdf'], 'file', 'maxFiles' => 5, 'extensions' => 'pdf'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'หัวข้อข่าว',
            'detail' => 'รายละเอียด',
            'newtype' => 'ประเภทข่าว',
            'file_pdf' => 'หนังสือราชการ',
            'created_at' => 'วันที่เพิ่มข้อมูล',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'status' => 'Status',
        ];
    }
    
    /*
    * UploadFiles เป็น Method ในการ upload หลายไฟล์ สูงสุด 10 ไฟล์ตามที่ได้กำหนดจาก rules() และจะ return ชื่อไฟล์ aaaa.aaa, bbbb.bbb, ....
    */
    public function uploadFiles(){
        $filesName = []; //กำหนดชื่อไฟล์ที่จะ return
        if($this->validate()){
            if($this->file_pdf){
                foreach($this->file_pdf as $file){
                    $fileName = substr(md5(rand(1,1000).time()),0,15).'.'.$file->extension;//เลือกมา 15 อักษร .นามสกุล
//$fileName = iconv('UTF-8','WINDOWS-874',$file->baseName).'.'.$file->extension; //ใช้ไฟล์ภาษาไทย
                    $file->saveAs(Yii::getAlias(str_replace("/backend", "", Yii::getAlias('@webroot')). $this->upload_folder.'/'.$fileName));
  
                    $filesName[] = $fileName;
                }

                if($this->isNewRecord){ //ถ้าเป็นการเพิ่ม Record ใหม่ให้บันทึกไฟล์ aaa.aaa,bbb.bbb ....
                    return implode(',', $filesName);
                }else{//ถ้าเป็นการปรับปรุงให้เพิ่มจากของเดิม
                    return implode(',', ArrayHelper::merge($fileName, $this->getOldAttribute('file_pdf') ? explode(',', $this->getOldAttribute('file_pdf')) : []));
                }
            }//end files upload

        }//end validate
        return $this->isNewRecord ? false : $this->getOldAttribute('file_pdf'); //ถ้าไม่มีการ upload ให้ใช้ข้อมูลเดิม
    }
    
    public function getFiles()
    {
        return explode(',', $this->file_pdf);
    }
    
    public function getNewstype() {
        return $this->hasOne(Newstype::className(), ['id' => 'newtype']);
    }
}
