<?php
/* @var $this StatusRequestController */
/* @var $model StatusRequest */

$this->breadcrumbs=array(
	'Status Requests'=>array('index'),
	$model->id_stat_req=>array('view','id'=>$model->id_stat_req),
	'Update',
);

$this->menu=array(
	array('label'=>'List StatusRequest', 'url'=>array('index')),
	array('label'=>'Create StatusRequest', 'url'=>array('create')),
	array('label'=>'View StatusRequest', 'url'=>array('view', 'id'=>$model->id_stat_req)),
	array('label'=>'Manage StatusRequest', 'url'=>array('admin')),
);
?>

<h1>Update StatusRequest <?php echo $model->id_stat_req; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>