     <div class="main" style="width:1000px;height:auto;">
     	<div class="caja_botones">
	     	<div class="boton"></div>
	     	<div class="boton" style="float:right;background-image: url(./themes/classic/images/carrusel/derecha.png); "></div>
     	</div>
     	<div id="carousel">
     		<ul>
     			<li><img src="./themes/classic/images/carrusel/4.jpg"  class="css-img"></li>
     			<li><img src="./themes/classic/images/carrusel/3.jpg"  class="css-img"></li>
     			<li><img src="./themes/classic/images/carrusel/2.png"  class="css-img"></li>
     			<li><img src="./themes/classic/images/carrusel/1.jpg"  class="css-img"></li>
     		</ul>

     		
     	</div>
     	<div class="div-muneco" >
     		<div class="img-burbuja">
            <div  class="texto_burbuja">
            <?php echo Notas::model()->find("idNotas = 1")->Burbuja; ?>
            </div>
            </div>
            
     		<div class="img-muneco"></div>
     		
     	</div>
		
		<div class="contenido-central">				
			<div class="titulo-principal">
						<div class="texto-titulo-principal"><h3> Unidad de Seguridad e Higiene Industrial </h3></div>
			</div>					
			<div class="contenedor-columnas" style="width:100%;height:auto;">
				
				<div class="centrar" style="width:90%; margin: 0 auto;"> 

					<div class="nota" >
						<div class="imagen_nota" style=" background-image: url(./themes/classic/images/nota/5.png); "></div>
						<div class="texo_nota">
<!--							implementar acciones de prevenención y mitigación así como participar en la preparación de planes de 
							respuesta. Eje "Desarrollo Integral Sostenible"-->
                            <?php echo Notas::model()->find("idNotas = 1")->Nota1; ?>
						</div>
					</div>

					<div class="nota">
						<div class="imagen_nota"  style="background-image: url(./themes/classic/images/nota/3.png); "></div>
					<div class="texo_nota">
						<!--	Coordinar la ejecución del plan de respuesta de acuerdo a las alertas declaradas por la autoridades competentes-->
                        <?php echo Notas::model()->find("idNotas = 1")->Nota2; ?>
						</div>
					</div>

					<div class="nota">
						<div class="imagen_nota"  style="background-image: url(./themes/classic/images/nota/6.png); "></div>
					<div class="texo_nota">
							<!--Rehabilitación y recontrucción: acciones o solicitudes de apoyo con enfoque de desarrollo sostenible hacia la comunidad obrera/ estudiantil afectada-->
                        <?php echo Notas::model()->find("idNotas = 1")->Nota3; ?>
						</div>
					</div>
				</div>
				<div class="relleno"></div>

				</div>

		   </div>

		</div>			
		<div class="titulo-principal" style="width:100%;height:20px;"></div>

			
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-1.11.1.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-ui.js"></script>
<script>
	$(document).ready(function(){

		setInterval(function(){
		$('#carousel ul').animate({marginLeft:'-600px'},400,function(){

			$(this).find("li:last").after($(this).find("li:first"));
			$(this).css({marginLeft:0});

		});

	},4000);

	});
</script>