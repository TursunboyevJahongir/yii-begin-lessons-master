<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron">
    <h2><?= Html::encode(Yii::t('app', $this->title))?></h2>
</div>

<div class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-heart-o fa-3x"></i>
                        </div>
                        <h4><?php echo Yii::t('app', 'Quick Support')?></h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-desktop fa-3x"></i>
                        </div>
                        <h4>Web Design</h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-thumbs-o-up fa-3x"></i>
                        </div>
                        <h4>Easy Customize</h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-leaf fa-3x"></i>
                        </div>
                        <h4>Highly Custumizable</h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.8s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-laptop fa-3x"></i>
                        </div>
                        <h4>Free Support</h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.1s">
                    <div class="services">
                        <div class="icons">
                            <i class="fa fa-camera fa-3x"></i>
                        </div>
                        <h4>Photography</h4>
                        <p>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        </p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
