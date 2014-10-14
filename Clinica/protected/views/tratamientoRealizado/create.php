<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TratamientoRealizado', 'url'=>array('index')),
	array('label'=>'Manage TratamientoRealizado', 'url'=>array('admin')),
);
?>

<h1>Create TratamientoRealizado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>