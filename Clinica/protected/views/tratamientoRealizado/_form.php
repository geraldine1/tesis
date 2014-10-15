<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tratamiento-realizado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->hiddenField($model,'id_ficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tratamiento'); ?>
		<?php echo $form->dropDownList($model,'id_tratamiento',$model->getMenuTratamientos()); ?>
		<?php echo $form->error($model,'id_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textArea($model,'comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'fecha_termino'); ?>
		<?php echo $form->textField($model,'fecha_termino'); ?>
		<?php echo $form->error($model,'fecha_termino'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
        
        <div class="row">
		<?php
                    echo $form->hiddenField($model,'fecha'); 
                ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Añadir' : 'Madificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->