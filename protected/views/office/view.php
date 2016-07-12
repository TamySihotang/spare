<?php
/* @var $this OfficeController */
/* @var $model Office */

$this->breadcrumbs = array(
    'Offices' => array('index'),
    $model->id_office,
);

$this->menu = array(
    array('label' => 'List Office', 'url' => array('index')),
    array('label' => 'Create Office', 'url' => array('create')),
    array('label' => 'Update Office', 'url' => array('update', 'id' => $model->id_office)),
    array('label' => 'Delete Office', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_office), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Office', 'url' => array('admin')),
);
?>

<h1>View Office #<?php echo $model->id_office; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id_office',
        'branch_office',
    ),
));
?>

<table style="border-collapse: collapse;border:solid 2px chartreuse;"border="1">
    <tr style="border: 2px solid chartreuse;">
        <th class="tampilanView" width="30">Sparepart</th>
        <th class="tampilanView" width="30">Serial Number</th>
        <th class="tampilanView" width="30">Status</th>
    </tr>
    <tr>
        <td class="tampilanView" width="200" align="center">
            <?php
            
            $spareoffice = SpareOffice::model()->findAll($model->id_office);
            //$model = StatusPermohonancuti::model()->findAll($criteria);
            foreach ($spareoffice as $value) {
                $sparelist = SparepartList::model()->findByAttributes(array('id_sparelist' => $value->id_sparelist));
                $spare = Spare::model()->findByAttributes(array('id_spare' => $sparelist->id_spare));
                if($value->id_office == $model->id_office){
                    echo $spare->aliasname.'<br>';
                }
            }
            ?></td>
        <td class="tampilanView" width="200" align="center">
            <?php
            
            $spareoffice = SpareOffice::model()->findAll($model->id_office);
            //$model = StatusPermohonancuti::model()->findAll($criteria);
            foreach ($spareoffice as $value) {
                $sparelist = SparepartList::model()->findByAttributes(array('id_sparelist' => $value->id_sparelist));
                if($value->id_office == $model->id_office){
                    echo $sparelist->SN.'<br>';
                }
            }
            ?></td>
        <td class="tampilanView" width="200" align="center">
            <?php
            
            $spareoffice = SpareOffice::model()->findAll($model->id_office);
            //$model = StatusPermohonancuti::model()->findAll($criteria);
            foreach ($spareoffice as $value) {
                $sparelist = SparepartList::model()->findByAttributes(array('id_sparelist' => $value->id_sparelist));
                $status = Status::model()->findByAttributes(array('id_status' => $sparelist->id_status));
                if($value->id_office == $model->id_office){
                    echo $status->status.'<br>';
                }
            }
            ?></td>        
    </tr>
    
</table>
<div class="row buttons">
<?php echo "<br><a href='index.php?r=office/index'>".CHtml::button('Back')."</a>";?>
    
</div>
<hr>

