<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'waktu_transaksi')->textInput() ?>

    <?= $form->field($model, 'id_member')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <?= $form->field($model, 'kode_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_beli')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
