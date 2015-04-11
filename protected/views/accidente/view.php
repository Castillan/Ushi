<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->idAccidente,
);

$this->menu=array(
	array('label'=>'Listar Accidentes', 'url'=>array('index')),
	array('label'=>'Crear Accidente', 'url'=>array('create')),
	array('label'=>'Actualizar Accidente', 'url'=>array('update', 'id'=>$model->idAccidente)),
	array('label'=>'Eliminar Accidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAccidente),'confirm'=>'Seguro que quiere eliminar este registro ?')),
	array('label'=>'Administrar Accidente', 'url'=>array('admin')),
);
?>

<h1>Accidente #<?php echo $model->idAccidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Fecha',
		//'DiaSemana_idDiaSemana',
        array(
            'label'=>'Día de la semana',
        'value'=>Diasemana::model()->find(" idDiaSemana = ".$model->DiaSemana_idDiaSemana)->Nombre
        ),
		'Hora',
		array(
		'label'=>'Dentro de la UNET',
		'value'=>$model->getDentro()
		),
        
		'ubicacionIdUbicacion.ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre',
		
		'ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre',
		
		'ubicacionIdUbicacion.Nombre',		
        
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
    'emptyText'=>'No se encontraron Resultados',
    'summaryCssClass'=>'resumen-grids',
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

		
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/TrabajadorAccidente/view", array("id"=>$data->idTrabajadorAccidente))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/TrabajadorAccidente/update", array("id"=>$data->idTrabajadorAccidente))',
				
				),
								
			)
		),
	),
)); ?>  
<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Agregar afectado',
			    'url'=>array('/trabajadoraccidente/accidente', 'id'=>$model->idAccidente),
			   
			)); ?> 		
    
</div>	
<br/><br/>
<?php 
$model4->Accidente_idAccidente=$model->idAccidente;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testigos-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Testigos del accidente',
	'dataProvider'=>$model4->search(),
    'emptyText'=>'No se encontraron Resultados',
    'summaryCssClass'=>'resumen-grids',
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
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/Testigo/view", array("id"=>$data->idTestigo))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/Testigo/update", array("id"=>$data->idTestigo))',
				
				),
                'delete' => array
				(
				 'url'=>'Yii::app()->createUrl("/Testigo/delete", array("id"=>$data->idTestigo))',
				
				),
								
			)
		),
	),
)); ?>  

<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'Testigos',
			    'caption'=>'Agregar testigo',
			    'url'=>array('/testigo/create', 'id'=>$model->idAccidente),
			   
			)); ?> 		
    <br/><br/>
</div>	
