<?php
/* @var $this AuthorBranchOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Author Branch Offices',
);

$this->menu=array(
	array('label'=>'Create AuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'Manage AuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Author Branch Offices</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
