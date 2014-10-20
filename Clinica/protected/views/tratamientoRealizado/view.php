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
		'id_atencion',
		'id_tratamiento',
		'comentario',
	),
)); ?>

<?php
//$tieneTratamiento = TieneTratamiento::model()->findByAttributes(array('id_realizado' => $model->id_realizado));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'PiezasAfectadas',
    'dataProvider' => $modelTieneTratamiento->searchByTratamientoRealizado($model->id_realizado),
    'filter' => $modelTieneTratamiento,
    'columns' => array(
        /*'id_atencion',
        'fecha',
        'fecha_inicio',
        'fecha_termino',
        'estado',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}', // botones a mostrar
            //'viewButtonUrl' => 'Yii::app()->createUrl("atencion/tratamientos&id=$data->id_atencion" )',
        ),*/
    ),
));
?>
