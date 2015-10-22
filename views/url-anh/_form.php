<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Phanloai;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\UrlAnh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="url-anh-form">

    <?php $form = ActiveForm::begin(); ?>
	<?=
	$form->field($model, 'id_PhanLoai')
	     ->dropDownList(
	            ArrayHelper::map(Phanloai::find()->all(), 'id', 'TenPhanLoai')
	            )
	?>
    <?= $form->field($model, 'URL')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm' : 'Sửa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
