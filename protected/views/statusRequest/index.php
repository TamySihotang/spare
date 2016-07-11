<?php
/* @var $this StatusRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Requests',
);

$this->menu=array(
	array('label'=>'Create StatusRequest', 'url'=>array('create')),
	array('label'=>'Manage StatusRequest', 'url'=>array('admin')),
);
?>

<h1>Status Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
