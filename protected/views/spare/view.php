<?php
/* @var $this SpareController */
/* @var $model Spare */

$this->breadcrumbs=array(
	'Spares'=>array('index'),
	$model->id_spare,
);

$this->menu=array(
	array('label'=>'List Spare', 'url'=>array('index')),
	array('label'=>'Create Spare', 'url'=>array('create')),
	array('label'=>'Update Spare', 'url'=>array('update', 'id'=>$model->id_spare)),
	array('label'=>'Delete Spare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_spare),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spare', 'url'=>array('admin')),
);
?>

<h1>View Spare #<?php echo $model->id_spare; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_spare',
		'category',
		'series',
		'type',
		'model',
		'aliasname',
		'partno',
		'description',
		'suband',
		'hilo',
	),
)); ?>
