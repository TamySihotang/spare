<?php
/* @var $this SpareController */
/* @var $model Spare */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'spare-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series'); ?>
		<?php echo $form->textField($model,'series',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'series'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textArea($model,'type',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textArea($model,'model',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aliasname'); ?>
		<?php echo $form->textArea($model,'aliasname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'aliasname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partno'); ?>
		<?php echo $form->textArea($model,'partno',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'partno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suband'); ?>
		<?php echo $form->textField($model,'suband',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'suband'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hilo'); ?>
		<?php echo $form->textField($model,'hilo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hilo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->