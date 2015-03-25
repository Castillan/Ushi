<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	$model->idFicha_Medica,
);

$this->menu=array(

	array('label'=>'Delete FichaMedica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFicha_Medica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Update Ficha Medica', 'url'=>array('update', 'id'=>$model->idFicha_Medica)),
	array('label'=>'Manage FichaMedica', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('idRol')==1),
);
?>

<h1>Ficha Medica #<?php echo $model->idFicha_Medica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'Fecha',
		'personaIdPersona.Nombre',
		'personaIdPersona.Apellido',
		'personaIdPersona.Cedula',
		'GrupoSanguineo',
		array(
		'label'=>'RH',
		'value'=>$model->getRH()
		),
		'EstadoSalud',				
	),
)); ?>

<h3 class= "titulo-detail">Persona de contacto</h3>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(			
		'idPariente0.Nombre',
		'idPariente0.Apellido',
		'idPariente0.Cedula',
		'idPariente0.Telefono',
        'idPariente0.Celular',
		'Parentesco',
	),
)); ?>
<br>

<?php 
$model3->Ficha_Medica_idFicha_Medica=$model->idFicha_Medica;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
	'dataProvider'=>$model3->search(),
    'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Condiciones médicas',
    'emptyText'=>'No se encontraron Resultados',
    'summaryCssClass'=>'resumen-grids',
	'filter'=>$model3,
	'columns'=>array(   

       // array( 'name'=>'tipo_nombre', 'value'=>'TipoCondicion::model()->find(" idTipoCondicion = ".$data->TipoCondicion_idTipoCondicion)->Nombre' ),
       // array( 'name'=>'tipo_nombre', 'value'=>'TipoCondicion::model()->with("fichaMedicaIdFichaMedica")->together()->findByAttributes(array("Ficha_Medica_idFicha_Medica"=>$data->Ficha_Medica_idFicha_Medica))->tipoCondicionIdTipoCondicion->Nombre;'),
    	//array( 'name'=>'tipo_nombre', 'value'=>'Condicion::model()->with("tipoCondicionIdTipoCondicion")->together()->findByAttributes(array("Ficha_Medica_idFicha_Medica"=>$data->idFicha_Medica))->tipoCondicionIdTipoCondicion->Nombre;'),
    // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
     
		'tipoCondicionIdTipoCondicion.Nombre',
		'Detalle',

		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/Condicion/view", array("id"=>$data->idCondicion))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/Condicion/update", array("id"=>$data->idCondicion))',
				
				),
								
			)
		)
	),
)); ?>  


<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Agregar condicion médica',
			    'url'=>array('/condicion/condicion', 'id'=>$model->idFicha_Medica),
			   
			)); ?> 		
</div>	
<br/>
<br/>
<?php 
$model4->Ficha_Medica_idFicha_Medica=$model->idFicha_Medica;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medicamentos-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Medicamentos',
    'emptyText'=>'No se encontraron Resultados',
    'summaryCssClass'=>'resumen-grids',
	'dataProvider'=>$model4->search(),
	'filter'=>$model4,
	'columns'=>array(
	
      /*  array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->Dosis' ),
         array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->EfectoSecundario' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
       */ 
        'medicamentoIdMedicamento.Nombre',
		'Dosis',
		'EfectoSecundario',
       
        
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/CondicionMedicamento/view", array("id"=>$data->idCondicionMedicamento))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/CondicionMedicamento/update", array("id"=>$data->idCondicionMedicamento))',
				
				),
								
			)
		),
	),
)); ?>  



<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'Nuevo Medicamento',
			    'caption'=>'Agregar medicamento',
			    'url'=>array('/condicionmedicamento/medicamento', 'id'=>$model->idFicha_Medica),
			    
			));

			 ?> 		
</div>	
<br/>
<br/>
<?php 
$model5->Ficha_Medica_idFicha_Medica=$model->idFicha_Medica;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vacunas-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Vacunas',
    'emptyText'=>'No se encontraron Resultados',
    'summaryCssClass'=>'resumen-grids',
	'dataProvider'=>$model5->search(),
	'filter'=>$model5,
	'columns'=>array(
	
      /*  array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->Dosis' ),
         array( 'name'=>'condicionmedicamentos.Dosis', 'value'=>'Condicionmedicamento::model()->find(" Ficha_Medica_idFicha_Medica = ".$data->idFicha_Medica)->EfectoSecundario' ),
       // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
       */ 
        'vacunaIdVacuna.Nombre',
		'Fecha',
		'vacunaIdVacuna.Descripcion',
       
        
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/FichaVacuna/view", array("id"=>$data->idFicha_Vacuna))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/FichaVacuna/update", array("id"=>$data->idFicha_Vacuna))',
				
				),
								
			)
		),
	),
)); ?>  

<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'Nueva Vacuna',
			    'caption'=>'Agregar vacuna',
			    'url'=>array('/fichaVacuna/vacuna', 'id'=>$model->idFicha_Medica),
			   
			)); ?> 		
    <br/><br/>
</div>	


