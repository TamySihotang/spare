<?php
/* @var $this OfficeController */
/* @var $model Office */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->id_office=>array('view','id'=>$model->id_office),
	'Update',
);

$this->menu=array(
	array('label'=>'List Office', 'url'=>array('index')),
	array('label'=>'Create Office', 'url'=>array('create')),
	array('label'=>'View Office', 'url'=>array('view', 'id'=>$model->id_office)),
	array('label'=>'Manage Office', 'url'=>array('admin')),
);
?>

<h1>Update Office <?php echo $model->id_office; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>