			<h1> Trabajadores </h1>			
			<div class="contenido">
			
			<div class="busqueda">
			<div class="opcion">
			<br/>
			<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'new-worker',
			    'caption'=>'Nuevo trabajador',
			    'htmlOptions'=>array('class'=>'new-button'),
			    'url'=>array('/persona/create'),
			)); ?> </div>	
			<div class="update-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Actualizar trabajador',
			    'url'=>array('/trabajador/index'),
			)); ?> </div>	
			</div>
			<br/>
		
			</div>
			<br/>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajador-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
	'dataProvider'=>$model->search(),
    'emptyText' => 'No se encontraron resultados',
	'filter'=>$model,
	'columns'=>array(
		'idTrabajador',
		//'Persona_idPersona',
		//'Nacionalidad',
        array('name'=>'Nacionalidad', 'filter'=>
                array(
                    //''=>'All',
                    'V'=>'Venezolano',
                    'E'=>'Extranjero',
                )
            
        ),        
		//'Sexo',
        array('name'=>'Sexo', 'filter'=>
                array(
                    //''=>'All',
                    'M'=>'Masculino',
                    'F'=>'Femenino',
                )
            
        ),
     
        array( 'name'=>'persona_nombre', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Nombre' ),
        array( 'name'=>'persona_apellido', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Apellido; ' ),
        array( 'name'=>'persona_cedula', 'value'=>'Persona::model()->find(" idPersona = ".$data->Persona_idPersona)->Cedula; ' ),
        array(
            'name'=>'Dependencia_idDependencia',
            'filter'=>CHtml::listData(Dependencia::model()->findAll(),'idDependencia','Nombre'),
            'value'=>'Dependencia::model()->find(" idDependencia = ".$data->Dependencia_idDependencia)->Nombre;',
        ),
        
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>  
			</div>