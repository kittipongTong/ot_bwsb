<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $model TableOt */

$this->breadcrumbs=array(
	'Table Ots'=>array('index'),
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List TableOt', 'url'=>array('index')),
// 	array('label'=>'Create TableOt', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#table-ot-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Table Ots</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'table-ot-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ot_id',
		'mb_id',
		'ot_date',
		'ot_withdraw',
		'dm_id',
		'ot_evidence',
		/*
		'ot_pjmoney',
		'ot_total',
		'psn_id',
		'created_date',
		'created_by',
		'update_date',
		'update_by',
		'active',
		*/
		array(
				'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
</div>
</div>
