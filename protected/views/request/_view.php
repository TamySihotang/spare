<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_request), array('view', 'id'=>$data->id_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_number')); ?>:</b>
	<?php echo CHtml::encode($data->order_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sparelist')); ?>:</b>
	<?php echo CHtml::encode($data->id_sparelist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_origin')); ?>:</b>
	<?php echo CHtml::encode($data->id_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destiny')); ?>:</b>
	<?php echo CHtml::encode($data->id_destiny); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_author')); ?>:</b>
	<?php echo CHtml::encode($data->id_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	*/ ?>

</div>