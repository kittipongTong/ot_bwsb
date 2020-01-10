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
  </div>
  </div>
</div>

		<div class="sidebar sidebar-style-1" data-background-color="dark">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-dark">



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
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   Table_member ( สมาชิก )
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableMember/admin">view</a>
					    <a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableMember/create">create</a>
					  </div>
					</div>

					<div class="mx-3 mt-4">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Table_tavel (ค่าเดินทาง)
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableTravel/admin">view</a>
						<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableTravel/create">create</a>
					</div>
				</div>

						<div class="mx-3 mt-4">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							MASTER_POSITION

						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=masterPosition/admin">view</a>
							<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=masterPosition/create">create</a>
						</div>
					</div>

					<div class="mx-3 mt-4">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  MASTER_DATE
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=masterDate/admin">view</a>
						<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=masterDate/create">create</a>
					</div>
				</div>

				<div class="mx-3 mt-4">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					tablePersonnel
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tablePersonnel/admin">view</a>
					<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tablePersonnel/create">create</a>
				</div>
			</div>

			<div class="mx-3 mt-4">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				tableOt
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableOt/admin">view</a>
				<a class="dropdown-item" href="http://localhost/ot_bwsb/index.php?r=tableOt/create">create</a>
			</div>
		</div>
				<!--
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=TableMember" class="btn btn-success btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>Table_member ( สมาชิก )	</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=tableTravel" class="btn btn-warning btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>Table_tavel (ค่าเดินทาง)</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=MasterPosition/create" class="btn btn-success btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>MASTER_POSITION</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=masterDate/create" class="btn btn-warning btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>MASTER_DATE</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=TableOt" class="btn btn-success btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>Table_OT ( ค่า OT )	</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="http://localhost/ot_bwsb/index.php?r=TablePersonnel" class="btn btn-warning btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>Table_personnel ( พนักงาน )</a>
						</li> -->

						<div id="wrapper">
			<!--BEGIN SIDEBAR MENU-->
			<!-- <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
					<div class="sidebar-collapse menu-scroll"> -->

							<?php
							$this->widget('zii.widgets.CMenu', array(
									'encodeLabel' => false,
									'htmlOptions' => array(
											'class'=>'nav',
											'id'=>'side-menu',
									),
									'items'=>array(
											//user icon and name


											//สมาชิก
											array(
													'label' => '<i class="fa fa-file-text-o">
							<div class="icon-bg bg-pink"></div>
							<hr><br><br><br>
					</i><span class="menu-title">สมาชิก</span><span class="fa arrow"></span>',
													'url' => '#',
													'submenuOptions' => array(
															'class' => 'nav nav-second-level',
													),
													'items' => array(
															//view
															array(
																	'label' => '<i class="fa fa-eye"></i><span
											class="submenu-title">view</span>',
																	'url' => array('/tableMember/admin'),
															),
															//create
															array(
																	'label' => '<i class="fa fa-edit"></i><span
											class="submenu-title">create</span>',
																	'url' => array('/tableMember/create'),
															),
													)
											),

											//ค่าเดินทาง
											array(
													'label' => '<i class="fa fa-file-text-o">
							<div class="icon-bg bg-pink"></div>
							<hr><br><br><br>
					</i><span class="menu-title">ค่าเดินทาง</span><span class="fa arrow"></span>',
													'url' => '#',
													'submenuOptions' => array(
															'class' => 'nav nav-second-level',
													),
													'items' => array(
															//view
															array(
																	'label' => '<i class="fa fa-eye"></i><span
											class="submenu-title">view</span>',
																	'url' => array('/tableTravel/admin'),
															),
															//create
															array(
																	'label' => '<i class="fa fa-edit"></i><span
											class="submenu-title">create</span>',
																	'url' => array('/tableTravel/create'),
															),
													)
											),

											//masterPosition
											array(
													'label' => '<i class="fa fa-file-text-o">
							<div class="icon-bg bg-pink"></div>
							<hr><br><br><br>
					</i><span class="menu-title">masterPosition</span><span class="fa arrow"></span>',
													'url' => '#',
													'submenuOptions' => array(
															'class' => 'nav nav-second-level',
													),
													'items' => array(
															//view
															array(
																	'label' => '<i class="fa fa-eye"></i><span
											class="submenu-title">view</span>',
																	'url' => array('/masterPosition/admin'),
															),
															//create
															array(
																	'label' => '<i class="fa fa-edit"></i><span
											class="submenu-title">create</span>',
																	'url' => array('/masterPosition/create'),
															),
													)
											),

											//masterDate
											array(
													'label' => '<i class="fa fa-file-text-o">
							<div class="center p1 bg-olive"></div>
							<hr><br><br><br>
					</i><span class="menu-title">masterDate</span><span class="fa arrow"></span>',
													'url' => '#',
													'submenuOptions' => array(
															'class' => 'nav nav-second-level',
													),
													'items' => array(
															//view
															array(
																	'label' => '<i class="fa fa-eye"></i><span
											class="submenu-title">view</span>',
																	'url' => array('/masterDate/admin'),
															),
															//create
															array(
																	'label' => '<i class="fa fa-edit"></i><span
											class="submenu-title">create</span>',
																	'url' => array('/masterDate/create'),
															),
													)
											),

									),
							));
							?>
					</div>
			</nav>
			<!--END SIDEBAR MENU-->
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
