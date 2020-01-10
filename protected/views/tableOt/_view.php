<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $data TableOt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ot_id), array('view', 'id'=>$data->ot_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_id')); ?>:</b>
	<?php echo CHtml::encode($data->mb_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_date')); ?>:</b>
	<?php echo CHtml::encode($data->ot_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_withdraw')); ?>:</b>
	<?php echo CHtml::encode($data->ot_withdraw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_id')); ?>:</b>
	<?php echo CHtml::encode($data->dm_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_evidence')); ?>:</b>
	<?php echo CHtml::encode($data->ot_evidence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_pjmoney')); ?>:</b>
	<?php echo CHtml::encode($data->ot_pjmoney); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ot_total')); ?>:</b>
	<?php echo CHtml::encode($data->ot_total); ?>
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
