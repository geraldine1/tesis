<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs = array(
    'Pacientes' => array('index'),
    $model->rut_paciente,
);
$id = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
//echo CHtml::link('Ficha', Yii::app()->baseUrl . '/index.php?r=fichaDental/view&id=' . $id->id_ficha);
$this->menu = array(
    array('label' => 'List Paciente', 'url' => array('index')),
    array('label' => 'Create Paciente', 'url' => array('create')),
    array('label' => 'Update Paciente', 'url' => array('update', 'id' => $model->rut_paciente)),
    array('label' => 'Delete Paciente', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->rut_paciente), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Paciente', 'url' => array('admin')),
    array('label' => 'Ficha Dental', 'url' => array('fichaDental/view&id=' . $id->id_ficha)),
);
?>

<h1>View Paciente #<?php echo $model->rut_paciente; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'rut_paciente',
        'nombre_paciente',
        'apellidos_paciente',
        'direccion_paciente',
        'ciudad_paciente',
        'telefono_paciente',
        'correo_paciente',
        'sexo_paciente',
        'fecha_nac_paciente',
        'profesion_paciente',
        'lugar_trabajo',
    ),
));
?>
