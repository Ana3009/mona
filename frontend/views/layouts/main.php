<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="probootstrap-loader"></div>
<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">Connect</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#">Despre noi</a></li>
            <li><?= Html::a('Cosmetica', ['/site/categories', 'id' => 1])?></li>
            <li><a href="#">Corporal</a></li>   
            <li><a href="#">Programe</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
</header>
<div class="probootstrap-main">
    <?= $content ?>
</div>

<footer class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Connect</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com">ProBootstrap</a> Demo Images <a href="https://unsplash.com/">Unsplash</a></p>
        </div>
      </div>
    </div>
  </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
