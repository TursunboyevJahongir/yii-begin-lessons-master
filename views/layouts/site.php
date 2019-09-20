<?php
    use app\assets\SiteAsset;
    use yii\helpers\Html;
    use \yii\bootstrap\Nav;
    use yii\bootstrap\ActiveForm;
    use \yii\helpers\Url;

    SiteAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <nav div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <ul class="social-network">
                <li><?= Html::a('UZ', ['site/change-lang', 'lang_id'=>'uz']) ?></li>
                <li><?= Html::a('RU', ['site/change-lang', 'lang_id'=>'ru']) ?></li>
                <li><?= Html::a('EN', ['site/change-lang', 'lang_id'=>'en']) ?></li>
            </ul>
            <ul class="info">
                <li>
                    <p><i class="fa fa-phone"></i>+99 893 758 6332</p>
                </li>
                <li><a href="#"><i class="fa fa-envelope"></i>hello@Dewi.com</a></li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="<?php echo Yii::$app->homeUrl; ?>"><h1><span>D</span>ewi</h1></a>
                    </div>
                </div>

                <div class="navbar-collapse collapse">
                    <div class="menu row">
                        <div class="col-lg-9">
<!--                        <ul class="nav nav-tabs" role="tablist">-->
<!--                            <li role="presentation"><a href="index.html" class="active">Home</a></li>-->
<!--                            <li role="presentation"><a href="services.html">Services</a></li>-->
<!--                            <li><a href="blog.html">Blog</a></li>-->
<!--                            <li role="presentation"><a href="portfolio.html">Portfolio</a></li>-->
<!--                            <li role="presentation"><a href="contact.html">Contact</a></li>-->
<!--                        </ul>-->
                        <?php
                            echo Nav::widget([
                                'options' => ['class' => 'nav nav-tabs'],
                                'items' => [
                                    ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
                                    ['label' => Yii::t('app', 'News'), 'url' => ['/site/news']],
//                                    ['label' => 'Pages', 'url' => ['/pages/index']],
                                    ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']],
                                    ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
                                    Yii::$app->user->isGuest ? (
                                    ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']]
                                    ) : (
                                        '<li>'
//                                    ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            Yii::$app->user->identity->username ,
                                            ['class' => 'btn btn-link logout glyphicon glyphicon-user']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                    ),
                                ],
                            ]);
                        ?>
                        </div>

                        <div class="col-lg-3 input-group"">

                            <?php ActiveForm::begin(['method' => 'GET','action'=>[Url::to('/site/search')],]); ?>
                                <div class="input-group">

                                    <?php echo Html::input('text', 'key', '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Search for...',
                                        'style' => 'height:33px;margin-top:0px',
                                    ]); ?>

                                    <div class=" input-group-btn">
                                        <?php echo Html::button('', [
                                            'class' => 'btn btn-default glyphicon glyphicon-search',
                                            'type' => 'submit',
                                            'style'=>'margin-top:-1px;height:33px',
                                        ]) ?>
                                    </div>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- CONTENT BEGIN -->
<?php echo $content; ?>
<!-- CONTENT END -->

</div>

<div class="jumbotron">
    <h1>We can <span>help build your</span> project!</h1>
    <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Get it now</a></p>
</div>

<footer>
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 f-about">
                    <a href="index.html"><h1><span>D</span>ewi</h1></a>
                    <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>

                </div>
                <div class="col-md-4 l-posts">
                    <h3 class="widgetheading">Latest Posts</h3>
                    <ul>
                        <li><a href="#">This is awesome post title</a></li>
                        <li><a href="#">Awesome features are awesome</a></li>
                        <li><a href="#">Create your own awesome website</a></li>
                        <li><a href="#">Wow, this is fourth post title</a></li>
                    </ul>
                </div>
                <div class="col-md-4 f-contact">
                    <h3 class="widgetheading">Stay in touch</h3>
                    <a href="#">
                        <p><i class="fa fa-envelope"></i> example@gmail.com</p>
                    </a>
                    <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
                    <p><i class="fa fa-home"></i> Dewi inc | PO Box 23456 Little Lonsdale St, New York <br> Victoria 8011 USA</p>
                </div>
            </div>
        </div>
    </div>

    <div class="last-div">
        <div class="container">
            <div class="row">
                <div class="copyright">
                    &copy; Dewi Theme. All Rights Reserved
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Dewi
                        -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <nav class="foot-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
</footer>

<?php $this->endBody(); ?>

<script>


</script>
<?php
    $js=<<<JS
    // $( "#search_button" ).hover('color','red');
// $( "#search_button" ).keyup(function () {
//         $("#search_button").css( "color", "rgba(0,0,0,0.60)" );
//         $( "#search_button" ).onmousemove('color','red');
wow = new WOW({}).init();
JS;
    $this->registerJs($js);

?>
</body>
</html>
<?php $this->endPage(); ?>
