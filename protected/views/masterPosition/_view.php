<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
  <div class="col-md-12 ">
    <br><br>
<?php
/* @var $this MasterPositionController */
/* @var $data MasterPosition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pst_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pst_id), array('view', 'id'=>$data->pst_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pst_name')); ?>:</b>
	<?php echo CHtml::encode($data->pst_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div></div></div></div>
