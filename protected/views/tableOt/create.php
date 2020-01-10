<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $model TableOt */

$this->breadcrumbs=array(
	'Table Ots'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List TableOt', 'url'=>array('index')),
// 	array('label'=>'Manage TableOt', 'url'=>array('admin')),
// );
?>

<h1>เพิ่มข้อมูลค่า OT</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
