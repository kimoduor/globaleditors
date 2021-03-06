<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>
        <div class="wrap">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [

                    ['label' => 'Top Label', 'items' => [
                            ['label' => 'Action', 'url' => '#'],
                            ['label' => 'Another action', 'url' => '#'],
                            ['label' => 'Something else here', 'url' => '#'],
                        ]],
                ],
            ]);
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $url = Url::base();
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About Global Editors', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Setup', 'items' => [
                            [ 'label' => 'Countries', 'url' => Url::toRoute(['tblcountries/index'])],
                            [ 'label' => 'Education levels', 'url' => Url::toRoute(['tbleducation/index'])],
                            [ 'label' => 'Editors', 'url' => Url::toRoute(['tbleditors/index'])],
                            [ 'label' => 'Order Status', 'url' => Url::toRoute(['tblorderstatus/index'])],
                            [ 'label' => 'Clients', 'url' => Url::toRoute(['tblclients/index'])]
                        ]],
                    ['label' => 'Orders', 'items' => [
                            [ 'label' => 'New Orders', 'url' => Url::toRoute(['tblorders/index'])],
                            [ 'label' => 'New Order Payments', 'url' => Url::toRoute(['tblneworderpayment/index'])],
                            [ 'label' => 'Order Assignment', 'url' => Url::toRoute(['tblorderassignment/index'])],
                            [ 'label' => 'Editors Payments', 'url' => Url::toRoute(['tbleditorspayment/index'])],
                        ]],
                    Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
