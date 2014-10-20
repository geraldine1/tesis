<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion=>array('view','id'=>$model->id_atencion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'View Atencion', 'url'=>array('view', 'id'=>$model->id_atencion)),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>Update Atencion <?php echo $model->id_atencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>