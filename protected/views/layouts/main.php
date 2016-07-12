<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="shortcut icon" href="<?php //echo Yii::app()->request->baseUrl; ?>/images/logo.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php// echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>
    </head>

    <body>

        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'type' => 'inverse', // null or 'inverse'
            'brand' => '<font size="6" color="#0066ff">NEC</font><font size="6" color="#c0c0c0">sparelog</font>',
            'brandUrl' => 'index.php',
            'collapse' => true, // requires bootstrap-responsive.css
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Request', 'url' => array('request/create'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Spareparts', 'url' => '#', 'items' => array(
                                array('label' => 'Status', 'url' => array('sparepartList/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'List', 'url' => array('spare/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Stock', 'url' => '#', 'items' => array(
                                    array('label' => 'National', 'url' => array('office/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Manage', 'url' => array('stock/admin'), 'visible' => !Yii::app()->user->isGuest),
                                ), 'visible' => !Yii::app()->user->isGuest),
                        ), 'visible' => !Yii::app()->user->isGuest),
                        
                        array('label' => 'Detail', 'url' => '#', 'items' => array(
                                array('label' => 'Spare Office', 'url' => array('spareOffice/index'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Author Branch Office', 'url' => array('authorBranchOffice/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Office', 'url' => array('office/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'User', 'url' => array('user/admin'), 'visible' => Yii::app()->user->isGuest),
                            ), 'visible' => !Yii::app()->user->isGuest),
                        
                        array('label' => 'Reference', 'url' => array('/site/index'),'visible' => !Yii::app()->user->isGuest),
                    ),
                ),
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'items' => array(
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
        ));
        ?>

        <?php //$this->renderPartial('//site/dialog'); ?>
        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>
            
            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> <br/>by PT. NEC Indonesia

            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
