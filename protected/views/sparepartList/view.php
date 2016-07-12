<?php
/* @var $this SparepartListController */
/* @var $model SparepartList */

$this->breadcrumbs=array(
	'Sparepart Lists'=>array('index'),
	$model->id_sparelist,
);

$this->menu=array(
	array('label'=>'List SparepartList', 'url'=>array('index')),
	array('label'=>'Create SparepartList', 'url'=>array('create')),
	array('label'=>'Update SparepartList', 'url'=>array('update', 'id'=>$model->id_sparelist)),
	array('label'=>'Delete SparepartList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sparelist),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SparepartList', 'url'=>array('admin')),
);
?>

<h1>View SparepartList #<?php echo $model->id_sparelist; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sparelist',
		'id_status',
		'id_spare',
		'SN',
	),
)); ?>
