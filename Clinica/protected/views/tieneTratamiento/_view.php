<?php
/* @var $this TieneTratamientoController */
/* @var $data TieneTratamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tiene_tratamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tiene_tratamiento), array('view', 'id'=>$data->id_tiene_tratamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_realizado')); ?>:</b>
	<?php echo CHtml::encode($data->id_realizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cara')); ?>:</b>
	<?php echo CHtml::encode($data->id_cara); ?>
	<br />


</div>