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
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List TableTravel', 'url'=>array('index')),
// 	array('label'=>'Manage TableTravel', 'url'=>array('admin')),
// );
?>

<h1>เพิ่มข้อมูลค่าเดินทาง</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
