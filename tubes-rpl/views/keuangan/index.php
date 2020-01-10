<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Keuangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuangan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tanggal',
            'omzet',
            'harga_pokok',
            'laba',
        ],
    ]); ?>


</div>