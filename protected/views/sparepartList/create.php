<?php
/* @var $this SparepartListController */
/* @var $model SparepartList */

$this->breadcrumbs=array(
	'Sparepart Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SparepartList', 'url'=>array('index')),
	array('label'=>'Manage SparepartList', 'url'=>array('admin')),
);
?>

<h1>Create SparepartList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>