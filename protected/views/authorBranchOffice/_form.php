<?php
/* @var $this AuthorBranchOfficeController */
/* @var $model AuthorBranchOffice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'author-branch-office-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<center>
    <table border="0" width="100%">
        </br>
        <tr>
            <td width="20%"><?php echo $form->labelEx($model, 'id_user'); ?></td>
            <td width="25%"><?php
                $list = Chtml::listData(User::model()->findAll(array('order' => 'id_user')), 'id_user', 'username');
                echo Chtml::activeDropDownList($model, 'id_user', $list, array('empty' => '--Choose User--'));
                ?>
                <?php echo $form->error($model, 'id_user'); ?>
            </td>
            <td witdh="55%" rowspan="4"></td>
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
            <td><?php echo $form->labelEx($model, 'author_name'); ?></td>
            <td><?php echo $form->textField($model, 'author_name'); ?>
                <?php echo $form->error($model, 'author_name'); ?>
        </tr>

        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->