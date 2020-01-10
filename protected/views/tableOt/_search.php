<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
<div class="row col-md-12">
<div class="col-md-12 "><br>
<?php
/* @var $this TableOtController */
/* @var $model TableOt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ot_id'); ?>
		<?php echo $form->textField($model,'ot_id'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'mb_id'); ?>
		<?php echo $form->textField($model,'mb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_date'); ?>
		<?php echo $form->textField($model,'ot_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_withdraw'); ?>
		<?php echo $form->textField($model,'ot_withdraw'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm_id'); ?>
		<?php echo $form->textField($model,'dm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_evidence'); ?>
		<?php echo $form->textArea($model,'ot_evidence',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_pjmoney'); ?>
		<?php echo $form->textField($model,'ot_pjmoney'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_total'); ?>
		<?php echo $form->textField($model,'ot_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'psn_id'); ?>
		<?php echo $form->textField($model,'psn_id'); ?>
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
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	<br>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>
</div>
</div>
