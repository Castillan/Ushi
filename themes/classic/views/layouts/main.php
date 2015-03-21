	  
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/template_footer.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/jsn_social_icons_footer.css" />	 
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/blue_footer.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/business_footer.css" />


<?php /* @var $this Controller */ 
/*PANEL 1*/
      Yii::app()->getPanel('adminPanel')
        
		->raw('Hola <b>'.Yii::app()->user->name.'</b>.<br />¿Cómo estas administrador?') // add raw text
		->separator() // add separator
		->single(
			'Accidente', // label
			array('/..'. Yii::app()->baseUrl.'/accidente/principal'), // url
			Yii::app()->baseUrl.'/themes/classic/images/accidents.png' // icon
		) // add single element
		->stack(array(
			array('label' => 'Testigo', 'url' => '/..'. Yii::app()->baseUrl.'/testigo/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'Trab-Accidente', 'url' => '/..'. Yii::app()->baseUrl.'/trabajadoraccidente/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		)) // add stack elements         
		->separator()
          ->single(
			'Trabajador', // label			
            array('/..'. Yii::app()->baseUrl.'/trabajador/principal/'), // url
			Yii::app()->baseUrl.'/themes/classic/images/workers.png' // icon
		) // add single element
		->stack(array(
			array('label' => 'Persona', 'url' => '/..'. Yii::app()->baseUrl.'/persona/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'Dependencia', 'url' => '/..'. Yii::app()->baseUrl.'/dependencia/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Cargo', 'url' => '/..'. Yii::app()->baseUrl.'/cargo/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		)) // add stack elements         
          ->stack(array(
			array('label' => 'TipoRuta', 'url' => '/..'. Yii::app()->baseUrl.'/tiporuta/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'Trab-ruta', 'url' => '/..'. Yii::app()->baseUrl.'/trabajadorruta/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Edo_Civi', 'url' => '/..'. Yii::app()->baseUrl.'/edocivil/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		)) // add stack elements        
            ->stack(array(

            array('label' => 'NivelEduc', 'url' => '/..'. Yii::app()->baseUrl.'/niveleducativo/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		)) // add stack elements 
          ->separator();

/*PANEL 2*/
    Yii::app()->getPanel('adminPanel2')        
          ->single(
			'Ficha Médica', // label
			array('/..'. Yii::app()->baseUrl.'/fichaMedica/principal'), // url
			Yii::app()->baseUrl.'/themes/classic/images/doctor.png' // icon
		) // add single element
		->stack(array(
			array('label' => 'Condición', 'url' => '/..'. Yii::app()->baseUrl.'/condicion/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'TipoCondicion', 'url' => '/..'. Yii::app()->baseUrl.'/tipocondicion/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Medicamento', 'url' => '/..'. Yii::app()->baseUrl.'/medicamento/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		)) // add stack elements         
          ->stack(array(
            array('label' => 'Cond-Medicam', 'url' => '/..'. Yii::app()->baseUrl.'/condicionmedicamento/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),                          
			array('label' => 'CentroSalud', 'url' => '/..'. Yii::app()->baseUrl.'/centrosalud/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'TipoCentro', 'url' => '/..'. Yii::app()->baseUrl.'/tipocentro/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),            
		)) // add stack elements 
        ->stack(array(
            array('label' => 'TipoAtencion', 'url' => '/..'. Yii::app()->baseUrl.'/tipoatencion/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Vacuna', 'url' => '/..'. Yii::app()->baseUrl.'/vacuna/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),   
            array('label' => 'FichaVacuna', 'url' => '/..'. Yii::app()->baseUrl.'/fichavacuna/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),   
		)) // add stack elements  
        ->separator()
        ->single(
			'Usuarios', // label
			array('/..'. Yii::app()->baseUrl.'/usuarios/'), // url
			Yii::app()->baseUrl.'/themes/classic/images/user.png' // icon
		) // add single element
            ->stack(array(
			array('label' => 'Roles', 'url' => '/..'. Yii::app()->baseUrl.'/roles/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
			array('label' => 'DiaSemana', 'url' => '/..'. Yii::app()->baseUrl.'/diasemana/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Ubicacion', 'url' => '/..'. Yii::app()->baseUrl.'/ubicacion/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),            
		))
        ->stack(array(			
            array('label' => 'TipoUbicacion', 'url' => '/..'. Yii::app()->baseUrl.'/tipoubicacion/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
            array('label' => 'Notas', 'url' => '/..'. Yii::app()->baseUrl.'/notas/', 'icon' => Yii::app()->baseUrl.'/themes/classic/images/blue.jpg'),
		))
		->separator(); // add separator

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="language" content="en" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/jquery-ui.css" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
			
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/main2.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>	
		<header>			
			<a id ="logo" href="http://www.unet.edu.ve"> UNET </a>			
			<div class="header-text">
				<h1>UNIVERSIDAD NACIONAL EXPERIMENTAL DEL TÁCHIRA</h1>				
				<h2>UNIDAD DE SEGURIDAD E HIGIENE INDUSTRIAL</h2>
                    
			</div>
		</header>
		
		<nav >				
		<div class="menu" >
        
            
		<?php $this->widget('zii.widgets.CMenu',array(
    
			'items'=>array(
				array('label'=>'INICIO', 'url'=>array('/')),
				array('label'=>'¿QUIÉNES SOMOS?', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'CONTÁCTENOS', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Accidente', 'url'=>array('/accidente/principal'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Cargo', 'url'=>array('/cargo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Centrosalud', 'url'=>array('/centrosalud'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Condicion', 'url'=>array('/condicion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'CondicionMedicamento', 'url'=>array('/condicionmedicamento'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'DiaSemana', 'url'=>array('/diasemana'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
                //array('label'=>'Dependencia', 'url'=>array('/dependencia'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Estado Civil', 'url'=>array('/edocivil'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Educación', 'url'=>array('/educacion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Ficha Medica', 'url'=>array('/fichaMedica/principal'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Grado', 'url'=>array('/grado'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Medicamento', 'url'=>array('/medicamento'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Nivel educativo', 'url'=>array('/niveleducativo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Persona', 'url'=>array('/persona'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Roles', 'url'=>array('/roles'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Testigo', 'url'=>array('/testigo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Tipoatencion', 'url'=>array('/tipoatencion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'TipoCentro', 'url'=>array('/tipocentro'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'TipoCondicion', 'url'=>array('/tipocondicion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Tiporuta', 'url'=>array('/tiporuta'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Tipoubicacion', 'url'=>array('/tipoubicacion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Trabajador', 'url'=>array('trabajador/principal'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Trabajadoraccidente', 'url'=>array('/trabajadoraccidente'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                //array('label'=>'Trabajadorruta', 'url'=>array('/trabajadorruta'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
                //array('label'=>'Ubicación', 'url'=>array('/ubicacion'), 'visible'=>!Yii::app()->user->isGuest),                
                //array('label'=>'Usuarios', 'url'=>array('/usuarios'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	
		</div>
		</nav>
		</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
		<!--<a href="#x" class="overlay" id="login_form"></a>-->
  	
	<!--	<cuerpecito style="width: 100%;height:auto;">-->
            <div class="main">
            	<div class="contenido">          
		<div class="conten">
            <?php 
            if(!Yii::app()->user->isGuest && Yii::app()->user->getState('idRol')==1){
                Yii::app()->getPanel('adminPanel')->show(array(
                'skin' => 'dark', // skin dark
                'visibleRule' => 'true', // this panel visible for all
                'height' => 90, // this panel is 80px height
                'useCookie' => false, // this panel not use cookie
                'initiallyOpen' => true // this panel is open by default
 
            ));
          Yii::app()->getPanel('adminPanel2')->show(array(
                'skin' => 'dark', // skin dark
                'visibleRule' => 'true', // this panel visible for all
                'height' => 90, // this panel is 80px height
                'useCookie' => false, // this panel not use cookie
                'initiallyOpen' => true // this panel is open by default
 
            ));
            }?>
	       <?php echo $content;?>    
        </div>
</div></div>
	<!--	</cuerpecito>-->
		<!--<div style="width: 100%;height: 10px;"></div>-->
		<footer style="margin-top:-20px; height:auto;">
		

						<div id="jsn-footer" style=":padding-top:-200px; height:150px;">
							<div id="jsn-footer-inner">
										<div id="jsn-social-icons">
							<ul>
													<li class="facebook">
									<a href="https://es-la.facebook.com/unetoficial" title="Facebook" target="_blank">
										Facebook</a>
								</li>
													<li class="twitter">
									<a href="https://twitter.com/UNEToficial" title="Twitter" target="_blank">
										Twitter</a>
								</li>
													<li class="youtube">
									<a href="http://www.youtube.com/user/UNETHoy" title="YouTube" target="_blank">
										YouTube</a>
								</li>
													<li class="rss">
									<a href="http://unet.edu.ve/index.php?option=com_ninjarsssyndicator&feed_id=1&format=raw" title="RSS" target="_blank">
										RSS</a>
								</li>
												</ul>
						</div>
									<div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer2">
													<div id="jsn-pos-footer" class="row-fluid">
									<div class=" jsn-modulecontainer span12"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
	<ul class="menu-divmenu">
	<li class="first">	<a href="http://www.unet.edu.ve/noticias-archivadas/90-latest-news.html">
			<span>
			Noticias UNET		</span>
		</a>
		</li><li><a href="http://www.unet.edu.ve/busqueda-inteligente.html">
		<span>
			Búsqueda Inteligente	</span>
	</a></li><li><a href="http://www.unet.edu.ve/telefonos-internos.html">
		<span>
			Telefonos Internos	</span>
	</a></li><li>		<a class="" href="https://intranet.unet.edu.ve/postgrado/ingreso.php" target="_blank">
				<span>
				Estudiantes de Postgrado			</span>
			</a>
	</li><li class="last"><a href="http://www.unet.edu.ve/mapa-del-sitio.html">
		<span>
			Mapa del Sitio	</span>
	</a></li></ul><div class="clearbreak"></div></div></div></div>
		</div>
			<div id="jsn-pos-bottom" class="row-fluid">
									<div class=" jsn-modulecontainer span12"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
	<div>
		<p>Avenida Universidad, Sector Paramillo. San Cristóbal, Venezuela. +58 (276) 353-0422. RIF: G-20004886-7.<a href="http://www.unet.edu.ve/component/content/article/88-unet/principal/232-contactenos.html">Contáctenos</a></p>

		<p><span style="line-height: 1.3em;">Republica Bolivariana de Venezuela. <a href="http://www.mppeu.gob.ve/" target="_blank">Ministerio del Poder Popular Para la Educación Universitaria</a>.</span></p>

		<p><span style="line-height: 1.3em;"><span style="line-height: 15.600000381469727px;">Copyright © 2014.&nbsp;</span>Universidad Nacional Experimental del Táchira (UNET). Adaptado por: <a href="http://www.unet.edu.ve/sobre-la-unet/autoridades/rectorado/ceti.html">CETI</a></span></p>
	</div>

	</div></div></div>
								</div>
										</div>
				</div>
			</div>
				</div>
		






		</footer>
	</body>
</html>