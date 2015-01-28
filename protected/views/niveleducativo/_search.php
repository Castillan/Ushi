<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Educacion_idEducacion'); ?>
		<?php echo $form->textField($model,'Educacion_idEducacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Grado_idGrado'); ?>
		<?php echo $form->textField($model,'Grado_idGrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idNivelEducativo'); ?>
		<?php echo $form->textField($model,'idNivelEducativo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->