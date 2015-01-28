<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Accidente_idAccidente'); ?>
		<?php echo $form->textField($model,'Accidente_idAccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTrabajadorAccidente'); ?>
		<?php echo $form->textField($model,'idTrabajadorAccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Horas'); ?>
		<?php echo $form->textField($model,'Horas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Minutos'); ?>
		<?php echo $form->textField($model,'Minutos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroSalud_idCentroSalud'); ?>
		<?php echo $form->textField($model,'CentroSalud_idCentroSalud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajador_idTrabajador'); ?>
		<?php echo $form->textField($model,'Trabajador_idTrabajador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->