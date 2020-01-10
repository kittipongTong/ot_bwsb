<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
  <div class="row col-md-12">
    <div class="col-md-12 ">
      <br><br>
<?php
/* @var $this TableTravelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Travels',
);

// $this->menu=array(
// 	array('label'=>'Create TableTravel', 'url'=>array('create')),
// 	array('label'=>'Manage TableTravel', 'url'=>array('admin')),
// );
?>

<h1>Table Travels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
</div>
</div>
