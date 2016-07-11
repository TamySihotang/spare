<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_stock'); ?>
		<?php echo $form->textField($model,'id_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_spare'); ?>
		<?php echo $form->textField($model,'id_spare'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'used'); ?>
		<?php echo $form->textField($model,'used'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remain'); ?>
		<?php echo $form->textField($model,'remain'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'on_the_way'); ?>
		<?php echo $form->textField($model,'on_the_way'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_total'); ?>
		<?php echo $form->textField($model,'stock_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->