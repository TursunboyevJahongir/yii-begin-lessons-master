<?php
    use yii\helpers\Html;
    use yii\widgets\MaskedInput;
?>

<?php
    echo Html::a('Sahifalar', ['pages/index']);
    echo MaskedInput::widget([
        'name' => 'phone',
        'mask' => '99-999-99-99'
    ]);
    /** Using with model
    echo $form->field($model, 'name')->widget(MaskedInput::className(), [
            'mask' => '99-999-99-99'
    ]);
    **/
    echo \vova07\imperavi\Widget::widget([
        'name' => 'redactor',
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'clips',
                'fullscreen',
            ],
            'clips' => [
                ['Lorem ipsum...', 'Lorem...'],
                ['red', '<span class="label-red">red</span>'],
                ['green', '<span class="label-green">green</span>'],
                ['blue', '<span class="label-blue">blue</span>'],
            ],
        ],
    ]);

?>
