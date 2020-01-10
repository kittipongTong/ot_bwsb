<div class="row-12">
	<div class="col-md-12">
			<div class="form-group">
<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	$model->mb_id,
);

// $this->menu=array(
// 	array('label'=>'List TableMember', 'url'=>array('index')),
// 	array('label'=>'Create TableMember', 'url'=>array('create')),
// 	array('label'=>'Update TableMember', 'url'=>array('update', 'id'=>$model->mb_id)),
// 	array('label'=>'Delete TableMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mb_id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TableMember', 'url'=>array('admin')),
// );
?>

<h1>แสดงข้อมูลสมาชิก รหัสหมายเลขที่ : <?php echo $model->mb_id; ?></h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mb_id',
		'psn_id',
		'mb_title',
		'mb_name',
		'mb_idcard',
		'mb_mobile',
		'mb_email',
		'pst_id',
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
