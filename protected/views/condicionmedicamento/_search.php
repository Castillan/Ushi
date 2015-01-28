<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCondicionMedicamento'); ?>
		<?php echo $form->textField($model,'idCondicionMedicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dosis'); ?>
		<?php echo $form->textField($model,'Dosis',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EfectoSecundario'); ?>
		<?php echo $form->textField($model,'EfectoSecundario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Medicamento_idMedicamento'); ?>
		<?php echo $form->textField($model,'Medicamento_idMedicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->textField($model,'Ficha_Medica_idFicha_Medica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->