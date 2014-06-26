<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="submenu">
	<div class="container">
    <?php $this->widget('GMenu',array(
        'items'=>array(
            array('label'=>'Details', 'url'=>array('/bank')),
            array('label'=>'Charges', 'url'=>array('/charge')),
        ),
    )); ?>
    </div>
</div>
<div class="span-5">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<div class="span-19 last">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<?php $this->endContent(); ?>