<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<center>
    <table border="0" width="100%">
        </br>
        <tr>
            <td><?php echo $form->labelEx($model, 'username'); ?></td>
            <td><?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username'); ?>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model, 'password'); ?></td>
            <td><?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model, 'password'); ?>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model, 'email'); ?></td>
            <td><?php echo $form->textField($model, 'email'); ?>
                <?php echo $form->error($model, 'email  '); ?>
        </tr>
        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->