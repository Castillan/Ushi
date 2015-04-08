<?php
/* @var $this CondicionController */
/* @var $model Condicion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php /*echo $form->labelEx($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->dropDownList($model,'Ficha_Medica_idFicha_Medica',CHtml::listData(FichaMedica::model()->findAll(),'idFicha_Medica','idFicha_Medica')); ?>
		<?php echo $form->error($model,'Ficha_Medica_idFicha_Medica');*/ ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'TipoCondicion_idTipoCondicion'); ?>
		<?php echo $form->dropDownList($model,'TipoCondicion_idTipoCondicion',CHtml::listData(Tipocondicion::model()->findAll(),'idTipoCondicion','Nombre')); ?>
		<?php echo $form->error($model,'TipoCondicion_idTipoCondicion'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Detalle'); ?>
		<?php echo $form->textField($model,'Detalle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Detalle'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->