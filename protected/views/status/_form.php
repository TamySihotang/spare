<?php
/* @var $this StatusController */
/* @var $model Status */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<center>
    <table border="0" width="100%">
        </br>
             
        <tr>
            <td><?php echo $form->labelEx($model, 'status'); ?></td>
            <td><?php echo $form->textField($model, 'status'); ?>
                <?php echo $form->error($model, 'status'); ?>
        </tr>

        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->