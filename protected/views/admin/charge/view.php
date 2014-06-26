<?php
/* @var $this ChargeController */
/* @var $model Charge */

$this->breadcrumbs=array(
	'Charges'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Charge', 'url'=>array('index')),
	array('label'=>'Create Charge', 'url'=>array('create')),
	array('label'=>'Update Charge', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Charge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Charge', 'url'=>array('admin')),
);
?>

<h1>View Charge #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'name',
		'bank',
		'amount',
	),
)); ?>
