<?php
/* @var $this AuthorBranchOfficeController */
/* @var $model AuthorBranchOffice */

$this->breadcrumbs=array(
	'Author Branch Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AuthorBranchOffice', 'url'=>array('index')),
	array('label'=>'Manage AuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Create AuthorBranchOffice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>