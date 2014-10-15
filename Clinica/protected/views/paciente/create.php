<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Administrar Paciente', 'url'=>array('admin')),
);
?>

<h1>Create Paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>