<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */
/* @var $form CActiveForm */
?>

<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ficha-medica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model1,$model2)); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model1,'Cédula'); ?>
		<?php echo $form->dropDownList($model1,'Persona_idPersona',CHtml::listData(Persona::model()->findAll(),'idPersona','Cedula'),array('empty'=>'Seleccione una persona por su cédula')); ?>
		<?php echo $form->error($model1,'Persona_idPersona'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'Persona_Nombre'); ?>
		<?php echo $form->labelEx($model1,'Persona_Nombre',CHtml::listData(Persona::model()->findAll(),'Nombre','Cedula'),array('empty'=>'Seleccione una persona por su cédula')); ?>
		<?php echo $form->error($model1,'Persona_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'GrupoSanguineo'); ?>
		<?php echo $form->textField($model1,'GrupoSanguineo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model1,'GrupoSanguineo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'RH'); ?>
		<?php echo $form->textField($model1,'RH'); ?>
		<?php echo $form->error($model1,'RH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'EstadoSalud'); ?>
		<?php echo $form->textField($model1,'EstadoSalud',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'EstadoSalud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'FechaAntitetanica'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model1,
		    'attribute' => 'FechaAntitetanica',
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
		    ),
		));
		?>
		<?php echo $form->error($model1,'FechaAntitetanica'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model1,'Fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model1,
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
		    ),
		));
		?>
		<?php echo $form->error($model1,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Nombre'); ?>
		<?php echo $form->textField($model2,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Apellido'); ?>
		<?php echo $form->textField($model2,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Cedula'); ?>
		<?php echo $form->textField($model2,'Cedula',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model2,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'FechaNacimiento'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model2,
		    'attribute' => 'FechaNacimiento',
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
		    ),
		));
		?>
		<?php echo $form->error($model2,'FechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Direccion'); ?>
		<?php echo $form->textField($model2,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Telefono'); ?>
		<?php echo $form->textField($model2,'Telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model2,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Celular'); ?>
		<?php echo $form->textField($model2,'Celular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model2,'Celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Parentesco'); ?>
		<?php echo $form->textField($model1,'Parentesco',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'Parentesco'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->