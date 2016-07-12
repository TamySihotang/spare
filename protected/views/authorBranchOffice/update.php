<?php
/* @var $this AuthorBranchOfficeController */
/* @var $model AuthorBranchOffice */

$this->breadcrumbs=array(
	'Author Branch Offices'=>array('index'),
	$model->id_author=>array('view','id'=>$model->id_author),
	'Update',
);

$this->menu=array(
	array('label'=>'List AuthorBranchOffice', 'url'=>array('index')),
	array('label'=>'Create AuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'View AuthorBranchOffice', 'url'=>array('view', 'id'=>$model->id_author)),
	array('label'=>'Manage AuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Update AuthorBranchOffice <?php echo $model->id_author; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>