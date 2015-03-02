<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	$model->idFicha_Medica,
);

$this->menu=array(

	array('label'=>'Delete FichaMedica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFicha_Medica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FichaMedica', 'url'=>array('admin')),
);
?>

<h1>Ficha Medica #<?php echo $model->idFicha_Medica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personaIdPersona.Nombre',
		'personaIdPersona.Apellido',
		'personaIdPersona.Cedula',
		'GrupoSanguineo',
		array(
		'label'=>'RH',
		'value'=>$model->getRH()
		),
		'EstadoSalud',
		'FechaAntitetanica',
		'Persona_idPersona',
		'Fecha',
		'idPariente0.Nombre',
		'idPariente0.Apellido',
		'idPariente0.Cedula',
		'idPariente0.Telefono',
		'Parentesco',
	),
)); ?>
<br>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
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
        array( 'name'=>'condicions.Detalle', 'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->Detalle' ),
        array( 'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre', 'value'=>'TipoCondicion::model()->find(" idPersona = ".$data->idFicha_Medica)->TipoCondicion_idTipoCondicion)->Nombre; ' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
        array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),
        
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  

<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Condiciones Medicas',
			    'url'=>array('/condicion/condicion', 'id'=>$model->idFicha_Medica),
			   
			)); ?> 		
</div>	

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medicamentos-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
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
        array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->Dosis' ),
         array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->EfectoSecundario' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
        array(
            'name'=>'condiciones.tipoCondicionIdTipoCondicion.Nombre',
         //   'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Condicion::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->idCondicion',
        ),
        
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  

<div class="update-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Medicamentos',
			    'url'=>array('/condicionmedicamento/medicamento', 'id'=>$model->idFicha_Medica),
			    
			));

			 ?> 		
</div>	
