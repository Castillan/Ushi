<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTrabajador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTrabajador), array('view', 'id'=>$data->idTrabajador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Persona_idPersona), array('./persona/view', 'id'=>$data->Persona_idPersona)); ?>
	<br />
    <b><?php echo 'Cedula' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->Persona_idPersona)->Cedula; ?>
	<br />
    <b><?php echo 'Nombre' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->Persona_idPersona)->Nombre; ?>
	<br />
    <b><?php echo 'Apellido' ?>:</b>
	<?php echo Persona::model()->find(' idPersona = '.$data->Persona_idPersona)->Apellido; ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->Nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->Sexo); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Mano')); ?>:</b>
	<?php echo CHtml::encode($data->Mano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edo_Civil_idEdo_Civil')); ?>:</b>
	<?php echo CHtml::encode($data->Edo_Civil_idEdo_Civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hijos')); ?>:</b>
	<?php echo CHtml::encode($data->Hijos); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelEducativo_idNivelEducativo')); ?>:</b>
	<?php echo CHtml::encode($data->NivelEducativo_idNivelEducativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IngresoUNET')); ?>:</b>
	<?php echo CHtml::encode($data->IngresoUNET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IngresoIVSS')); ?>:</b>
	<?php echo CHtml::encode($data->IngresoIVSS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ubicacion_idUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->Ubicacion_idUbicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cargo_idCargo')); ?>:</b>
	<?php echo CHtml::encode($data->Cargo_idCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dependencia_idDependencia')); ?>:</b>
	<?php echo CHtml::encode($data->Dependencia_idDependencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sueldo')); ?>:</b>
	<?php echo CHtml::encode($data->Sueldo); ?>
	<br />

	*/ ?>

</div>