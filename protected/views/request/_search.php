<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_request'); ?>
		<?php echo $form->textField($model,'id_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sparelist'); ?>
		<?php echo $form->textField($model,'id_sparelist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_origin'); ?>
		<?php echo $form->textField($model,'id_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_destiny'); ?>
		<?php echo $form->textField($model,'id_destiny'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_author'); ?>
		<?php echo $form->textField($model,'id_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->