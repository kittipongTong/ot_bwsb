<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
  <div class="row col-md-12">
    <div class="col-md-12 ">
      <br>
      <?php
      /* @var $this TableTravelController */
      /* @var $model TableTravel */
      /* @var $form CActiveForm */
      ?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		
    <?php echo $form->label($model,'tv_id'); ?>
		<?php echo $form->textField($model,'tv_id',array('size'=>60)); ?>
	</div>
  <br>

	<!-- <div class="row">
		<?php echo $form->label($model,'mb_id'); ?>
		<?php echo $form->textField($model,'mb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_date'); ?>
		<?php echo $form->textField($model,'tv_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_withdraw'); ?>
		<?php echo $form->textField($model,'tv_withdraw'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_date_travel'); ?>
		<?php echo $form->textField($model,'tv_date_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_reason'); ?>
		<?php echo $form->textArea($model,'tv_reason',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_evidence'); ?>
		<?php echo $form->textField($model,'tv_evidence',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tv_total'); ?>
		<?php echo $form->textField($model,'tv_total'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('ค้นหาข้อมูล'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>
</div>
</div>
