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

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dm_id'); ?>
		<?php echo $form->textField($model,'dm_id'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'dm_date'); ?>
		<?php echo $form->textField($model,'dm_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm_time'); ?>
		<?php echo $form->textField($model,'dm_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
	</div> -->
	<br>
	<div class="row-7 buttons">
		<?php echo CHtml::submitButton('ค้นหาข้อมูล'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>
</div>
</div>
