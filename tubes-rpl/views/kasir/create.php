<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Kasir */
$this->title = 'Kasir';
// $this->params['breadcrumbs'][] = ['label' => 'Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasir-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>