<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Stock', 'url'=>array('index')),
	array('label'=>'Create Stock', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stock-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stocks</h1>

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
	'id'=>'stock-grid',
        'type'=>'striped bordered condensed',
	'dataProvider'=>$model4->search(),
	'filter'=>$model4,
	'columns'=>array(
		//'id_stock',
                'idSpare.partno',
                'idOffice.branch_office',
		array(
//                    'header'=>'idSpare.partno',
                    'name'=>'idSpare.partno',
                    'value'=>  function ($data, $row){
    global $lastDepartment; //import the global variable

               if ($lastDepartment != $data->id_office) 
               {
                 $lastDepartment = $data->id_office;
                 return $data->id_office;
               } 
               else
                  return '';   
                    }
                ),
//		'partno',
//            array(
//                'name'=>'id_spare',
//                'value'=>$model3->branch_office,
//            ),
//		'used',
//		'remain',
//		'on_the_way',
//		'stock_total',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'htmlOptions'=>array('style'=>'width: 50px'),
                ),
	),
)); ?>
<?php
$input = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'); 
$cols = 5; 
     
    echo "<table border=\"5\" cellpadding=\"10\">"; 

    for ($i=0; $i < count($input); $i++) 
    { 
    echo "<tr>"; 
        for ($c=0; $c<$cols; $c++) 
        { 
        echo "<td>";
        echo $input[$i+$c];
        echo "</td>";
        } 
    echo "</tr>"; 
    $i += $c; 
    } 
         
    echo "</table>";  
?>
