<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class ProductsController extends Controller
{
    /**
     * Main index action
     * @return mixed
     * */
    public function actionIndex()
    {
        $posts = [
            (object)['title'=>'Bu Post', 'content'=>'Lorem ipsum dolor sit'],
            (object)['title'=>'Bu Post test uchun', 'content'=>'Test Lorem ipsum dolor sit'],
        ];

        $message = 'Hello WORLD';

        return $this->render('index',[
            'xabar' => $message,
            'posts' => $posts
        ]);
    }

    public function actionView()
    {
        if (true){
            //return $this->redirect(['pages/index']);
        }

//        $_GET['name'];
//        Yii::$app->request->get('name');
//        $_POST;

        return $this->render('view');
    }

    public function actionComment()
    {
//        return $_GET['comment_text'];
        if (Yii::$app->request->isPost){
            return Yii::$app->request->get('comment_text');
        }
        return $this->render('comment');
    }

}