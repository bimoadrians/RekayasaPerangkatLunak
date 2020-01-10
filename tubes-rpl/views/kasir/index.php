<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KasirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Kasirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kasir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_transaksi',
            'waktu_transaksi',
            'id_member',
            'id_petugas',
            'kode_obat',
            'jumlah_beli',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>