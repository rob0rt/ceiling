<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <title>Ceiling</title>   
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/dashboard.js"></script>	
  </head>
  
<body onload="setHref()">
    <!-- Header -->
	<div class="header navbar affix"> <div class="navbar-inner"> <div class="container-fluid">
		<a href="./" class="brand">Ceiling</a>		
	</div> </div> </div>
	
	<section class="section container-fluid">
		<div class="row-fluid">
			<div class="span1">
				<div id="side-left">
					<div class="nav-collapse sidebar-nav">
						<ul class="sidebar">
							<li class="active"><a href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>	
							<li><a href="files.php"><i class="icon-upload-alt"></i><span class="hidden-tablet"> File Manager</span></a></li>
							<li><a href="/" id="vnc"><i class="icon-desktop"></i><span class="hidden-tablet" > VNC Access</span></a></li>
							<li><a href="music.php"><i class="icon-music"></i><span class="hidden-tablet"> Music</span></a></li>
							<li><a href="trailercontrol.php"><i class="icon-off"></i><span class="hidden-tablet"> Trailer Control</span></a></li>
						</ul>
					</div>
				</div>
			</div>	
			<div class="span9" style="margin-left:55px;">
				<div class="content">
					<div class="row-fluid">
						<div class="frame">
							<div class="span6">
							<h1>Hello.</h1>
							<h1>Welcome to Ceiling.</h1>
							<div style="height:50px;"></div>
							<h2>What's new?</h2>
							<p>Trailer Control implemented</p> 
							<p>Music Control implemented using Spotify</p>
							<p>Sessions have been added. Login is now required for File Manager and Music Control</p>
							<p>Volume added in Music Control</p>
							<p>Dedicated download button for File Manager</p>
							<p>Directory downloads for File Manager</p>
							
							<div style="height:25px;"></div>
							<h2>What's coming?</h2>
							<p>Local music file support in Music Control</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  </body>
</html>
