<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_obat') ?>

    <?= $form->field($model, 'nama_obat') ?>

    <?= $form->field($model, 'produsen_obat') ?>

    <?= $form->field($model, 'stok') ?>

    <?= $form->field($model, 'harga_jual') ?>

    <?php // echo $form->field($model, 'harga_beli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
