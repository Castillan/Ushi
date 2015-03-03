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


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Personas involucradas en el accidente',
	'dataProvider'=>$model->search(),
    
	'filter'=>$model,
	'columns'=>array(
		//'Persona_idPersona',
		//'Nacionalidad',
		//'Mano',
      /*  array('name'=>'Mano', 'filter'=>
                array(
                    //''=>'All',
                    'I'=>'Izquierda',
                    'D'=>'Derecha',
                )
            
        ),*/
		/*'Edo_Civil_idEdo_Civil',
		
		'Hijos',
		'NivelEducativo_idNivelEducativo',
		'Email',
		'CodigoPostal',
		'IngresoUNET',
		'IngresoIVSS',
		'Ubicacion_idUbicacion',
		'Cargo_idCargo',
		'Dependencia_idDependencia',
		'Sueldo',
		*/        
        array( 'name'=>'trabajadoraccidentes.Centrosalud', 'value'=>'TrabajadorAccidente::model()->find(" Accidente_idAccidente = ".$data->idAccidente)->CentroSalud_idCentroSalud' ),
     //   array( 'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre', 'value'=>'TipoCondicion::model()->find(" idPersona = ".$data->idFicha_Medica)->TipoCondicion_idTipoCondicion)->Nombre; ' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
      /*  array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),*/
        
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


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Personas involucradas en el accidente',
	'dataProvider'=>$model->search(),
    
	'filter'=>$model,
	'columns'=>array(
		//'Persona_idPersona',
		//'Nacionalidad',
		//'Mano',
      /*  array('name'=>'Mano', 'filter'=>
                array(
                    //''=>'All',
                    'I'=>'Izquierda',
                    'D'=>'Derecha',
                )
            
        ),*/
		/*'Edo_Civil_idEdo_Civil',
		
		'Hijos',
		'NivelEducativo_idNivelEducativo',
		'Email',
		'CodigoPostal',
		'IngresoUNET',
		'IngresoIVSS',
		'Ubicacion_idUbicacion',
		'Cargo_idCargo',
		'Dependencia_idDependencia',
		'Sueldo',
		*/        
        array( 'name'=>'trabajadoraccidentes.Centrosalud', 'value'=>'TrabajadorAccidente::model()->find(" Accidente_idAccidente = ".$data->idAccidente)->CentroSalud_idCentroSalud' ),
     //   array( 'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre', 'value'=>'TipoCondicion::model()->find(" idPersona = ".$data->idFicha_Medica)->TipoCondicion_idTipoCondicion)->Nombre; ' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
      /*  array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),*/
        
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