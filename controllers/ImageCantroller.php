<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\ImageUpload;
use yii\web\UploadedFile;
class ImageController extends Controller
{
    public function actionIndex()
    {
        $model = new ImageUpload();
        /* Begin Upload */
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->upload()) {
                Yii::$app->session->setFlash('success', 'Yuklandi!');
                return $this->redirect(['image/index']);
            }
        }
        return $this->render('index', [
            'model' => $model
        ]);
    }
}