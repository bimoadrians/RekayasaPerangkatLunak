<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gudang */
/* @var $form ActiveForm */
$this->title = 'Update Gudang: ' . $model->kode_obat;
$this->params['breadcrumbs'][] = ['label' => 'Gudang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_obat, 'url' => ['view', 'id' => $model->kode_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="gudang-update">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field('update', 'id' => $model->kode_obat) ?>
        <?= $form->field($model, 'stok') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

</div><!-- stok -->
