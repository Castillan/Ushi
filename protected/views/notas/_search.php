<?php
/* @var $this NotasController */
/* @var $model Notas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idNotas'); ?>
		<?php echo $form->textField($model,'idNotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota1'); ?>
		<?php echo $form->textField($model,'Nota1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota2'); ?>
		<?php echo $form->textField($model,'Nota2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota3'); ?>
		<?php echo $form->textField($model,'Nota3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->