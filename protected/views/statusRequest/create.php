<?php
/* @var $this StatusRequestController */
/* @var $model StatusRequest */

$this->breadcrumbs=array(
	'Status Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StatusRequest', 'url'=>array('index')),
	array('label'=>'Manage StatusRequest', 'url'=>array('admin')),
);
?>

<h1>Create StatusRequest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>