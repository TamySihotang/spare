<?php
/* @var $this SpareOfficeController */
/* @var $model SpareOffice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'spare-office-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<center>
    <table border="0" width="100%">
        </br>
        <tr>
            <td width="20%"><?php echo $form->labelEx($model, 'id_sparelist'); ?></td>
            <td width="25%"><?php
                $list = Chtml::listData(SparepartList::model()->findAll(array('order' => 'id_sparelist')), 'id_sparelist', 'SN');
                echo Chtml::activeDropDownList($model, 'id_sparelist', $list, array('empty' => '--Choose SN--'));
                ?>
                <?php echo $form->error($model, 'id_sparelist'); ?>
            </td>
            <td witdh="55%" rowspan="3"></td>
        </tr>

        <tr>
            <td><?php echo $form->labelEx($model, 'id_office'); ?>
            </td>
            <td><?php
                $list = Chtml::listData(Office::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');
                echo Chtml::activeDropDownList($model, 'id_office', $list, array('empty' => '--Choose Branch Office--'));
                ?>
                <?php echo $form->error($model, 'id_office'); ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->