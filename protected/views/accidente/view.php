<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->idAccidente,
);

$this->menu=array(
	array('label'=>'List Accidente', 'url'=>array('index')),
	array('label'=>'Create Accidente', 'url'=>array('create')),
	array('label'=>'Update Accidente', 'url'=>array('update', 'id'=>$model->idAccidente)),
	array('label'=>'Delete Accidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAccidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<h1>View Accidente #<?php echo $model->idAccidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAccidente',
		'Fecha',
		'DiaSemana_idDiaSemana',
		'Hora',
		'Dentro',
		'Ubicacion_idUbicacion',
		'Lugar',
		'Descripcion',
	),
)); ?>


<?php
$model3->Accidente_idAccidente=$model->idAccidente;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'afectados-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Personas involucradas en el accidente',
	'dataProvider'=>$model3->search(),
    
	'filter'=>$model3,
	'columns'=>array(

      //  array( 'name'=>'trabajadoraccidentes.Centrosalud', 'value'=>'TrabajadorAccidente::model()->find(" Accidente_idAccidente = ".$data->idAccidente)->CentroSalud_idCentroSalud' ),
     //   array( 'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre', 'value'=>'TipoCondicion::model()->find(" idPersona = ".$data->idFicha_Medica)->TipoCondicion_idTipoCondicion)->Nombre; ' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
      /*  array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),*/
        'trabajadorIdTrabajador.personaIdPersona.Nombre',
		'trabajadorIdTrabajador.personaIdPersona.Apellido',
		'trabajadorIdTrabajador.personaIdPersona.Cedula',
		'centroSaludIdCentroSalud.Nombre',
		'accidenteIdAccidente.Hora',

		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  
<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Afectados',
			    'url'=>array('/trabajadoraccidente/accidente', 'id'=>$model->idAccidente),
			   
			)); ?> 		
</div>	

<br>
<?php 
$model4->Accidente_idAccidente=$model->idAccidente;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tstigos-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Testigos del accidente',
	'dataProvider'=>$model4->search(),
    
	'filter'=>$model4,
	'columns'=>array(
       // array( 'name'=>'trabajadoraccidentes.Centrosalud', 'value'=>'TrabajadorAccidente::model()->find(" Accidente_idAccidente = ".$data->idAccidente)->CentroSalud_idCentroSalud' ),
     //   array( 'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre', 'value'=>'TipoCondicion::model()->find(" idPersona = ".$data->idFicha_Medica)->TipoCondicion_idTipoCondicion)->Nombre; ' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
      /*  array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),*/
        'personaIdPersona.Nombre',
        'personaIdPersona.Apellido',
        'personaIdPersona.Cedula',
        'personaIdPersona.Telefono',
        'personaIdPersona.Celular',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  

<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Testigos',
			    'url'=>array('/testigo/create', 'id'=>$model->idAccidente),
			   
			)); ?> 		
</div>	