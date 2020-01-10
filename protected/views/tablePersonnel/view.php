<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TablePersonnelController */
/* @var $model TablePersonnel */

$this->breadcrumbs=array(
	'Table Personnels'=>array('index'),
	$model->psn_id,
);

// $this->menu=array(
// 	array('label'=>'List TablePersonnel', 'url'=>array('index')),
// 	array('label'=>'Create TablePersonnel', 'url'=>array('create')),
// 	array('label'=>'Update TablePersonnel', 'url'=>array('update', 'id'=>$model->psn_id)),
// 	array('label'=>'Delete TablePersonnel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->psn_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TablePersonnel', 'url'=>array('admin')),
// );
?>

<h1>View TablePersonnel #<?php echo $model->psn_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'psn_id',
		'psn_per_id',
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
