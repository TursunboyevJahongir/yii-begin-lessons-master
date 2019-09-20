<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title = 'Fayl yuklash';
/* @var $this yii\web\View */
/* @var $model \app\models\ImageUpload */
?>
<h1><?= $this->title ?></h1>

<?php
    $form =  ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])
?>

<?=  $form->field($model, 'imageFile')->fileInput() ?>

<?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>

<?php
    ActiveForm::end();
?>
