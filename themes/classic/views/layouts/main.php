<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/jquery-ui.css" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/popup.css">
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
		<div class="mmenu">
        
            
		<?php $this->widget('zii.widgets.CMenu',array(
    
			'items'=>array(
				array('label'=>'INICIO', 'url'=>array('/site/index')),
				array('label'=>'¿QUIÉNES SOMOS?', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'CONTÁCTENOS', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'B. TRABAJADORES', 'url'=>array('/site/trabajadores'), 'visible'=>Yii::app()->user->getState('idRol')==1),
				array('label'=>'B. ACCIDENTES', 'url'=>array('/site/accidentes'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Accidente', 'url'=>array('/accidente'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Cargo', 'url'=>array('/cargo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Centrosalud', 'url'=>array('/centrosalud'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Condicion', 'url'=>array('/condicion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'CondicionMedicamento', 'url'=>array('/condicionmedicamento'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'DiaSemana', 'url'=>array('/diasemana'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
                array('label'=>'Dependencia', 'url'=>array('/dependencia'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Estado Civil', 'url'=>array('/edocivil'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Educación', 'url'=>array('/educacion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Ficha Medica', 'url'=>array('/site/ficha_medica'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Grado', 'url'=>array('/grado'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Medicamento', 'url'=>array('/medicamento'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Nivel educativo', 'url'=>array('/niveleducativo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Persona', 'url'=>array('/persona'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Roles', 'url'=>array('/roles'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Testigo', 'url'=>array('/testigo'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Tipoatencion', 'url'=>array('/tipoatencion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'TipoCentro', 'url'=>array('/tipocentro'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'TipoCondicion', 'url'=>array('/tipocondicion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Tiporuta', 'url'=>array('/tiporuta'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Tipoubicacion', 'url'=>array('/tipoubicacion'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Trabajador', 'url'=>array('site/trabajador_main'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Trabajadoraccidente', 'url'=>array('/trabajadoraccidente'), 'visible'=>Yii::app()->user->getState('idRol')==1),
                array('label'=>'Trabajadorruta', 'url'=>array('/trabajadorruta'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
                array('label'=>'Ubicación', 'url'=>array('/ubicacion'), 'visible'=>!Yii::app()->user->isGuest),                
                array('label'=>'Usuarios', 'url'=>array('/usuarios'), 'visible'=>Yii::app()->user->getState('idRol')==1),                
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
  	
		<cuerpecito style="width: 100%;height:auto;">
            <div class="main"><div class="contenido">
		<div class="conten">
	    <?php echo $content;?>    
</div>
</div></div>
		</cuerpecito>
		<!--<div style="width: 100%;height: 10px;"></div>-->
		<footer >
		<p>Derechos reservados</p>
		</footer>
	</body>
</html>



