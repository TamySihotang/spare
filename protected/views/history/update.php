<?php
/* @var $this HistoryController */
/* @var $model History */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->id_history=>array('view','id'=>$model->id_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List History', 'url'=>array('index')),
	array('label'=>'Create History', 'url'=>array('create')),
	array('label'=>'View History', 'url'=>array('view', 'id'=>$model->id_history)),
	array('label'=>'Manage History', 'url'=>array('admin')),
);
?>

<h1>Update History <?php echo $model->id_history; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>