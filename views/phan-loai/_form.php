<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Phanloai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phanloai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenPhanLoai')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm' : 'Sửa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
