<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
//use yii\BaseYii;
use yii\data\Pagination;
use yii\widgets\Pjax;
use yii\helpers\BaseStringHelper;
use yii\widgets\LinkPagerinkPager;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron">
    <h2><?= Html::encode(Yii::t('app', $this->title))?></h2>
</div>

<div class="box">
    <div class="container">
        <div class="row">

            <?php
            Pjax::begin();

            foreach ($news as $key=> $model) :
                ?>
                <div class="col-md-4">
                    <div class="thumbnail cardHover wow bounceIn animated" data-wow-offset="0" data-wow-delay="<?=$key*0.5?>s"> <span class="hidetext" style="margin-left: -18px;margin-top: 20px;">Jahongir</span>
                        <div class="img-thumbnail cardHover" >
                            <?php echo Html::img('/web/site/img/team/1.jpg'); ?>
                            <div class="caption ">
                                <h3 style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size: 20px;color: white"><?=BaseStringHelper::truncateWords($model->title,4)?></h3>
                                <p><?php echo BaseStringHelper::truncateWords($model->body,20,'...'); ?></p>
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
            ]);
            ?>
        </div>
        <?php
        Pjax::end();

        ?>

    </div>
</div>
</div>
