<?php
/* @var $this OfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offices',
);

$this->menu=array(
	array('label'=>'Create Office', 'url'=>array('create')),
	array('label'=>'Manage Office', 'url'=>array('admin')),
);
?>

<h1>Stock of National</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
