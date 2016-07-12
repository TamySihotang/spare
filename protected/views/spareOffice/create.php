<?php
/* @var $this SpareOfficeController */
/* @var $model SpareOffice */

$this->breadcrumbs=array(
	'Spare Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpareOffice', 'url'=>array('index')),
	array('label'=>'Manage SpareOffice', 'url'=>array('admin')),
);
?>

<h1>Create SpareOffice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>