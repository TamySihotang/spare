<?php
/* @var $this SpareController */
/* @var $data Spare */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_spare), array('view', 'id'=>$data->id_spare)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series')); ?>:</b>
	<?php echo CHtml::encode($data->series); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aliasname')); ?>:</b>
	<?php echo CHtml::encode($data->aliasname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partno')); ?>:</b>
	<?php echo CHtml::encode($data->partno); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suband')); ?>:</b>
	<?php echo CHtml::encode($data->suband); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hilo')); ?>:</b>
	<?php echo CHtml::encode($data->hilo); ?>
	<br />

	*/ ?>

</div>