<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Link Ảnh';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-anh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm Link Ảnh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_PhanLoai',
            [

                'attribute' => 'id_PhanLoai',
                'format' => 'raw',
                'value' => function ($model) {
                if($model->phanloai()->one()){
                   return $model->phanloai()->one()->TenPhanLoai;

                   }else{
                       return "Chưa cập nhật";
                   }
                },

            ],
            'URL:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
