<?php
/* @var $this FichaMedicaController */
/* @var $data FichaMedica */
?>

<div class="view">
	
	<h2> Informacion de Paciente</h2>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('# de Ficha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFicha_Medica), array('view', 'id'=>$data->idFicha_Medica)); ?>
	<br />	
	
	<b><?php echo 'Nombre' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->Persona_idPersona)->Nombre; ?>
	<br />
    <b><?php echo 'Apellido' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->Persona_idPersona)->Apellido; ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('GrupoSanguineo')); ?>:</b>
	<?php echo CHtml::encode($data->GrupoSanguineo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RH')); ?>:</b>
	<?php if(CHtml::encode($data->RH)==1){
		echo 'Positivo';
	}else echo 'Negativo';  ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EstadoSalud')); ?>:</b>
	<?php echo CHtml::encode($data->EstadoSalud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />
	
	<h2> Persona de Contacto</h2>

	<b><?php echo 'Nombre' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->idPariente)->Nombre; ?>
	<br />
    <b><?php echo 'Apellido' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->idPariente)->Apellido; ?>
	<br />
	    <b><?php echo 'Cedula' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->idPariente)->Cedula; ?>
	<br />
	    <b><?php echo 'Telefono' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->idPariente)->Telefono; ?>
	<br />



	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idPariente')); ?>:</b>
	<?php echo CHtml::encode($data->idPariente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->Parentesco); ?>
	<br />

	*/ ?>

</div>