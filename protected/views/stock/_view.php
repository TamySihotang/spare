<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stock')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_stock), array('view', 'id'=>$data->id_stock)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::encode($data->id_spare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('used')); ?>:</b>
	<?php echo CHtml::encode($data->used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remain')); ?>:</b>
	<?php echo CHtml::encode($data->remain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('on_the_way')); ?>:</b>
	<?php echo CHtml::encode($data->on_the_way); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_total')); ?>:</b>
	<?php echo CHtml::encode($data->stock_total); ?>
	<br />


</div>