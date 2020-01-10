<div class="container-8">
<div class="row col-md-12">
  <div class="col-md-12 ">
    <br><br>
<?php
/* @var $this MasterPositionController */
/* @var $model MasterPosition */

$this->breadcrumbs=array(
	'Master Positions'=>array('index'),
	$model->pst_id,
);

// $this->menu=array(
// 	array('label'=>'List MasterPosition', 'url'=>array('index')),
// 	array('label'=>'Create MasterPosition', 'url'=>array('create')),
// 	array('label'=>'Update MasterPosition', 'url'=>array('update', 'id'=>$model->pst_id)),
// 	array('label'=>'Delete MasterPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pst_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage MasterPosition', 'url'=>array('admin')),
// );
?>
<h1>แสดงข้อมูล<?php echo $model->pst_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pst_id',
		'pst_name',
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
