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

<?php 
$model3->Ficha_Medica_idFicha_Medica=$model->idFicha_Medica;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
	'dataProvider'=>$model3->search(),
    'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
    'emptyText' => 'No se encontraron resultados',
	'filter'=>$model3,
	'columns'=>array(   

       // array( 'name'=>'tipo_nombre', 'value'=>'TipoCondicion::model()->find(" idTipoCondicion = ".$data->TipoCondicion_idTipoCondicion)->Nombre' ),
       // array( 'name'=>'tipo_nombre', 'value'=>'TipoCondicion::model()->with("fichaMedicaIdFichaMedica")->together()->findByAttributes(array("Ficha_Medica_idFicha_Medica"=>$data->Ficha_Medica_idFicha_Medica))->tipoCondicionIdTipoCondicion->Nombre;'),
    	//array( 'name'=>'tipo_nombre', 'value'=>'Condicion::model()->with("tipoCondicionIdTipoCondicion")->together()->findByAttributes(array("Ficha_Medica_idFicha_Medica"=>$data->idFicha_Medica))->tipoCondicionIdTipoCondicion->Nombre;'),
    // array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
     
		'tipoCondicionIdTipoCondicion.Nombre',
		'Detalle',

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
<br>
<?php 
$model4->Ficha_Medica_idFicha_Medica=$model->idFicha_Medica;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medicamentos-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
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
       
        
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  



<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Medicamentos',
			    'url'=>array('/condicionmedicamento/medicamento', 'id'=>$model->idFicha_Medica),
			    
			));

			 ?> 		
</div>	
