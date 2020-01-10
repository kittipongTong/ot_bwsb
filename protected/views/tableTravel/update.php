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
      	$model->tv_id=>array('view','id'=>$model->tv_id),
      	'Update',
      );

      // $this->menu=array(
      // 	array('label'=>'List TableTravel', 'url'=>array('index')),
      // 	array('label'=>'Create TableTravel', 'url'=>array('create')),
      // 	array('label'=>'View TableTravel', 'url'=>array('view', 'id'=>$model->tv_id)),
      // 	array('label'=>'Manage TableTravel', 'url'=>array('admin')),
      // );
      ?>

      <h1>แก้ไขข้อมูลค่าเดินทาง หมายเลขที่ <?php echo $model->tv_id; ?></h1>
      <hr>

      <?php $this->renderPartial('_form', array('model'=>$model)); ?>
      </div>
      </div>
      </div>
