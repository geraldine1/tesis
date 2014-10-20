
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
    <?php echo Yii::app()->bootstrap->init();?>
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
            <div class="navbar-inner">
                <div class="nav-collapse collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Usuarios', 'url'=>array('/Usuario/index'),'visible'=>Yii::app()->user->name=='Dentista'),
                                array('label'=>'Pacientes', 'url'=>array('/Paciente/index'),'visible'=>Yii::app()->user->name=='Dentista'||'Asistente'),
                                array('label'=>'Tratamiento', 'url'=>array('/Tratamiento/index'),'visible'=>Yii::app()->user->name=='Dentista'||'Asistente'),
                                array('label'=>'Fichas', 'url'=>array('/FichaDental/index'),'visible'=>Yii::app()->user->name=='Dentista'||'Asistente'),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                    'htmlOptions'=>array('class'=>'nav')
		)); ?>
                </div>
            </div>
            </div>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
