<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gudang */

$this->title = 'Gudang';
$this->params['breadcrumbs'][] = ['label' => 'Gudang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_obat, 'url' => ['view', 'id' => $model->kode_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gudang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>