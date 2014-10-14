<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	$model->id_realizado=>array('view','id'=>$model->id_realizado),
	'Update',
);

$this->menu=array(
	array('label'=>'List TratamientoRealizado', 'url'=>array('index')),
	array('label'=>'Create TratamientoRealizado', 'url'=>array('create')),
	array('label'=>'View TratamientoRealizado', 'url'=>array('view', 'id'=>$model->id_realizado)),
	array('label'=>'Manage TratamientoRealizado', 'url'=>array('admin')),
);
?>

<h1>Update TratamientoRealizado <?php echo $model->id_realizado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>