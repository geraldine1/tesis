<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->rut_paciente=>array('view','id'=>$model->rut_paciente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'View Paciente', 'url'=>array('view', 'id'=>$model->rut_paciente)),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>Update Paciente <?php echo $model->rut_paciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>