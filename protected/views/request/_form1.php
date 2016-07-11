<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">
    </br></br></br>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'request-form',
        'enableAjaxValidation' => false,
    ));
    ?>
    <?php
    Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
    Yii::app()->user->setFlash('info', '<strong>Remember!</strong> Before fill the form to create request sparepart, Please check the origin of spare <br>in menu <a href="index.php?r=office/index">Spareparts->Stock->National</a> <br> ');
    Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
    Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
    ?>
    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'block' => true, // display a larger alert block?
        'fade' => true, // use transitions?
        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
        'alerts' => array(// configurations per alert type
            'info' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
        ),
    ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <center>
       <div class="row">
 <?php echo $form->labelEx($model,'order_number'); ?>
 <?php echo $form->hiddenField($model,'order_number'); ?>
 <?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
   'name'=>'order_number',
   'attribute' => 'order_number',
   'value'=>$model->order_number ? $model->order_number->order_number:'',
   'source'=>'js: function(request, response) {
     $.ajax({
       url: "'.$this->createUrl('kegiatan/carianggota').'",
       dataType: "json",
       data: {
         term: request.term,
         brand: $("#Kegiatan_anggota4_id").val()
       },
       success: function (data) {
         response(data);
       }
     })
   }',
   //'sourceUrl' => array('carianggota'),
   //'source'=>$this->createUrl('kegiatan/carianggota'),
   'options'=>array(
     'minLength'=>'1',
     'focus'=> 'js:function( event, ui ) {
       $("#'.CHtml::activeId($model,'anggota4_id').'").val(ui.item.label);
       return false;
     }',
     'search'=>"js: function(event, ui) {
       $('#Proposal_anggota4_id').val('');
     }",
     'select'=>'js:function( event, ui ) {
       $("#'.CHtml::activeId($model,'order_number').'").val(ui.item.id);
     }', 
   ),
 ));
 ?> 
 <?php echo $form->error($model,'anggota4_id'); ?>
</div>
    </center>


    <?php $this->endWidget(); ?>

</div><!-- form -->