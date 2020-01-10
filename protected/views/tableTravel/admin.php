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
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List TableTravel', 'url'=>array('index')),
// 	array('label'=>'Create TableTravel', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#table-travel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>จัดการข้อมูล ค่าเดินทาง</h1>


<?php echo CHtml::link('ค้นหาข้อมูล','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
  $this->widget('booster.widgets.TbGridView', array(
  // $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'table-travel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tv_id',
		'mb_id',
		'tv_date',
		'tv_withdraw',
		'tv_date_travel',
		'tv_reason',

		// 'tv_evidence',
		// 'tv_total',
		// 'psn_id',
		// 'created_date',
		// 'created_by',
		// 'update_date',
		// 'update_by',
		// 'active',

		array(
      	'class'=>'booster.widgets.TbButtonColumn',
			// 'class'=>'CButtonColumn',
		),
	),
)); ?>

			</div>
		</div>
</div>
