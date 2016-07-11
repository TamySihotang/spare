<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'stock-form',
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
            <td witdh="55%" rowspan="6"></td>
        </tr>

        <tr>
            <td><?php echo $form->labelEx($model, 'used'); ?></td>
            <td><?php echo $form->textField($model, 'used'); ?>
                <?php echo $form->error($model, 'used'); ?>
        </tr>
        
        <tr>
            <td><?php echo $form->labelEx($model, 'remain'); ?></td>
            <td><?php echo $form->textField($model, 'remain'); ?>
                <?php echo $form->error($model, 'remain'); ?>
        </tr>

        <tr>
            <td><?php echo $form->labelEx($model, 'on_the_way'); ?></td>
            <td><?php echo $form->textField($model, 'on_the_way'); ?>
                <?php echo $form->error($model, 'on_the_way'); ?>
        </tr>

        <tr>
            <td><?php echo $form->labelEx($model, 'stock_total'); ?></td>
            <td><?php echo $form->textField($model, 'stock_total'); ?>
                <?php echo $form->error($model, 'stock_total'); ?>
        </tr>

        <tr>
            <td></td>
            <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'create', 'type'=>'primary')); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->