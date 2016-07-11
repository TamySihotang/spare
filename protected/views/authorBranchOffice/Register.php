<?php
//$this->pageTitle = Yii::app()->name_office . ' - Register';
$this->breadcrumbs = array(
    'Register',
);
?>
<h1>Register</h1>
<p>Please fill out the following form to register:</p>
<!-- form -->
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'registration-form',
        'enableAjaxValidation' => false,
    ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are 
        required.</p>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'author_name'); ?>
        <?php echo $form->textField($model, 'author_name'); ?>
        <?php echo $form->error($model, 'author_name'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'id_office'); ?>
        <?php
        $list = Chtml::listData(Office::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');
        echo Chtml::activeDropDownList($model, 'id_office', $list, array('empty' => '--Choose Branch Office--'));
        ?>
        <?php echo $form->error($model, 'id_office'); ?>

    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?> 
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'repassword'); ?>
        <?php echo $form->passwordField($model, 'repassword'); ?>
        <?php echo $form->error($model, 'repassword'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->