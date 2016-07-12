<?php
/* @var $this SparepartListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sparepart Lists',
);

$this->menu=array(
	array('label'=>'Create SparepartList', 'url'=>array('create')),
	array('label'=>'Manage SparepartList', 'url'=>array('admin')),
);
?>

<h1>Sparepart Lists</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
