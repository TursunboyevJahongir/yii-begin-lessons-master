<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ImageUpload extends Model
{

    public $imageFile;

    public function rules()
    {
        return [
            ['imageFile', 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png, jpeg']
        ];
    }

    public function attributeLabels()
    {
        return [
            'imageFile' => 'Rasm fayli'
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = Yii::getAlias('@upload');
            $fileName = uniqid();
            $fileExt = $this->imageFile->extension;
            return $this->imageFile->saveAs($path.$fileName.'.'.$fileExt);
        }
        else
            return false;
    }

}