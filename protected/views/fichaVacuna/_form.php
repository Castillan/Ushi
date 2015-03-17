<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ficha-vacuna-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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
		<?php echo $form->labelEx($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->textField($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->error($model,'Ficha_Medica_idFicha_Medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vacuna_idVacuna'); ?>
		<?php echo $form->textField($model,'Vacuna_idVacuna'); ?>
		<?php echo $form->error($model,'Vacuna_idVacuna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->