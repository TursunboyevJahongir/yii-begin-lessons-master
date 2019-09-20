<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
/* @var $this \yii\web\View */
/* @var $dataProvider bool|\yii\data\ActiveDataProvider */

$this->title = 'Searching results';
?>
<div class="jumbotron">
    <h2><?= Html::encode(Yii::t('app', $this->title))?>...</h2>
</div>

<div class="our-services">
    <div class="container">
        <div class="row">
            <?php ActiveForm::begin(['method' => 'GET','action'=>[\yii\helpers\Url::to('/site/search')]]); ?>
            <div class="col-md-10">
                <?php echo Html:: input('text', 'key', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Qidirish uchun kalit yozing...',
                    'autocomplete' => 'off',
                ]); ?>

            </div>
            <div class="col-md-2">
                <?php echo Html::button('Qidiruv', [
                    'class' => 'btn btn-danger',
                    'type' => 'submit'
                ]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-12">
            <?php
            echo '<h3> "<u style="color: red;font-size: 30px">'.$_GET['key'].'</u>" so`rovi bo`yicha</h3>';
                if ($dataProvider) {
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_search-item'
                    ]);
                }
                else {
                    echo '<h3>Qidirsh uchun kalit yozing!</h3>';
                }
            ?>

            <input id="data" value="<?=$_GET['key']?>" type=hidden>
        </div>
    </div>
</div>
<?php
    $js=<<<JS
        $("#data").valueOf();
JS;

?>
