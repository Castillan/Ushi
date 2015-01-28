<?php
/* @var $this CondicionController */
/* @var $model Condicion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCondicion'); ?>
		<?php echo $form->textField($model,'idCondicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->textField($model,'Ficha_Medica_idFicha_Medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Detalle'); ?>
		<?php echo $form->textField($model,'Detalle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoCondicion_idTipoCondicion'); ?>
		<?php echo $form->textField($model,'TipoCondicion_idTipoCondicion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->