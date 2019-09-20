<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\BaseStringHelper;
use yii\data\Pagination;
use yii\widgets\LinkPager;
$this->title = $model->name;
?>
<input width="">
<div class="row">

    <div class="col-lg-9">
        <div class="jumbotron">
            <h2><?= Html::encode($model->name) ?></h2>

        </div>
        <h4><?=Html::encode($model->content)?></h4>
    </div>
    <div class="col-lg-3">
        <div class="box">

            <?php
            Pjax::begin();

            foreach ($news as $key=> $model) :
            ?>
            <div class="col-lg-12">
                <div class="thumbnail cardHover wow bounceIn animated" data-wow-offset="0"  data-wow-delay="<?=$key*0.7?>s" style="height: 200px"> <span class="hidetext" style="margin-left: -18px;margin-top: 20px;">Jahongir</span>
                    <div class="img-thumbnail cardHover" >
                        <!--                            --><?php //echo Html::img('/web/site/img/team/1.jpg',['style'=>'width:200px;position: absolute;z-index:1;margin-left:-100px']); ?>
                        <img src="<?=\yii\helpers\Url::to('/web/site/img/team/1.jpg')?>" style="width:200px;position: absolute;z-index:0;margin-left:-100px">
                        <div class="caption ">
                            <h3 style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;color: white;z-index: 2;position: absolute"><?=$model->name?></h3>
                            <p style="z-index: 20;position: absolute"><?php echo BaseStringHelper::truncateWords($model->content,20,'...'); ?></p>
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


                <?php
                endforeach;

                // display pagination
                echo LinkPager::widget([
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
