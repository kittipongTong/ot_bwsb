<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<?php
/* @var $this MasterPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master Positions',
);

$this->menu=array(
	array('label'=>'Create MasterPosition', 'url'=>array('create')),
	array('label'=>'Manage MasterPosition', 'url'=>array('admin')),
);
?>

<h1>Master Positions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
