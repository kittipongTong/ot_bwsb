<div class="container-8">
<div class="row col-md-12">
  <div class="col-md-12 ">
    <br><br>
<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List TableMember', 'url'=>array('index')),
// 	array('label'=>'Manage TableMember', 'url'=>array('admin')),
// );
?>

<h1>เพิ่มข้อมูลสมาชิก</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>
