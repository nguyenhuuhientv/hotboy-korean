<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phanloai */

$this->title = 'Create Phanloai';
$this->params['breadcrumbs'][] = ['label' => 'Phanloais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phanloai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
