			<h1> Búsqueda de trabajadores </h1>			
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
		<!--	<div class="cedula">					
				<div class="busqueda-header">
				<h3>Búsqueda por cédula</h3>
				</div>
				<div>	
                    <br/>
					<p>Introduzca la cédula a buscar</p>				
					<p>Ej: 21542121</p>				
					
					<form id="por-cedula" method="post">								
						<p><input type="text" id="cedula" class="textfield" placeholder="Cédula"/></p>
					 <br/>
					 <br/>
					 <br/>
					 <br/>
					 <br/>
						<p><input type="submit" class="search-button" id ="search-worker" value="Buscar"/></p>
					</form>
				</div>
			</div>
			
			
			<div class="nombre">
			<div class="busqueda-header">                
				<h3>Búsqueda por nombre</h3>
				</div>
				<div>
					<br/>
					<p>Ingrese la información necesaria</p>									
					</br>
				<form id="por-norm" method="post">				
				<p><input type="text" id="nombre" class="textfield" placeholder="Nombre"/></p>

				<p><input type="text" id="apellido" class="textfield" placeholder="Apellido"/></p>

				<p><select>
					<option value="null">Seleccione Dependencia</option>						
				</select> </p>

				<p><input type="submit" class="search-button" id ="search-worker" value="Buscar"/></p>
				</form>
		
			</div>
			</div>-->
			</div>
			<br/>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajador-grid',
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
	'dataProvider'=>$model->search(),
    
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