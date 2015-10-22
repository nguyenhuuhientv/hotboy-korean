<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UrlAnh */

$this->title = 'Create Url Anh';
$this->params['breadcrumbs'][] = ['label' => 'Url Anhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-anh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
