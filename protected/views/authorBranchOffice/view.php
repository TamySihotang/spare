<?php
/* @var $this AuthorBranchOfficeController */
/* @var $model AuthorBranchOffice */

$this->breadcrumbs=array(
	'Author Branch Offices'=>array('index'),
	$model->id_author,
);

$this->menu=array(
	array('label'=>'List AuthorBranchOffice', 'url'=>array('index')),
	array('label'=>'Create AuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'Update AuthorBranchOffice', 'url'=>array('update', 'id'=>$model->id_author)),
	array('label'=>'Delete AuthorBranchOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_author),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>View AuthorBranchOffice #<?php echo $model->id_author; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_author',
		'id_user',
		'id_office',
		'author_name',
	),
)); ?>
