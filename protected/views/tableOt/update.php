<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $model TableOt */

$this->breadcrumbs=array(
	'Table Ots'=>array('index'),
	$model->ot_id=>array('view','id'=>$model->ot_id),
	'Update',
);

// $this->menu=array(
// 	array('label'=>'List TableOt', 'url'=>array('index')),
// 	array('label'=>'Create TableOt', 'url'=>array('create')),
// 	array('label'=>'View TableOt', 'url'=>array('view', 'id'=>$model->ot_id)),
// 	array('label'=>'Manage TableOt', 'url'=>array('admin')),
// );
?>

<h1>Update TableOt <?php echo $model->ot_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
