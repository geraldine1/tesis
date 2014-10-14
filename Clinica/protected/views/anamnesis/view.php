<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis,
);

 $idficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
 
$this->menu=array(
	//array('label'=>'List Anamnesis', 'url'=>array('index')),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>$model->id_anamnesis)),
        array('label' => 'Volver a ficha', 'url' => array('FichaDental/view&id=' . $idficha->id_ficha)),
);
?>

<h1>View Anamnesis #<?php echo $model->id_anamnesis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_anamnesis',
		'id_ficha',
		'alergias',
		'enfermedades',
		'enfermedades_familia',
		'medicamentos',
		'otros',
	),
)); ?>
