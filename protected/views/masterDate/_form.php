
<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 ">
<br><br>
<?php
/* @var $this MasterDateController */
/* @var $model MasterDate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-date-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'dm_id'); ?></div>
		<?php echo $form->textField($model,'dm_id',array('size'=>60)); ?>
		<?php echo $form->error($model,'dm_id'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'dm_date'); ?></div>
		<?php echo $form->textField($model,'dm_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'dm_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'dm_time'); ?></div>
		<?php echo $form->textField($model,'dm_time',array('size'=>60)); ?>
		<?php echo $form->error($model,'dm_time'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'created_date'); ?></div>
		<?php echo $form->textField($model,'created_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'created_by'); ?></div>
		<?php echo $form->textField($model,'created_by',array('size'=>60)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;">		<?php echo $form->labelEx($model,'update_date'); ?></div>
		<?php echo $form->textField($model,'update_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'update_by'); ?></div>
		<?php echo $form->textField($model,'update_by',array('size'=>60)); ?>
		<?php echo $form->error($model,'update_by'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavender;"><?php echo $form->labelEx($model,'active'); ?></div>
		<?php echo $form->textField($model,'active',array('size'=>60,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->
</div><!-- form -->
</div><!-- form -->
