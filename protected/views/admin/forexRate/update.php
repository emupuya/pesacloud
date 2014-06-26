<?php
/* @var $this ForexRateController */
/* @var $model ForexRate */

$this->breadcrumbs=array(
	'Forex Rates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ForexRate', 'url'=>array('index')),
	array('label'=>'Create ForexRate', 'url'=>array('create')),
	array('label'=>'View ForexRate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ForexRate', 'url'=>array('admin')),
);
?>

<h1>Update ForexRate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>