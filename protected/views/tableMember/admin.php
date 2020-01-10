<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
  <div class="col-md-12 ">
    <br><br>
<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List TableMember', 'url'=>array('index')),
// 	array('label'=>'Create TableMember', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#table-member-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>จัดการสมาชิกตาราง</h1>

<?php echo CHtml::link('ค้นหาข้อมูล','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
  $gridWidget=$this->widget('booster.widgets.TbGridView', array(
	'id'=>'table-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'mb_id',
		'psn_id',
		'mb_title',
		'mb_name',
		'mb_idcard',
		'mb_mobile',
    //
		// 'mb_email',
		// 'pst_id',
		 // 'created_date'=> 'yy-mm-dd',
		// 'created_by',
		// 'update_date',
		// 'update_by',
		// 'active',

		array(
				'class'=>'booster.widgets.TbButtonColumn',
		),
	),
));
$this->renderExportGridButton($gridWidget,'ส่งออก',
    array('class'=>'bin bin-info pull-right'));
?>

</div>
</div>
</div>
