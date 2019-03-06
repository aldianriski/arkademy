<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?=$title?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ready.min.css">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					<b>SISDUK</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					
						

						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span ><?php echo ucfirst($this->session->userdata('username')); ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo base_url(); ?>assets/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4><?php echo ucfirst($this->session->userdata('username')); ?></h4>
											</div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
								
									<a class="dropdown-item" href="<?php echo base_url() ?>auth/logout"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="<?php echo base_url(); ?>assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo ucfirst($this->session->userdata('username')); ?>
									<span class="user-level"><?php echo ucfirst($this->session->userdata('level')); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav mt-0">
					<li class="nav-item mt-2 <?php if($this->uri->segment(1) == "dashboard"){echo "active"; } ?>">
							<a href="<?php echo base_url(); ?>dashboard">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
							<li class="nav-item <?php if($this->uri->segment(1) == "data_daerah"){echo "active"; } ?>">
							<a href="<?php echo base_url(); ?>data_daerah">
								<i class="la la-map-marker"></i>
								<p>Data Daerah</p>
							</a>
						</li>
						<li class="nav-item <?php if($this->uri->segment(1) == "data_penduduk"){echo "active"; } ?>">
							<a href="<?php echo base_url(); ?>data_penduduk">
								<i class="la la-users"></i>
								<p>Data Penduduk</p>
							</a>
						</li>

				
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="cards">
							<div class="cards-top">
						<h4 class="page-titles">Dashboard</h4>
						<p class="page-categorys">
							<?php echo ucfirst($this->session->userdata('username')); ?> > 
							<?php echo ucfirst($this->uri->segment(1)); ?></p>
						</div>
					</div>
				<div class="content">
					<div class="container-fluid">
								<?php echo $contents; ?>
						</div></div></div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="http://www.themekita.com">
										ThemeKita
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Help
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://themewagon.com/license/#free-item">
										Licenses
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2019, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">Aldian</a>
						</div>				
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- Modal -->
</body>



<script src="<?php echo base_url(); ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ready.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatable/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>assets/swal/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form_validation/form_data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/myScript.js"></script>


<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>