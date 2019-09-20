<?php
use yii\helpers\Html;
use yii\widgets\LinkPagerinkPager;
use yii\helpers\BaseStringHelper;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="slider">
    <div class="img-responsive">
        <ul class="bxslider">
            <li><?php echo Html::img('/web/site/img/slider/1.jpg')?></li>
            <li><?php echo Html::img('/web/site/img/slider/2.jpg')?></li>
            <li><?php echo Html::img('/web/site/img/slider/3.jpg')?></li>
        </ul>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                <div class="align-center">
                    <h4><?=Yii::t('app', 'Quick Support')?></h4>
                    <div class="icon">
                        <i class="fa fa-heart-o fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                <div class="align-center">
                    <h4>Web Design</h4>
                    <div class="icon">
                        <i class="fa fa-desktop fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
                <div class="align-center">
                    <h4>Easy Customize</h4>
                    <div class="icon">
                        <i class="fa fa-location-arrow fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail cardHover" >
                    <div class="img-thumbnail cardHover" >
                        <?php echo Html::img('/web/site/img/team/1.jpg'); ?>
                        <div class="caption ">
                            <h3>John Doe</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail cardHover" >
                    <div class="img-thumbnail cardHover" >
                        <?php echo Html::img('/web/site/img/team/2.jpg'); ?>
                        <div class="caption">
                            <h3>Hidayah</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="wi">
                <div class="thumbnail cardHover" >
                    <div class="img-thumbnail cardHover" >
                        <?php echo Html::img('/web/site/img/team/4.jpg'); ?>
                        <div class="caption">
                            <h3>John Doe</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="box">
        <div class="container">
            <div class="row">

                <?php
                Pjax::begin();

                    foreach ($news as $key=> $model) :
                    ?>
                        <div class="col-md-4 ">
                            <div class="thumbnail cardHover wow bounceIn animated" data-wow-offset="0" data-wow-delay="<?=$key*0.7?>s"> <span class="hidetext" style="margin-left: -18px;margin-top: 20px;">Jahongir</span>
                                <div class="img-thumbnail cardHover" >
                                    <?php echo Html::img('/web/site/img/team/1.jpg'); ?>
                                    <div class="caption ">
                                        <h3 style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size: 20px;color: white"><?=BaseStringHelper::truncateWords($model->name,4)?></h3>
                                        <p><?php echo BaseStringHelper::truncateWords($model->content,20,'...'); ?></p>
<!--                                        <a href="--><?//=Url::to('search');?><!--" class="btn btn-default" role="button" methods="get" data="hasgvdhg">Read more</a>-->
                                        <?php
                                            echo Html::a('Read more', ['more'], [
                                                'data' => [
                                                    'method' => 'get',
                                                    'params' => [
                                                        'id' => $model->id,
//                                                        'param2' => 'value2',
                                                    ],

                                                ],
                                                'class'=>'btn btn-default'
                                            ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php
                    endforeach;

                    // display pagination
                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                        'maxButtonCount' => 3
                    ]);
                    ?>
                </div>
                <?php
                Pjax::end();

                    ?>

            </div>
        </div>
    </div>


