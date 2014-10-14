<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	$model->id_realizado,
);

$this->menu=array(
	array('label'=>'List TratamientoRealizado', 'url'=>array('index')),
	array('label'=>'Create TratamientoRealizado', 'url'=>array('create')),
	array('label'=>'Update TratamientoRealizado', 'url'=>array('update', 'id'=>$model->id_realizado)),
	array('label'=>'Delete TratamientoRealizado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_realizado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TratamientoRealizado', 'url'=>array('admin')),
);
?>

<h1>View TratamientoRealizado #<?php echo $model->id_realizado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_realizado',
		'id_ficha',
		'id_tratamiento',
		'comentario',
		'valor',
                'fecha',
	),
)); ?>
