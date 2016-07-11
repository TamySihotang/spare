<?php
/* @var $this HistoryController */
/* @var $model History */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->id_history,
);

$this->menu=array(
	array('label'=>'List History', 'url'=>array('index')),
	array('label'=>'Create History', 'url'=>array('create')),
	array('label'=>'Update History', 'url'=>array('update', 'id'=>$model->id_history)),
	array('label'=>'Delete History', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage History', 'url'=>array('admin')),
);
?>

<h1>View History #<?php echo $model->id_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_history',
		'id_user',
		'id_request',
		'description',
		'start_date_his',
		'end_date_his',
	),
)); ?>
