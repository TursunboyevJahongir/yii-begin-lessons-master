<?php
    use yii\helpers\Html;
    use yii\widgets\Pjax;
    use yii\helpers\BaseStringHelper;
    use yii\data\Pagination;
    use yii\widgets\LinkPager;
    $this->title = $model->name;
?>

    <div class="jumbotron">
        <h2><?= Html::encode($model->name) ?></h2>

    </div>
<div class="row">


<!--        <h4>--><?//=Html::encode($model->content)?><!--</h4>-->
    <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
        <div class="col-lg-12 col-md-12 col-xl-12">
            <div class="thumbnail" >
                <div class="img-thumbnail" >
                    <?php echo Html::img('/web/site/img/slider/1.jpg',['style'=>'border-radius:1%;width:100%']); ?>
                    <div class="caption ">
                        <h3><?= Html::encode($model->name) ?></h3>
                        <p><?=Html::encode($model->content)?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 container">


                <?php
                Pjax::begin();

                foreach ($news as $key=> $model) :
                ?>
                <div class="col-lg-12 col-md-6 col-xl-6">
                    <div class="thumbnail cardHover wow bounceIn animated" data-wow-offset="0"  data-wow-delay="<?=$key*0.7?>s" > <span class="hidetext" style="margin-left: -18px;margin-top: 20px;">Jahongir</span>
                        <div class="img-thumbnail cardHover" >
<!--                            --><?php //echo Html::img('/web/site/img/team/1.jpg',['style'=>'width:200px;position: absolute;z-index:1;margin-left:-100px']); ?>
                            <img src="<?=\yii\helpers\Url::to('/web/site/img/team/1.jpg')?>" style="width:65%;">
                            <div class="caption ">
                                <h3 style="text-shadow: 1px 1px 2px green, 0px 0px 25px darkred, 0 0 5px blue;color: black;font: 15px 'Baskerville Old Face'"><?=BaseStringHelper::truncateWords($model->name,5)?></h3>
                                <p><?php echo BaseStringHelper::truncateWords($model->content,10,'...'); ?></p>
                                <!--                                        <a href="--><?//=Url::to('search');?><!--" class="btn btn-default" role="button" methods="get" data="hasgvdhg">Read more</a>-->
                                <?php  if(['class'=>'col-md']):
                                    Html::a('ok','',['class'=>'btn']);
                                endif;
                                    ?>
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
                        'maxButtonCount' => 3
                    ]);
                    ?>
                </div>
                <?php
                Pjax::end();

                ?>



    </div>
</div>
