<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'produsen_obat')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'stok')->textInput() ?> -->

    <?= $form->field($model, 'harga_jual')->textInput() ?>

    <?= $form->field($model, 'harga_beli')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
