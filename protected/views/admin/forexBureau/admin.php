<?php
/* @var $this ForexBureauController */
/* @var $model ForexBureau */

$this->breadcrumbs=array(
	'Forex Bureaus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ForexBureau', 'url'=>array('index')),
	array('label'=>'Create ForexBureau', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#forex-bureau-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Forex Bureaus</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'forex-bureau-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'forex_bureau_name',
		'password',
		'postal_address',
		'building',
		'physical_address',
		/*
		'telephone',
		'fax',
		'email',
		'logo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
