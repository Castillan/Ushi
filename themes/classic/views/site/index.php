     <style>

#carousel{
	display: inline-block; 
	width: 600px;
	height: 300px;
	box-shadow: 0 0 20px #000;
	overflow: hidden;
	margin-left: 10px;
	margin-top:10px;

}

#carousel ul{
	list-style: none;
	width: 5500px;
	height: auto;
}
#carousel ul li{
	float: left;
	width: 600px;
	height: auto;
}
#carousel ul li img{
	width: 600px;
	height: auto;
}
.contenido-central {
	border: 1px solid #999;		
	width:102.3%; 
	height:340px; 
	overflow:hidden;
	margin:0 auto; 
	margin-top:5px;
	margin-left: -1px;
	background-image: url("./themes/classic/images/carrusel/fondo7.png"); 
    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover;
}

.titulo{
	width:100%;
	height:20px;
}

.relleno{
	 width:100%;
	 height:3px;
}
.texto-titulo-principal h3{
text-align:center;
font: 11.7pt arial, san-serif;
width: 310px;
height: 20px;
margin: 0 auto;

background-color: black;
color: white;
}
.titulo-principal{
	box-shadow: 0 0 90px #000;
	width: 100%;
	background-image: url("./themes/classic/images/carrusel/barra.png"); 
    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover;	    
}

.div-muneco{
	display:inline-block; 
	width:385px;
	height:300px;
}
.img-muneco{
margin-top: 110px;	
	margin-left: -50px;
	width: 200px;
	height: 200px;
    background-image: url("./themes/classic/images/carrusel/muneco2.png"); 
    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover; 
    
}
.img-burbuja{
	float: right;
	display: block;
	margin-right: 30px;
	margin-top: -15px;
	width: 270px;
	height: 79%;
    background-image: url("./themes/classic/images/carrusel/burbuja1.png"); 
    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover; 
}

.caja_botones{
	position: absolute;	
	width: 83px;
	height:40px;
	background-color: black; opacity: 0.5;
	margin-top: 280px;
	margin-left: 280px;
	border-radius: 10%;
	float: left;
}
.boton{
	display: inline-block;
background-image: url("./themes/classic/images/carrusel/izquierda.png"); 
   -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover; 
    	width: 40px;
	height:40px;
}
.nota{
	float: left;
	margin-top:0px; 
	margin-left:2px; 
	width:32%;
	height:300px;
	background-image: url("./themes/classic/images/carrusel/nota.png"); 
	    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover; 
    text-align: center;

}
.imagen_nota{
	margin-top: 40px;
	display: inline-block;

   -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover; 
    	width: 120px;
	height:120px;
}
.nota .texo_nota{	
	font: 11.7pt cursive, san-serif;
	margin-top: 0px;
	width: 80%;	
margin: 0 auto;
	height: 100px;
	
}
	</style>
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
     		<div class="img-burbuja"></div>
     		<div class="img-muneco"></div>
     		
     	</div>
		
		<div class="contenido-central">				
			<div class="titulo-principal">
						<div class="texto-titulo-principal"><h3> Unidad de Seguridad e Higiene Idustrial </h3></div>
			</div>					
			<div class="contenedor-columnas" style="width:100%;height:auto;">
				
				<div class="centrar" style="width:90%; margin: 0 auto;"> 

					<div class="nota" >
						<div class="imagen_nota" style=" background-image: url(./themes/classic/images/nota/5.png); "></div>
						<div class="texo_nota">
							implementar acciones de prevenención y mitigación así como participar en la preparación de planes de 
							respuesta. Eje "Desarrollo Integral Sostenible"
						</div>
					</div>

					<div class="nota">
						<div class="imagen_nota"  style="background-image: url(./themes/classic/images/nota/3.png); "></div>
					<div class="texo_nota">
							Coordinar la ejecución del plan de respuesta de acuerdo a las alertas declaradas por la autoridades competentes
						</div>
					</div>

					<div class="nota">
						<div class="imagen_nota"  style="background-image: url(./themes/classic/images/nota/6.png); "></div>
					<div class="texo_nota">
							Rehabilitación y recontrucción: acciones o solicitudes de apoyo con enfoque de desarrollo sostenible hacia la comunidad obrera/ estudiantil afectada
						</div>
					</div>
				</div>
				<div class="relleno"></div>

				</div>

		   </div>

		</div>			
		<div class="titulo-principal" style="width:100%;height:20px;"></div>
</div>
			
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