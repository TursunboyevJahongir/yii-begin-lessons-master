<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 18.09.2019
 * Time: 9:23
 */

namespace app\models;

use Yii;
use yii\base\Model;

class NewsApiModel extends Model
{
    public $title;
    public $body;

    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['title', 'body'], 'string'],
        ];
    }

}