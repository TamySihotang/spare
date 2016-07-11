<?php
/* @var $this StatusRequestController */
/* @var $data StatusRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stat_req')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_stat_req), array('view', 'id'=>$data->id_stat_req)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_request')); ?>:</b>
	<?php echo CHtml::encode($data->id_request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_request')); ?>:</b>
	<?php echo CHtml::encode($data->status_request); ?>
	<br />


</div>