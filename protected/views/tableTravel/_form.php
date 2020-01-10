<?php include Yii::app()->basePath . '/../themes/demo/include/inc-cssbackground.php'; ?>
<div class="container-8">
  <div class="row col-md-12">
    <div class="col-md-12 ">
      <br><br>
      <?php
      /* @var $this TableTravelController */
      /* @var $model TableTravel */
      /* @var $form CActiveForm */
      ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'table-travel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_id'); ?></div>
		<?php echo $form->textField($model,'tv_id',array('size'=>60)); ?>
		<?php echo $form->error($model,'tv_id'); ?>
	</div>
		<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'mb_id'); ?></div>
		<?php echo $form->textField($model,'mb_id',array('size'=>60)); ?>
		<?php echo $form->error($model,'mb_id'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_date'); ?></div>
		<?php echo $form->textField($model,'tv_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'tv_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_withdraw'); ?></div>
		<?php echo $form->textField($model,'tv_withdraw',array('size'=>60)); ?>
		<?php echo $form->error($model,'tv_withdraw'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_date_travel'); ?></div>
		<?php echo $form->textField($model,'tv_date_travel',array('size'=>60)); ?>
		<?php echo $form->error($model,'tv_date_travel'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_reason'); ?></div>
		<?php echo $form->textArea($model,'tv_reason',array('size'=>60, 'cols'=>61)); ?>
		<?php echo $form->error($model,'tv_reason'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;">	<?php echo $form->labelEx($model,'tv_evidence'); ?></div>
		<?php echo $form->textField($model,'tv_evidence',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tv_evidence'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'tv_total'); ?></div>
		<?php echo $form->textField($model,'tv_total',array('size'=>60)); ?>
		<?php echo $form->error($model,'tv_total'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'psn_id'); ?></div>
		<?php echo $form->textField($model,'psn_id',array('size'=>60)); ?>
		<?php echo $form->error($model,'psn_id'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'created_date'); ?></div>
		<?php echo $form->textField($model,'created_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'created_by'); ?></div>
		<?php echo $form->textField($model,'created_by',array('size'=>60)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;">	<?php echo $form->labelEx($model,'update_date'); ?></div>
		<?php echo $form->textField($model,'update_date',array('size'=>60)); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'update_by'); ?></div>
		<?php echo $form->textField($model,'update_by',array('size'=>60)); ?>
		<?php echo $form->error($model,'update_by'); ?>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $form->labelEx($model,'active'); ?></div>
		<?php echo $form->textField($model,'active',array('size'=>60,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>
<br>
	<div  class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'บันทึกข้อมูล' : 'Save'); ?>
	</div>
  <br>
<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->
</div><!-- form -->
</div><!-- form -->
