<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFicha_Vacuna'); ?>
		<?php echo $form->textField($model,'idFicha_Vacuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->textField($model,'Ficha_Medica_idFicha_Medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Vacuna_idVacuna'); ?>
		<?php echo $form->textField($model,'Vacuna_idVacuna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->