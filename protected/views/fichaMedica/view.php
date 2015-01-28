<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	$model->idFicha_Medica,
);

$this->menu=array(

	array('label'=>'Delete FichaMedica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFicha_Medica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FichaMedica', 'url'=>array('admin')),
);
?>

<h1>View FichaMedica #<?php echo $model->idFicha_Medica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFicha_Medica',
		'GrupoSanguineo',
		'RH',
		'EstadoSalud',
		'FechaAntitetanica',
		'Persona_idPersona',
		'Fecha',
		'idPariente',
		'Parentesco',
	),
)); ?>
<br>

<div class="new-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Condiciones Medicas',
			    'url'=>array('/condicion/create'),
			)); ?> 		
</div>	

<div class="update-button">
			<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'update-worker',
			    'caption'=>'Medicamentos',
			    'url'=>array('/fichaMedica/index'),
			    
			));

			 ?> 		
</div>	
