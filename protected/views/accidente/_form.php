<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accidente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'Fecha',
		    'themeUrl' => Yii::app()->baseUrl . '/css/jui',
		    'theme' => 'softark',
		    'cssFile' => 'jquery-ui-1.9.2.custom.css',
		    'options' => array(
		        'showOn' => 'both',             // also opens with a button
		        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
		        'showOtherMonths' => true,      // show dates in other months
		        'selectOtherMonths' => true,    // can seelect dates in other months
		        'changeYear' => true,           // can change year
		        'changeMonth' => true,          // can change month
		        'yearRange' => '1950:2099',     // range of year
		        'minDate' => '1950-01-01',      // minimum date
		        'maxDate' => '2099-12-31',      // maximum date
		        'showButtonPanel' => true,      // show button panel
		    ),
		    'htmlOptions' => array(
		        'size' => '10',
		        'maxlength' => '10',
                 'placeholder'=>'aaaa-mm-dd',  
		    ),
		));
		?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DiaSemana_idDiaSemana'); ?>
		<?php echo $form->dropDownList($model,'DiaSemana_idDiaSemana',CHtml::listData(DiaSemana::model()->findAll(),'idDiaSemana','Nombre'),array('empty'=>'Seleccione uno')); ?>
		<?php echo $form->error($model,'DiaSemana_idDiaSemana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora', array(
		        'size' => '8',
		        'maxlength' => '8',
                 'placeholder'=>'HH:MM:SS',  
		    )); ?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dentro'); ?>
		<?php echo $form->dropDownList($model,'Dentro',array(''=>'','1'=>'Dentro','M'=>'Fuera')); ?>
		<?php echo $form->error($model,'Dentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->dropDownList($model,'Ubicacion_idUbicacion',CHtml::listData(Ubicacion::model()->findAll(),'idUbicacion','Nombre'),array('empty'=>'Seleccione uno')); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lugar'); ?>
		<?php echo $form->textField($model,'Lugar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->