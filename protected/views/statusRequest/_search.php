<?php
/* @var $this StatusRequestController */
/* @var $model StatusRequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_stat_req'); ?>
		<?php echo $form->textField($model,'id_stat_req'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_request'); ?>
		<?php echo $form->textField($model,'id_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_request'); ?>
		<?php echo $form->textField($model,'status_request'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->