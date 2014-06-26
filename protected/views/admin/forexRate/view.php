<?php
/* @var $this ForexRateController */
/* @var $model ForexRate */

$this->breadcrumbs=array(
	'Forex Rates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ForexRate', 'url'=>array('index')),
	array('label'=>'Create ForexRate', 'url'=>array('create')),
	array('label'=>'Update ForexRate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ForexRate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ForexRate', 'url'=>array('admin')),
);
?>

<h1>View ForexRate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'currency',
		'category',
		'forex_beaural',
		'rate',
	),
)); ?>
