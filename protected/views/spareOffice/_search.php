<?php
/* @var $this SpareOfficeController */
/* @var $model SpareOffice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_spare_off'); ?>
		<?php echo $form->textField($model,'id_spare_off'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sparelist'); ?>
		<?php echo $form->textField($model,'id_sparelist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->