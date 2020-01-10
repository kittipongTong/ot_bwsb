<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TablePersonnelController */
/* @var $data TablePersonnel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('psn_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->psn_id), array('view', 'id'=>$data->psn_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psn_per_id')); ?>:</b>
	<?php echo CHtml::encode($data->psn_per_id); ?>
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

</div>
</div>
</div>
</div>
