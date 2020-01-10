<!DOCTYPE html>
<html 	>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl.'/assets/img/icon.ico'?>">
	<?php //include Yii::app()->basePath . '/../themes/demo/include/inc-header.php'; ?>
	<?php include Yii::app()->basePath . '/../themes/demo/include/inc.php'; ?>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

</head>
<body>

<div class="wrapper">
<div class="main-header">
	<div class="logo-header" data-background-color="dark">
  <!-- <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button> -->
  <div class="nav-toggle" >
    <button class="btn btn-toggle toggle-sidebar">
      <i class="icon-menu"></i>
    </button>
		<!-- <h1>OT BANGKOK WEB SOLUTIONS</h1> -->
  </div>
  </div>
</div>

		<div class="sidebar sidebar-style-1" data-background-color="dark">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-dark">

<!--
						<div class="lqd-column col-md-3 col-sm-4 col-xs-6 text-center  d-flex flex-wrap align-items-center justify-content-center">
                    <figure class="pt-70 con-tooltip top-tooltip">
                       <a href="https://www.dga.or.th" target="_black"> <img class="w-100 tooltip tooltipstered" src="/Trial/bpanel/images/imgCus/20191213152158.png"></a>
                    </figure>
            </div> -->
						<!-- <li class="mx-3" >
							<a href="index.php?r=site/index" class="btn btn-primary btn-md"><span class="btn-label mx-3"> <i class="fa fa-user"></i></span>ข้อมูลส่วนตัว</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="index.php?r=site/index" class="btn btn-warning btn-md"><span class="btn-label mx-3"> <i class="fa fa-hourglass-half"></i></span>ค่า OT</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="index.php?r=site/index" class="btn btn-success btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>ค่าเดินทาง</a>
						</li> -->
						<div class="mx-3 mt-4">
					  <button class="btn btn-outline-warning dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   Table_member ( สมาชิก )
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="/ot_bwsb/index.php?r=tableMember/admin">แสดงข้อมูลสมาชิก</a>	<br>
					    <a class="dropdown-item" href="/ot_bwsb/index.php?r=tableMember/create">เพิ่มข้อมูล</a>
					  </div>
					</div>
					<br><br>
					<div class="mx-3 mt-4">
					<button class="btn btn-outline-info dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Table_tavel (ค่าเดินทาง)
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="/ot_bwsb/index.php?r=tableTravel/admin">แสดงข้อมูลค่าเดินทาง</a><br>
						<a class="dropdown-item" href="/ot_bwsb/index.php?r=tableTravel/create">เพิ่มข้อมูล</a>
					</div>
				</div>
					<br><br>
						<div class="mx-3 mt-4">
						<button class="btn btn-outline-warning dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							MASTER_POSITION
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="/ot_bwsb/index.php?r=masterPosition/admin">แสดงข้อมูล MASTER_POSITION</a><br>
							<a class="dropdown-item" href="/ot_bwsb/index.php?r=masterPosition/create">เพิ่มข้อมูล</a>
						</div>
					</div>
					<br><br>
					<div class="mx-3 mt-4">
					<button class="btn btn-outline-info dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  MASTER_DATE
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="/ot_bwsb/index.php?r=masterDate/admin">แสดงข้อมูล  MASTER_DATE</a><br>
						<a class="dropdown-item" href="/ot_bwsb/index.php?r=masterDate/create">เพิ่มข้อมูล</a>
					</div>
				</div>
				<br><br>
				<div class="mx-3 mt-4">
				<button class="btn btn-outline-warning dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Table_personnel ( พนักงาน )
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="/ot_bwsb/index.php?r=tablePersonnel/admin">แสดงข้อมูลพนักงาน</a><br>
					<a class="dropdown-item" href="/ot_bwsb/index.php?r=tablePersonnel/create">เพิ่มข้อมูล</a>
				</div>
			</div>
			<br><br>
			<div class="mx-3 mt-4">
			<button class="btn btn-outline-info dropdown-toggle col-md-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Table_OT ( ค่า OT )
				<a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="/ot_bwsb/index.php?r=tableOt/admin">แสดงข้อมูล ค่า OT</a><br>
				<a class="dropdown-item" href="/ot_bwsb/index.php?r=tableOt/create">เพิ่มข้อมูล</a>
			</div>
		</div>


					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
            <?php echo $content; ?>
			</div>
		</div>
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
</body>
</html>
