<?php
/* @var $this ForexBureauController */
/* @var $model ForexBureau */

$this->breadcrumbs=array(
	'Forex Bureaus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ForexBureau', 'url'=>array('index')),
	array('label'=>'Create ForexBureau', 'url'=>array('create')),
	array('label'=>'Update ForexBureau', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ForexBureau', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ForexBureau', 'url'=>array('admin')),
);
?>

<h1>View ForexBureau #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'forex_bureau_name',
		'password',
		'postal_address',
		'building',
		'physical_address',
		'telephone',
		'fax',
		'email',
		'logo',
	),
)); ?>
