<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTrabajador'); ?>
		<?php echo $form->textField($model,'idTrabajador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sexo'); ?>
		<?php echo $form->textField($model,'Sexo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mano'); ?>
		<?php echo $form->textField($model,'Mano',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edo_Civil_idEdo_Civil'); ?>
		<?php echo $form->textField($model,'Edo_Civil_idEdo_Civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hijos'); ?>
		<?php echo $form->textField($model,'Hijos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NivelEducativo_idNivelEducativo'); ?>
		<?php echo $form->textField($model,'NivelEducativo_idNivelEducativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoPostal'); ?>
		<?php echo $form->textField($model,'CodigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IngresoUNET'); ?>
		<?php echo $form->textField($model,'IngresoUNET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IngresoIVSS'); ?>
		<?php echo $form->textField($model,'IngresoIVSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->textField($model,'Ubicacion_idUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cargo_idCargo'); ?>
		<?php echo $form->textField($model,'Cargo_idCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dependencia_idDependencia'); ?>
		<?php echo $form->textField($model,'Dependencia_idDependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sueldo'); ?>
		<?php echo $form->textField($model,'Sueldo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->