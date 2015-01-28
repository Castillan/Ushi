	<!--	<div class="main">-->
			
			<h1> Búsqueda de accidentes </h1>
			
			<!--<div class="contenido">-->
	
			<div class="busqueda">
			<div class="busqueda-header">
				<h3>Búsqueda</h3>
				</div>
				<div>
					<br/>
					<p>Ingrese la información necesaria</p>									
					<br/>
				<form id="por-norm" method="post">
				<p>Accidentes con fecha:</p>				
				<p>Desde: <input type="text" class="datepicker textfield" id="desde"></p>
				<p>Hasta: <input type="text" class="datepicker textfield" id="hasta"></p>
				
				<p>Persona accidentada:</p>
				<p><input type="text" id="nombre" class="textfield" placeholder="Nombre"/></p>

				<p><input type="text" id="apellido" class="textfield" placeholder="Apellido"/></p>

				<p>Dentro de la universidad: <input type="checkbox" name="dentro" id="dentro" value="1"></p>

				<p><input type="submit" class="search-button" id ="search-worker" value="Buscar"/></p>
				</form>
			</div>
			</div>
		<!--</div>
		</div>-->

<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-1.11.1.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-ui.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.ui.datepicker-es.js"></script>

<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$(".datepicker").datepicker({
firstDay: 1
});
});

</script>