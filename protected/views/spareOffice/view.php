<?php
/* @var $this SpareOfficeController */
/* @var $model SpareOffice */

$this->breadcrumbs=array(
	'Spare Offices'=>array('index'),
	$model->id_spare_off,
);

$this->menu=array(
	array('label'=>'List SpareOffice', 'url'=>array('index')),
	array('label'=>'Create SpareOffice', 'url'=>array('create')),
	array('label'=>'Update SpareOffice', 'url'=>array('update', 'id'=>$model->id_spare_off)),
	array('label'=>'Delete SpareOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_spare_off),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpareOffice', 'url'=>array('admin')),
);
?>

<h1>View SpareOffice #<?php echo $model->id_spare_off; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_spare_off',
		'id_sparelist',
		'id_office',
	),
)); ?>
