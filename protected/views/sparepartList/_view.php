<?php
/* @var $this SparepartListController */
/* @var $data SparepartList */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sparelist')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sparelist), array('view', 'id'=>$data->id_sparelist)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::encode($data->id_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::encode($data->id_spare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SN')); ?>:</b>
	<?php echo CHtml::encode($data->SN); ?>
	<br />


</div>