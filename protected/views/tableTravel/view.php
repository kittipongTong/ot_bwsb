<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
  <div class="row col-md-12">
    <div class="col-md-12 ">
      <br><br>
<?php
/* @var $this TableTravelController */
/* @var $model TableTravel */

$this->breadcrumbs=array(
	'Table Travels'=>array('index'),
	$model->tv_id,
);
//
// $this->menu=array(
// 	array('label'=>'List TableTravel', 'url'=>array('index')),
// 	array('label'=>'Create TableTravel', 'url'=>array('create')),
// 	array('label'=>'Update TableTravel', 'url'=>array('update', 'id'=>$model->tv_id)),
// 	array('label'=>'Delete TableTravel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tv_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TableTravel', 'url'=>array('admin')),
// );
?>

<h1>แสดงข้อมูลค่าเดินทาง #<?php echo $model->tv_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tv_id',
		'mb_id',
		'tv_date',
		'tv_withdraw',
		'tv_date_travel',
		'tv_reason',
		'tv_evidence',
		'tv_total',
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
