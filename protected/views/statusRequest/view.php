<?php
/* @var $this StatusRequestController */
/* @var $model StatusRequest */

$this->breadcrumbs=array(
	'Status Requests'=>array('index'),
	$model->id_stat_req,
);

$this->menu=array(
	array('label'=>'List StatusRequest', 'url'=>array('index')),
	array('label'=>'Create StatusRequest', 'url'=>array('create')),
	array('label'=>'Update StatusRequest', 'url'=>array('update', 'id'=>$model->id_stat_req)),
	array('label'=>'Delete StatusRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_stat_req),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StatusRequest', 'url'=>array('admin')),
);
?>

<h1>View StatusRequest #<?php echo $model->id_stat_req; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_stat_req',
		'id_request',
		'status_request',
	),
)); ?>
