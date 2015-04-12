			<h1> Accidentes </h1>			
			<div class="contenido">
			
			<div class="busqueda">
			<div class="opcion">
			<br/>
			<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'new-worker',
			    'caption'=>'Nuevo Accidente',
			    'htmlOptions'=>array('class'=>'new-button'),
			    'url'=>array('/accidente/nuevoaccidente'),
			)); ?> </div>	
			<div class="update-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Actualizar accidente',
			    'url'=>array('/accidente/index'),
			)); ?> </div>	
			</div>
			<br/>
		
            
			</div>
			<br/>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajadoraccidente-grid',
	'dataProvider'=>$model->search(),
    'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
    'emptyText' => 'No se encontraron resultados',
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'Accidente_idAccidente', 'header'=>'idAccidente'),
		/*'idTrabajadorAccidente',
		'Horas',
		'Minutos',
		'CentroSalud_idCentroSalud',*/
		//'Trabajador_idTrabajador',
        array( 'name'=>'persona_nombre', 'value'=>'Trabajador::model()->with("personaIdPersona")->together()->findByAttributes(array("idTrabajador"=>$data->Trabajador_idTrabajador))->personaIdPersona->Nombre;' ),
        array( 'name'=>'persona_apellido', 'value'=>'Trabajador::model()->with("personaIdPersona")->together()->findByAttributes(array("idTrabajador"=>$data->Trabajador_idTrabajador))->personaIdPersona->Apellido;' ),
        array( 'name'=>'persona_cedula', 'value'=>'Trabajador::model()->with("personaIdPersona")->together()->findByAttributes(array("idTrabajador"=>$data->Trabajador_idTrabajador))->personaIdPersona->Cedula;' ),        
        array('name'=>'fecha_acc','header'=>'Fecha accidente','value'=>'Accidente::model()->find(" idAccidente = ".$data->Accidente_idAccidente)->Fecha' ),
         array('name'=>'fecha_desde','type'=>'Date'),
        array('name'=>'fecha_hasta','type'=>'Date'),
         array('name'=>'trab_dentro', 'header'=>'Dentro de la UNET', 
               //'value'=>'Accidente::model()->find(" idAccidente = ".$data->Accidente_idAccidente)->Dentro',
               'value'=>array($this,'getDentro'),
               'filter'=>
                array(
                    //''=>'All',
                    '1'=>'Si',
                    '0'=>'No',
                )              
            
        ), 
        
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{view}{update}{delete}',
		    'buttons'=>array
    		(
				'view' => array
				(
				 'url'=>'Yii::app()->createUrl("/Accidente/view", array("id"=>$data->Accidente_idAccidente))',
				
				),
				'update' => array
				(
				 'url'=>'Yii::app()->createUrl("/Accidente/update", array("id"=>$data->Accidente_idAccidente))',
				
				),
								
			)
		),
	),
)); ?>


			</div>