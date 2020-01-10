<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
	<br>
<?php
/* @var $this TablePersonnelController */
/* @var $model TablePersonnel */

$this->breadcrumbs=array(
	'Table Personnels'=>array('index'),
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List TablePersonnel', 'url'=>array('index')),
// 	array('label'=>'Create TablePersonnel', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#table-personnel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Table Personnels</h1>

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
	'id'=>'table-personnel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'psn_id',
		'psn_per_id',
		'created_date',
		'created_by',
		'update_date',
		'update_by',
		/*
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
