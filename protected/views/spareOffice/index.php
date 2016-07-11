<?php
/* @var $this SpareOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spare Offices',
);

$this->menu=array(
	array('label'=>'Create SpareOffice', 'url'=>array('create')),
	array('label'=>'Manage SpareOffice', 'url'=>array('admin')),
);
?>

<h1>Details of the sparepart office's </h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
