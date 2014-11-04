<?php
// Check if session is not registered, redirect back to main page.
session_start();
if($_SESSION['myusername'] == null){
    header("location:index.html");
}
if($_SESSION['projects'] != null){
	$num_rows=$_SESSION['num_rows'];
    $projects=$_SESSION['projects'];
}
?>
<html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		Training App
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	
	<script src="assets/javascripts/1.3.0/adminflare-demo-init.min.js" type="text/javascript"></script>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		// Include Bootstrap stylesheet 
		document.write('<link href="assets/css/1.3.0/default/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" id="bootstrap-css">');
		// Include AdminFlare stylesheet 
		document.write('<link href="assets/css/1.3.0/default/adminflare.min.css" media="all" rel="stylesheet" type="text/css" id="adminflare-css">');
		// Include AdminFlare page stylesheet 
		document.write('<link href="assets/css/1.3.0/pages.min.css" media="all" rel="stylesheet" type="text/css">');
	</script>
	
	<script src="assets/javascripts/1.3.0/modernizr-jquery.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/1.3.0/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/1.3.0/adminflare.min.js" type="text/javascript"></script>

	<style type="text/css">

		/* ======================================================================= */
		/* Supported Browsers */
		#social-media header { color: #666; display: block; font-size: 14px; }
			
		#social-media header strong { font-size: 18px; }

		#social-media .span10 { margin-bottom: -15px; text-align: center; }

		#social-media .span10 div {
			margin-bottom: 15px;
			margin-right: 15px;
			display: inline-block;
			width: 120px;
		}

		#social-media .span10 div:last-child { margin-right: 0; }

		#social-media .span10 img { height: 40px; width: 40px; }

		#social-media .span10 span { line-height: 40px; font-size: 14px; font-weight: 600; }
		
		@media (max-width: 767px) {
			#social-media header { text-align: center; margin-bottom: 20px; }
		}

		/* ======================================================================= */
		/* Status panel */
		.status-example { line-height: 0; position:relative; top: 22px }
	</style>
	<script type="text/javascript">
      jQuery(window).load(function() {
        var num_rows = <?php echo $num_rows ?>;
        var projects = <?php echo $projects ?>;
        for ( var i = 0; i < num_rows; i++ ) {
          $('#projects').append('<div class="span2 project-box"><div class="project-image"><img src="'+ projects[i]['projectImagePath'] +'" class="img-circle"></div><div class="caption" style="text-align: center;">'+ projects[i]['projectName'] +'</div></div>');
        }
      });
    </script>
</head>
<body class="fluid-layout">
<script type="text/javascript">demoSetBodyLayout();</script>
	<!-- Main navigation bar
		================================================== -->
	<header class="navbar navbar-fixed-top" id="main-navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="logo" href="#"><img alt="Af_logo" src="assets/images/af-logo.png"></a>
				
				<a class="btn nav-button collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-reorder"></span>
				</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active" style="display:none;"><a href="#">Home</a></li>
						<li class="dropdown" style="display:none;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class=" icon-caret-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
					</ul>
					<form class="navbar-search pull-left" action="" _lpchecked="1" style="display:none;">
						<input type="text" class="search-query" placeholder="Search" style="width: 120px">
					</form>
					<ul class="nav pull-right">
						<li>
							<ul class="messages" style="display:none;">
								<li>
									<a href="#"><i class="icon-warning-sign"></i> 2<span class="		responsive-text"> alerts</span></a>
								</li>
								<li>
									<a href="#"><i class="icon-envelope"></i> 25<span class="		responsive-text"> new messages</span></a>
								</li>
							</ul>
						</li>
						<li class="separator"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle usermenu" data-toggle="dropdown">
								<img alt="Avatar" src="assets/images/avatar.png">
								<span>&nbsp;&nbsp;Admin</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Profile</a>
								</li>
								<li>
									<a href="#">Settings</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.html">Sign In</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- / Main navigation bar -->
	
	<!-- Left navigation panel
		================================================== -->
	<nav id="left-panel">
		<div id="left-panel-content">
			<ul>
				<li class="active">
					<a href="dashboard.php"><span class="icon-flag"></span>Projects</a>
				</li>
				<li>
					<a href="layout.html"><span class="icon-folder-open"></span>Documentation</a>
				</li>
			</ul>
		</div>
		<div class="icon-caret-down"></div>
		<div class="icon-caret-up"></div>
	</nav>
	<!-- / Left navigation panel -->
	
	<!-- Page content
		================================================== -->
	<section class="container">

		<!-- Projects
			================================================== -->
		<section class="row-fluid">
			<div class="well">
				<div class="box no-border non-collapsible" id="projects">
					<!-- Projects injected from function (above) -->
				</div>
			</div>
		</section>
		<!-- / Projects -->

		<!-- ================================================== -->
		<section class="row-fluid">
		
			<!-- Modules
				================================================== -->
			<div>
				<h3 class="box-header">
					<i class="icon-book"></i>
					Modules
				</h3>
				<div class="box non-collapsible">
					
						<div class="accordion" id="accordion2">

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
										Module #1
									</a>
								</div>
								<div id="collapseOne" class="accordion-body collapse in">
									<div class="accordion-inner">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
										Module #2
									</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
										Module #3
									</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
			<!-- / Modules -->
		</section>

		<!-- Social Connections
			================================================== -->
		<section class="row-fluid" id="social-media" style="display:none;">
			<div class="box">
				<header class="span2">
					Social<br><strong>MEDIA</strong>
				</header>
				<div class="span10">
					<div>
						<img src="assets/images/browsers/chrome.png" alt="Facebook">
						<span>Facebook</span>
					</div>
					<div>
						<img src="assets/images/browsers/firefox.png" alt="Twitter">
						<span>Twitter</span>
					</div>
				</div>
			</div>
		</section>
		<!-- / Social Connections -->
		
		<!-- Page footer
			================================================== -->
		<footer id="main-footer">
			Copyright © 2014 <a href="http://www.growthaccelerationpartners.com/">Growth Acceleration Partners</a>, all rights reserved.
			<a href="#" class="pull-right" id="on-top-link">
				On Top&nbsp;<i class=" icon-chevron-up"></i>
			</a>
		</footer>
		<!-- / Page footer -->
	</section>
</body>
</html>