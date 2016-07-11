<?php
/* @var $this SparepartListController */
/* @var $model SparepartList */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'sparepart-list-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<center>
    <table border="0" width="100%">
        </br>
        <tr>
            <td width="20%"><?php echo $form->labelEx($model, 'id_spare'); ?></td>
            <td width="25%"><?php
                $list = Chtml::listData(Spare::model()->findAll(array('order' => 'id_spare')), 'id_spare', 'aliasname');
                echo Chtml::activeDropDownList($model, 'id_spare', $list, array('empty' => '--Choose Spare--'));
                ?>
                <?php echo $form->error($model, 'id_spare'); ?>
            </td>
            <td witdh="55%" rowspan="4"></td>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model, 'id_status'); ?></td>
            <td><?php
                $list = Chtml::listData(Status::model()->findAll(array('order' => 'id_status')), 'id_status', 'status');
                echo Chtml::activeDropDownList($model, 'id_status', $list, array('empty' => '--Choose Status--'));
                ?>
                <?php echo $form->error($model, 'id_status'); ?>
            </td>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model, 'SN'); ?></td>
            <td><?php echo $form->textField($model, 'SN'); ?>
                <?php echo $form->error($model, 'SN'); ?>
        </tr>

        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->