<?php
/* @var $this StatusRequestController */
/* @var $model StatusRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_request'); ?>
		<?php echo $form->textField($model,'id_request'); ?>
		<?php echo $form->error($model,'id_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_request'); ?>
		<?php echo $form->textField($model,'status_request'); ?>
		<?php echo $form->error($model,'status_request'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->