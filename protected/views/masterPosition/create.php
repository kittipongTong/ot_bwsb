<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="row-12">
	<div class="col-md-12">
			<div class="form-group">
<?php
/* @var $this MasterPositionController */
/* @var $model MasterPosition */

$this->breadcrumbs=array(
	'Master Positions'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List MasterPosition', 'url'=>array('index')),
// 	array('label'=>'Manage MasterPosition', 'url'=>array('admin')),
// );
?>
<br>
<h1>Create MasterPosition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
