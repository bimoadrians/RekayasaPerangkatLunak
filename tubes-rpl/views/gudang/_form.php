<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gudang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gudang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>