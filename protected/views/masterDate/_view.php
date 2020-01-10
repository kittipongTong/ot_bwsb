<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 ">
<br><br>
<?php
/* @var $this MasterDateController */
/* @var $data MasterDate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dm_id), array('view', 'id'=>$data->dm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_date')); ?>:</b>
	<?php echo CHtml::encode($data->dm_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_time')); ?>:</b>
	<?php echo CHtml::encode($data->dm_time); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	*/ ?>

</div>
</div>
</div>
</div>
