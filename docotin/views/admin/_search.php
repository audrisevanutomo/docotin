<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<div class="data-search">

	<?php $form = ActiveForm([
		'action'=>['list'],
		'method'=>'get',
	]);?>

	<?= $form->field($model,'id_topup') ?>

	<div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>
  <?php ActiveForm::end(); ?>

</div>