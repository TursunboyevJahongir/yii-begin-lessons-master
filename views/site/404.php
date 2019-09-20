<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
?>
<style>
    .errorr{
        font: 100px Corbel ;
        text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;
        color: yellow;
    }
</style>
<!-- 404 -->
<div class="error pb-5 pt-2 text-center" id="price">
    <div class="container pb-xl-5 pb-lg-3">
        <?php echo Html::img('/web/site/img/error.png',['class'=>'wow bounceIn animated']); ?>
        <div class="row">
            <span  class="errorr wow bounceIn animated" data-wow-delay="0.4s">4</span>
            <span class="errorr wow bounceIn animated" data-wow-delay="1s"  style="font-family:Consolas ">0</span>
            <span  class="errorr wow bounceIn animated" data-wow-delay="1.6s">4</span>
        </div>
        <h3 class="title-w3 text-bl my-3 font-weight-bold text-capitalize">Oops! This page can’t be found.</h3>

        <a href=<?=Url::to('/web/site/index')?> class="btn button-style mt-5">Back To Home</a>
    </div>
</div>
<!-- //404 -->
