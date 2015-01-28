<?php
/* @var $this GradoController */
/* @var $model Grado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idGrado'); ?>
		<?php echo $form->textField($model,'idGrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Grado'); ?>
		<?php echo $form->textField($model,'Grado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->