<?php
/* @var $this SpareController */
/* @var $model Spare */

$this->breadcrumbs=array(
	'Spares'=>array('index'),
	$model->id_spare=>array('view','id'=>$model->id_spare),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spare', 'url'=>array('index')),
	array('label'=>'Create Spare', 'url'=>array('create')),
	array('label'=>'View Spare', 'url'=>array('view', 'id'=>$model->id_spare)),
	array('label'=>'Manage Spare', 'url'=>array('admin')),
);
?>

<h1>Update Spare <?php echo $model->id_spare; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>