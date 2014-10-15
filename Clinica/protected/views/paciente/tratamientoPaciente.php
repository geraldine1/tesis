
<h3><?php echo 'Tratamientos de '; echo obtieneNombre($model) ?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'label' => 'Run del paciente:',
            //'value' => obtieneNombre($model),
            'value' => $model->rut_paciente,
        ),
    ),
));
?>
<?php
$id = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
$tratamiento = Tratamiento::model()->findByAttributes(array('id_tratamiento' => $modelTratamiento->id_tratamiento));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'TratamientosRealizados',
    'dataProvider' => $modelTratamiento->searchByPaciente($id->id_ficha),
    'filter' => $modelTratamiento,
    'columns' => array(
        //'id_realizado',
        //'id_ficha',
        'id_tratamiento',
        array(
                        'name'=>'Nombre_Tratamiento',
                        'value'=>'$data->idTratamiento->nombre', 
                        'type'=>'text',
                ),
        'comentario',
        'valor',
        'fecha',
        'fecha_inicio',
        'fecha_termino',
        'estado',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}', // botones a mostrar
            'updateButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/update&id=$data->id_realizado" )', // url de la acción 'update'
            'deleteButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/delete&id=$data->id_realizado" )', // url de la acción 'delete'
            'viewButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/view&id=$data->id_realizado" )', // url de la acción 'delete'
            'deleteConfirmation' => 'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete' => '$.fn.yiiGridView.update("TratamientosRealizados");', // actualiza el grid después de borrar
        ),
    ),
));

//Funciones

function obtieneNombre($model) {
    return $model->nombre_paciente . " " . $model->apellidos_paciente;
}
?>