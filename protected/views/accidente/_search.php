<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAccidente'); ?>
		<?php echo $form->textField($model,'idAccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DiaSemana_idDiaSemana'); ?>
		<?php echo $form->textField($model,'DiaSemana_idDiaSemana'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dentro'); ?>
		<?php echo $form->textField($model,'Dentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->textField($model,'Ubicacion_idUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lugar'); ?>
		<?php echo $form->textField($model,'Lugar',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->