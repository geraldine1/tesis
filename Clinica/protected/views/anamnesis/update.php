<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis=>array('view','id'=>$model->id_anamnesis),
	'Update',
);

?>

<h1>Update Anamnesis <?php echo $model->id_anamnesis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>