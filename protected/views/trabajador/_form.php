<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Persona_idPersona'); ?>
		<?php echo $form->dropDownList($model,'Persona_idPersona',CHtml::listData(Persona::model()->findAll(),'idPersona','Cedula'),array('empty'=>'Seleccione una persona por su cédula')); ?>
		<?php echo $form->error($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->dropDownList($model,'Nacionalidad',array(''=>'','V'=>'Venezolano','E'=>'Extranjero')); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo $form->dropDownList($model,'Sexo',array(''=>'','F'=>'Femenino','M'=>'Masculino')); ?>
		<?php echo $form->error($model,'Sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mano'); ?>
		<?php echo $form->dropDownList($model,'Mano',array(''=>'Seleccione una mano dominante','I'=>'Izquierda','D'=>'Derecha')); ?>
		<?php echo $form->error($model,'Mano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edo_Civil_idEdo_Civil'); ?>
		<?php echo $form->dropDownList($model,'Edo_Civil_idEdo_Civil',CHtml::listData(EdoCivil::model()->findAll(),'idEdo_Civil','Nombre'),array('empty'=>'Seleccione un estado civil')); ?>
		<?php echo $form->error($model,'Edo_Civil_idEdo_Civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hijos'); ?>
		<?php echo $form->textField($model,'Hijos'); ?>
		<?php echo $form->error($model,'Hijos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NivelEducativo_idNivelEducativo'); ?>
		<?php echo $form->dropDownList($model,'NivelEducativo_idNivelEducativo',CHtml::listData(Grado::model()->findAll(),'idGrado','Grado'),array('empty'=>'Seleccione un nivel educativo')); ?>
        
        <?php echo $form->dropDownList($model,'NivelEducativo_idNivelEducativo',CHtml::listData(Educacion::model()->findAll(),'idEduacion','Nombre'),array('empty'=>'Seleccione un nivel educativo')); ?>
		<?php echo $form->error($model,'NivelEducativo_idNivelEducativo'); ?>        
	</div>
    

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoPostal'); ?>
		<?php echo $form->textField($model,'CodigoPostal'); ?>
		<?php echo $form->error($model,'CodigoPostal'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'IngresoUNET'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'IngresoUNET',
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

		<?php echo $form->error($model,'IngresoUNET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IngresoIVSS'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'IngresoIVSS',
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

		<?php echo $form->error($model,'IngresoIVSS'); ?>
	</div>
    
	<div class="row">
		<?php echo '<b>Estado</b><br/>'; ?>
		<?php echo CHtml::activeDropDownList($model,'idn1',CHtml::listData(Ubicacion::model()->findAll('TipoUbicacion_idTipoUbicacion = 1'),'idUbicacion','Nombre'),
        array(
            'onchange'=>CHtml::ajax(array(
                'type'=>'POST',
                'url'=>CController::createUrl('ubicacion/selectmunicipiotrab'),
                'update'=>'#Trabajador_idn2',
            )),
            'prompt'=>'Seleccione uno'
        )); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>
    
    
    <div class="row">
		<?php echo '<b>Municipio</b><br/>'; ?>
		<?php echo CHtml::activeDropDownList($model,'idn2',array(),
        array(
            'onchange'=>CHtml::ajax(array(
                'type'=>'POST',
                'url'=>CController::createUrl('ubicacion/selectparroquiatrab'),
                'update'=>'#Trabajador_Ubicacion_idUbicacion',
            )),
            'prompt'=>'Seleccione uno'
        )); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>
    
    
    <div class="row">
		<?php echo '<b>Parroquia</b><br/>'; ?>
		<?php echo $form->dropDownList($model,'Ubicacion_idUbicacion',array(),array('prompt'=>'Seleccione una')); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'Cargo_idCargo'); ?>
		<?php echo $form->dropDownList($model,'Cargo_idCargo',CHtml::listData(Cargo::model()->findAll(),'idCargo','Nombre'),array('empty'=>'Seleccione un cargo')); ?>
		<?php echo $form->error($model,'Cargo_idCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dependencia_idDependencia'); ?>
		<?php echo $form->dropDownList($model,'Dependencia_idDependencia',CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),array('empty'=>'Seleccione una dependencia')); ?>
		<?php echo $form->error($model,'Dependencia_idDependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sueldo'); ?>
		<?php echo $form->textField($model,'Sueldo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sueldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->