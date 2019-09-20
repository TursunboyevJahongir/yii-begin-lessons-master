<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property int $view
 * @property string(datetime) $added_date
 * @property string(datetime) $update_date
 */
class NewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['body'], 'string'],
            [['view'], 'integer'],
            [['image'],'file','extensions'=>'jpg,jpeg,png', 'skipOnEmpty' => true],
            [['added_date', 'update_date'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'image' => 'Image',
            'view' => 'View',
            'added_date' => 'Added Date',
            'update_date' => 'Update Date',
        ];
    }
}
