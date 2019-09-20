<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
//use kartik\widgets\ActiveForm;
use yii\imagine\image;

/* @var $this yii\web\View */
/* @var $model app\models\NewsModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'en',
            'minHeight' => 200,
        ],

    ]);?>
<!--    --><?//= $form->field($model, 'image')-> ?>

<!--    --><?//= $form->field($model, 'image')->textInput(['type' => 'file']) ?>
    <?=  $form->field($model, 'image')->fileInput() ?>

<!--    --><?//= $form->field($model, 'view')->textInput() ?>

<!--    --><?//= $form->field($model, 'added_date')->textInput() ?>

<!--    --><?//= $form->field($model, 'update_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
