<!--	<div class="main">-->
			
			<h1> Fichas Medicas </h1>			
			<div class="contenido">
			
			<div class="busqueda">
			<div class="opcion">
			<br/>
			<div class="new-button">
				
		<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'new-worker',
			    'caption'=>'Nueva ficha',
			    'htmlOptions'=>array('class'=>'new-button'),
			    'url'=>array('/fichaMedica/create'),
			)); ?> </div>	
			<div class="update-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Actualizar ficha',
			    'url'=>array('/fichaMedica/index'),
			)); ?> </div>	
			</div>
			<br/>
			<div class="cedula">					
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
			</div>
			</div>
			<br/>
			
			
		
			</div>
			<!--</div>
			<div style="width=50px;eigth=10px;"></div>-->