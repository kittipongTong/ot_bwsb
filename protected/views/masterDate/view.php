<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 ">
<br><br>
<?php
/* @var $this MasterDateController */
/* @var $model MasterDate */

$this->breadcrumbs=array(
	'Master Dates'=>array('index'),
	$model->dm_id,
);

// $this->menu=array(
// 	array('label'=>'List MasterDate', 'url'=>array('index')),
// 	array('label'=>'Create MasterDate', 'url'=>array('create')),
// 	array('label'=>'Update MasterDate', 'url'=>array('update', 'id'=>$model->dm_id)),
// 	array('label'=>'Delete MasterDate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dm_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage MasterDate', 'url'=>array('admin')),
// );
?>

<h1>View MasterDate #<?php echo $model->dm_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dm_id',
		'dm_date',
		'dm_time',
		'created_date',
		'created_by',
		'update_date',
		'update_by',
		'active',
	),
)); ?>
</div>
</div>
</div>
