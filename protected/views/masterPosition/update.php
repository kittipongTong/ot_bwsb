<?php
/* @var $this MasterPositionController */
/* @var $model MasterPosition */

$this->breadcrumbs=array(
	'Master Positions'=>array('index'),
	$model->pst_id=>array('view','id'=>$model->pst_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPosition', 'url'=>array('index')),
	array('label'=>'Create MasterPosition', 'url'=>array('create')),
	array('label'=>'View MasterPosition', 'url'=>array('view', 'id'=>$model->pst_id)),
	array('label'=>'Manage MasterPosition', 'url'=>array('admin')),
);
?>

<h1>Update MasterPosition <?php echo $model->pst_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>