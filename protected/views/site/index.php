<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to NECSparepart',
)); ?>

<p>This is the site of deliver and list NEC SparePart</p>

<?php $this->endWidget(); ?>
<a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=spare/admin">spareable</a><br><br>