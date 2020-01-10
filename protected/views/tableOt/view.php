<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $model TableOt */

$this->breadcrumbs=array(
	'Table Ots'=>array('index'),
	$model->ot_id,
);

// $this->menu=array(
// 	array('label'=>'List TableOt', 'url'=>array('index')),
// 	array('label'=>'Create TableOt', 'url'=>array('create')),
// 	array('label'=>'Update TableOt', 'url'=>array('update', 'id'=>$model->ot_id)),
// 	array('label'=>'Delete TableOt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ot_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TableOt', 'url'=>array('admin')),
// );
?>

<h1>View TableOt #<?php echo $model->ot_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ot_id',
		'mb_id',
		'ot_date',
		'ot_withdraw',
		'dm_id',
		'ot_evidence',
		'ot_pjmoney',
		'ot_total',
		'psn_id',
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
