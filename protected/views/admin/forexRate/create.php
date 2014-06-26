<?php
/* @var $this ForexRateController */
/* @var $model ForexRate */

$this->breadcrumbs=array(
	'Forex Rates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ForexRate', 'url'=>array('index')),
	array('label'=>'Manage ForexRate', 'url'=>array('admin')),
);
?>

<h1>Create ForexRate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>