<?php
/* @var $this SparepartListController */
/* @var $model SparepartList */

$this->breadcrumbs=array(
	'Sparepart Lists'=>array('index'),
	$model->id_sparelist=>array('view','id'=>$model->id_sparelist),
	'Update',
);

$this->menu=array(
	array('label'=>'List SparepartList', 'url'=>array('index')),
	array('label'=>'Create SparepartList', 'url'=>array('create')),
	array('label'=>'View SparepartList', 'url'=>array('view', 'id'=>$model->id_sparelist)),
	array('label'=>'Manage SparepartList', 'url'=>array('admin')),
);
?>

<h1>Update SparepartList <?php echo $model->id_sparelist; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>