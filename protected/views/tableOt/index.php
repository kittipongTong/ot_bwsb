<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Ots',
);

// $this->menu=array(
// 	array('label'=>'Create TableOt', 'url'=>array('create')),
// 	array('label'=>'Manage TableOt', 'url'=>array('admin')),
// );
?>

<h1>Table Ots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
</div>
</div>
