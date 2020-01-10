<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TablePersonnelController */
/* @var $model TablePersonnel */

$this->breadcrumbs=array(
	'Table Personnels'=>array('index'),
	$model->psn_id=>array('view','id'=>$model->psn_id),
	'Update',
);

// $this->menu=array(
// 	array('label'=>'List TablePersonnel', 'url'=>array('index')),
// 	array('label'=>'Create TablePersonnel', 'url'=>array('create')),
// 	array('label'=>'View TablePersonnel', 'url'=>array('view', 'id'=>$model->psn_id)),
// 	array('label'=>'Manage TablePersonnel', 'url'=>array('admin')),
// );
?>

<h1>Update TablePersonnel <?php echo $model->psn_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
