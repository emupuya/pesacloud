<?php
/* @var $this ForexRateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forex Rates',
);

$this->menu=array(
	array('label'=>'Create ForexRate', 'url'=>array('create')),
	array('label'=>'Manage ForexRate', 'url'=>array('admin')),
);
?>

<h1>Forex Rates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
