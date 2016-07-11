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
        <table border="0" width="100%">
            </br>
            <tr>
                <td width="20%"><?php echo "Order Number"; ?></td>
                <td width="25%" height="50px"><?php
                    $this->widget('bootstrap.widgets.TbLabel', array(
                        'type' => 'default', // 'success', 'warning', 'important', 'info' or 'inverse'
                        'label' => 'generated',
                    ));
                    ?>
                    <?php //echo $form->error($model, 'order_number'); ?>
                <td witdh="55%" rowspan="7"></td>
            </tr>

            <tr>
                <td><?php echo $form->labelEx($model, 'id_origin'); ?>
                </td>
                <td><?php
                    $listOrigin = Chtml::listData(Office::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');
                    echo Chtml::activeDropDownList($model, 'id_origin', $listOrigin, 
                            array('empty' => '--Choose Origin--', 
                                'options'=>array($model->id_origin =>array('selected'=>true))));
                    ?>
                    <?php echo $form->error($model, 'id_origin'); 
//                          $origin1 = $_POST['id_origin'];  
//                          echo $origin1; ?>
                </td>
            </tr>

            <tr>
                <td><?php echo $form->labelEx($model, 'id_destiny'); ?>
                </td>
                <td><?php
                    $listDestiny = Chtml::listData(Office::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');
                    echo Chtml::activeDropDownList($model, 'id_destiny', $listDestiny, array('empty' => '--Choose Destiny--'));
                    ?>
                    <?php echo $form->error($model, 'id_destiny'); ?>
                </td>
            </tr>

            <tr>
                <td><?php echo "Type of Spare"; ?></td>
                <td><?php
                    $modelSpare = new Spare;

                      $listDSpare = CHtml::listData(Spare::model()->findAll(), 'id_spare', 'aliasname');
                      echo Chtml::activeDropDownList($modelSpare, 'id_spare', $listDSpare,
                      array('empty'=>'--Choose Spare--'));
                     
                    ?>


                <td witdh="55%" rowspan="7"></td>
            </tr>

            <tr>
                <td><?php echo $form->labelEx($model, 'id_sparelist'); ?></td>
                <td><?php
                    $listSpare = Chtml::listData(SparepartList::model()->findAll(), 'id_sparelist', 'SN');

                    echo Chtml::activeDropDownList($model, 'id_sparelist', $listSpare, array('empty' => '--Choose SN--'));
                    ?>
                    <?php echo $form->error($model, 'id_sparelist'); ?>
                </td>
            </tr>




            <tr>
                <td><?php echo $form->labelEx($model, 'start_date'); ?></td>
                <td><?php
                    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                    $this->widget('CJuiDateTimePicker', array(
                        'model' => $model, //Model object
                        'attribute' => 'start_date', //attribute name
                        'mode' => 'datetime', //use "time","date" or "datetime" (default) <---- use this option to show date, time or datetime
                        //'language' => 'en-US',
                        'language' => 'en-GB',
                        'options' => array(
                            'changeMonth' => 'true',
                            'changeYear' => 'true',
                            'dateFormat' => 'yy-mm-dd',
                            'timeFormat' => 'hh:mm:ss',
                            'minDate' => 'new Date()',
                            'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                        ), // jquery plugin options
                        'htmlOptions' => array(
                            'style' => 'height:20px;',
                            'class' => 'text small'
                        ),
                    ));
                    ?>

                    <?php echo $form->error($model, 'start_date'); ?>
                </td>
            </tr>

            <tr>
                <td><?php echo $form->labelEx($model, 'end_date'); ?></td>
                <td><?php
                    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                    $this->widget('CJuiDateTimePicker', array(
                        'model' => $model, //Model object
                        'attribute' => 'end_date', //attribute name
                        'mode' => 'datetime', //use "time","date" or "datetime" (default) <---- use this option to show date, time or datetime
                        //'language' => 'en-US',
                        'language' => 'en-GB',
                        'options' => array(
                            'changeMonth' => 'true',
                            'changeYear' => 'true',
                            'dateFormat' => 'yy-mm-dd',
                            'timeFormat' => 'hh:mm:ss',
                            'minDate' => 'new Date()',
                            'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                        ), // jquery plugin options
                        'htmlOptions' => array(
                            'style' => 'height:20px;',
                            'class' => 'text small'
                        ),
                    ));
                    ?>
                    <?php echo $form->error($model, 'end_date'); ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'create', 'type' => 'primary')); ?></td>
            </tr>
        </table>

    </center>


    <?php $this->endWidget(); ?>

</div><!-- form -->