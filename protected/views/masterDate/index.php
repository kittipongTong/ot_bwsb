<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 ">
<br><br>
<?php
/* @var $this MasterDateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master Dates',
);

// $this->menu=array(
// 	array('label'=>'Create MasterDate', 'url'=>array('create')),
// 	array('label'=>'Manage MasterDate', 'url'=>array('admin')),
// );
?>

<h1>Master Dates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
</div>
</div>
