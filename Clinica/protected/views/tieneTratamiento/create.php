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

$id = Pieza::model()->findByAttributes(array('id_pieza' => $model->id_pieza));

?>

<h1>Añadir tratamiento a la pieza <?php  echo $id->nombre_pieza?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>