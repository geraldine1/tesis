<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_realizado'); ?>
		<?php echo $form->textField($model,'id_realizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tiene_tratamiento'); ?>
		<?php echo $form->textField($model,'id_tiene_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cara'); ?>
		<?php echo $form->textField($model,'id_cara'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->