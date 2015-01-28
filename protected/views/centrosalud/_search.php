<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCentroSalud'); ?>
		<?php echo $form->textField($model,'idCentroSalud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoCentro_idTipoCentro'); ?>
		<?php echo $form->textField($model,'TipoCentro_idTipoCentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoAtencion_idTipoAtencion'); ?>
		<?php echo $form->textField($model,'TipoAtencion_idTipoAtencion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->