<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TablePersonnelController */
/* @var $model TablePersonnel */

$this->breadcrumbs=array(
	'Table Personnels'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List TablePersonnel', 'url'=>array('index')),
// 	array('label'=>'Manage TablePersonnel', 'url'=>array('admin')),
// );
?>

<h1>Create TablePersonnel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
