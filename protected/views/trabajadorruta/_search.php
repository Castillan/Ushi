<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTrabajadorRuta'); ?>
		<?php echo $form->textField($model,'idTrabajadorRuta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Detalle'); ?>
		<?php echo $form->textArea($model,'Detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoRuta_idTipoRuta'); ?>
		<?php echo $form->textField($model,'TipoRuta_idTipoRuta'); ?>
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