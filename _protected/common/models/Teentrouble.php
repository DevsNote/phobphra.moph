<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teen_trouble".
 *
 * @property int $id
 * @property int $teen_trouble_type_id
 * @property string $title
 * @property string $detail
 * @property string $email
 * @property string $facebook
 * @property string $nickname
 * @property string $post_ip
 * @property string $created_at
 * @property int $answer_by
 * @property string $answer_detail
 * @property string $answer_at
 * @property int $approve_post
 */
class Teentrouble extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teen_trouble';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teen_trouble_type_id', 'title', 'detail', 'nickname'], 'required'],
            [['teen_trouble_type_id', 'answer_by', 'approve_post'], 'integer'],
            [['detail', 'answer_detail'], 'string'],
            [['created_at', 'answer_at'], 'safe'],
            [['title', 'email', 'facebook'], 'string', 'max' => 150],
            [['nickname'], 'string', 'max' => 50],
            [['post_ip'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teen_trouble_type_id' => 'Teen Trouble Type ID',
            'title' => 'Title',
            'detail' => 'Detail',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'nickname' => 'Nickname',
            'post_ip' => 'Post Ip',
            'created_at' => 'Created At',
            'answer_by' => 'Answer By',
            'answer_detail' => 'Answer Detail',
            'answer_at' => 'Answer At',
            'approve_post' => 'Approve Post',
        ];
    }
}
