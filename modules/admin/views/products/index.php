<?php
/* @var $this \yii\web\View */
/* @var $xabar string */
/* @var $posts array */
$this->title = "Bu Maxsulotlar";
?>
<h3><?= $xabar ?></h3>
<div>
    <?php foreach($posts as $item): ?>
    <div>
        <h3><?= $item->title ?></h3>
        <p><?= $item->content ?></p>
    </div>
    <?php endforeach; ?>
</div>