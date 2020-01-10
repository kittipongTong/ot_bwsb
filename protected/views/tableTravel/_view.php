<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
  <div class="row col-md-12">
    <div class="col-md-12 ">
      <br><br>
<?php
/* @var $this TableTravelController */
/* @var $data TableTravel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tv_id), array('view', 'id'=>$data->tv_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_id')); ?>:</b>
	<?php echo CHtml::encode($data->mb_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_date')); ?>:</b>
	<?php echo CHtml::encode($data->tv_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_withdraw')); ?>:</b>
	<?php echo CHtml::encode($data->tv_withdraw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_date_travel')); ?>:</b>
	<?php echo CHtml::encode($data->tv_date_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_reason')); ?>:</b>
	<?php echo CHtml::encode($data->tv_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_evidence')); ?>:</b>
	<?php echo CHtml::encode($data->tv_evidence); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tv_total')); ?>:</b>
	<?php echo CHtml::encode($data->tv_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psn_id')); ?>:</b>
	<?php echo CHtml::encode($data->psn_id); ?>
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

	*/ ?>
</div>
</div>
</div>

</div>
