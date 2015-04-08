<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="flexible">
<div class="span-19 caja70">
	<div id="content">
		<?php echo $content; ?>
	</div> <!--content -->
</div>
    <?php if($this->action->Id != 'principal'){ ?>
<div class="span-5 last caja15">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Actividades',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
    <?php } ?>
    </div>
<?php $this->endContent(); ?>