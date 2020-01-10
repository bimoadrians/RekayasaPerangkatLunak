<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_obat',
            'nama_obat',
            'produsen_obat',
            'stok',
            'harga_jual',
            //'harga_beli',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
