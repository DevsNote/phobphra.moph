<?php

namespace common\models;

use Yii;
use common\models\News;
/**
 * This is the model class for table "newstype".
 *
 * @property integer $id
 * @property string $newstype
 * @property integer $status
 */
class Newstype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newstype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['newstype'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'newstype' => 'Newstype',
            'status' => 'Status',
        ];
    }
    
    public function getNews()
    {
        return $this->hasMany(News::className(), ['newstype' => 'id']);
    }
}
