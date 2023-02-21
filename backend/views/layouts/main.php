<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="">
    <?= $this->render('_header') ?>
</header>

<main role="main" class="d-flex" style="padding-top: 32px;">
    <div><?= $this->render("_sidebar")?></div>
    <div class="content-wrapper p-3">

<!--        --><?php //= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!--<footer class="footer mt-auto py-3 text-muted">-->
<!--    <div class="container">-->
<!--        <p class="float-start">&copy; --><?php //= Html::encode(Yii::$app->name) ?><!-- --><?php //= date('Y') ?><!--</p>-->
<!--        <p class="float-end">--><?php //= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
