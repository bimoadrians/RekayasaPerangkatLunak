<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Kasir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kasir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_member')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <?= $form->field($model, 'kode_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_beli')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Done', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>