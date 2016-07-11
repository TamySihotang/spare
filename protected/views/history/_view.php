<?php
/* @var $this HistoryController */
/* @var $data History */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_history')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_history), array('view', 'id'=>$data->id_history)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_request')); ?>:</b>
	<?php echo CHtml::encode($data->id_request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date_his')); ?>:</b>
	<?php echo CHtml::encode($data->start_date_his); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date_his')); ?>:</b>
	<?php echo CHtml::encode($data->end_date_his); ?>
	<br />


</div>