<?php
/* @var $this SpareOfficeController */
/* @var $model SpareOffice */

$this->breadcrumbs=array(
	'Spare Offices'=>array('index'),
	$model->id_spare_off=>array('view','id'=>$model->id_spare_off),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpareOffice', 'url'=>array('index')),
	array('label'=>'Create SpareOffice', 'url'=>array('create')),
	array('label'=>'View SpareOffice', 'url'=>array('view', 'id'=>$model->id_spare_off)),
	array('label'=>'Manage SpareOffice', 'url'=>array('admin')),
);
?>

<h1>Update SpareOffice <?php echo $model->id_spare_off; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>