<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tiene-tratamiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_realizado'); ?>
		<?php echo $form->hiddenField($model,'id_realizado'); ?>
		<?php //echo $form->error($model,'id_realizado'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_pieza'); ?>
		<?php echo $form->hiddenField($model,'id_pieza'); ?>
		<?php //echo $form->error($model,'id_pieza'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textArea($model,'comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->