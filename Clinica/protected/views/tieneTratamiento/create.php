<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */

$this->breadcrumbs=array(
	'Tiene Tratamientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TieneTratamiento', 'url'=>array('index')),
	array('label'=>'Manage TieneTratamiento', 'url'=>array('admin')),
);
?>

<h1>Create TieneTratamiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>