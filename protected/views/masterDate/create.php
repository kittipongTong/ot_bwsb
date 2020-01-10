<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 ">
<br><br>
<?php
/* @var $this MasterDateController */
/* @var $model MasterDate */

$this->breadcrumbs=array(
	'Master Dates'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List MasterDate', 'url'=>array('index')),
// 	array('label'=>'Manage MasterDate', 'url'=>array('admin')),
// );
?>

<h1>Create MasterDate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
