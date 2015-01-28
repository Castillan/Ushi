<?php
/* @var $this TestigoController */
/* @var $model Testigo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Accidente_idAccidente'); ?>
		<?php echo $form->textField($model,'Accidente_idAccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTestigo'); ?>
		<?php echo $form->textField($model,'idTestigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->