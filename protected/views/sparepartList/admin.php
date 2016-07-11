<?php
/* @var $this SparepartListController */
/* @var $model SparepartList */

$this->breadcrumbs=array(
	'Sparepart Lists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SparepartList', 'url'=>array('index')),
	array('label'=>'Create SparepartList', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sparepart-list-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Status Sparepart List</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'sparepart-list-grid',
        'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_sparelist',
		'idStatus.status',
		'id_spare',
                'idSpare.aliasname',
		'SN',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'htmlOptions'=>array('style'=>'width: 50px'),
                ),
	),
)); ?>
