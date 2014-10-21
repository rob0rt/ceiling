<?php

include 'lib/gatekeeper.php';
include 'lib/configs.php';

class EncodeExplorer
{
	var $lang;
	
	//
	// Determine sorting, calculate space.
	// 
	function init()
	{	
		
		global $_TRANSLATIONS;
		if(isset($_GET['lang']) && isset($_TRANSLATIONS[$_GET['lang']]))
			$this->lang = $_GET['lang'];
		else
			$this->lang = EncodeExplorer::getConfig("lang");
		
	}

	function makeLink($switchVersion, $logout, $sort_by, $sort_as, $delete, $dir)
	{
		$link = "?";
			
		if($logout == true)
		{
			$link .= "logout";
			return $link;
		}
			
		if(isset($this->lang) && $this->lang != EncodeExplorer::getConfig("lang"))
			$link .= "lang=".$this->lang."&amp;";
			
		if($sort_by != null && strlen($sort_by) > 0)
			$link .= "sort_by=".$sort_by."&amp;";
			
		if($sort_as != null && strlen($sort_as) > 0)
			$link .= "sort_as=".$sort_as."&amp;";
		
		$link .= "dir=".$dir;
		if($delete != null)
			$link .= "&amp;del=".$delete;
		return $link;
	}


	//
	// Debugging output
	// 
	function debug()
	{
		print("Explorer location: ".$this->location->getDir(true, false, false, 0)."\n");
		for($i = 0; $i < count($this->dirs); $i++)
			$this->dirs[$i]->output();
		for($i = 0; $i < count($this->files); $i++)
			$this->files[$i]->output();
	}
	
	//
	// Comparison functions for sorting.
	//
	
	public static function cmp_name($b, $a)
	{
		return strcasecmp($a->name, $b->name);
	}
	
	public static function cmp_size($a, $b)
	{
		return ($a->size - $b->size);
	}
	
	public static function cmp_mod($b, $a)
	{
		return ($a->modTime - $b->modTime);
	}
	
	public static function getLangString($stringName, $lang)
	{
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang]) 
			&& isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]))// && is_array($_TRANSLATIONS["en"]) 
			//&& isset($_TRANSLATIONS["en"][$stringName]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return "Translation error";
	}
	
	function getString($stringName)
	{
		return EncodeExplorer::getLangString($stringName, $this->lang);
	}
	
	//
	// The function for getting configuration values
	//
	public static function getConfig($name)
	{
		global $_CONFIG;
		if(isset($_CONFIG) && isset($_CONFIG[$name]))
			return $_CONFIG[$name];
		return null;
	}
	
	public static function setError($message)
	{
		global $_ERROR;
		if(isset($_ERROR) && strlen($_ERROR) > 0)
			;// keep the first error and discard the rest
		else
			$_ERROR = $message;
	}
	
	function setErrorString($stringName)
	{
		EncodeExplorer::setError($this->getString($stringName));
	}

	//
	// Main function, activating tasks
	// 
	function run()
	{
		$this->outputHtml();
	}
	
	public function printLoginBox()
	{
		?>
		<div id="login">
		<form enctype="multipart/form-data" action="<?php print $this->makeLink(false, false, null, null, null, ""); ?>" method="post">
		<?php 
		if(GateKeeper::isLoginRequired())
		{
			$require_username = false;
			foreach(EncodeExplorer::getConfig("users") as $user){
				if($user[0] != null && strlen($user[0]) > 0){
					$require_username = true;
					break;
				}
			}
			if($require_username)
			{
			?>
			<div><label for="user_name">Username:</label>
			<input type="text" name="user_name" value="" id="user_name" /></div>
			<?php 
			}
			?>
			<div><label for="user_pass">Password:</label>
			<input type="password" name="user_pass" id="user_pass" /></div>
			<div><input type="submit" value="Log in" class="button" /></div>
		</form>
		</div>
	<?php 
		}
	}

	//
	// Printing the actual page
	// 
	function outputHtml()
	{
		global $_ERROR;
		global $_START_TIME;
?>
<!DOCTYPE HTML>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php print $this->getConfig('charset'); ?>">
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
	<div class="header navbar affix"> <div class="navbar-inner"> <div class="container-fluid">
		<a href="./" class="brand">Ceiling</a>
		<div class="nav-collapse">
			
			<ul class="nav pull-right">
				<li class="dropdown">
					<?php 
					if(GateKeeper::isUserLoggedIn()) { ?>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user"></i> 
						<div id="user"><?php print GateKeeper::getUserName(); ?></div>
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
						<?php print "<li><a href=\"".$this->makeLink(false, true, null, null, null, "")."\">Log Out</a></li>"; ?>
						</ul>
						
					<?php } 
					else { ?>
					<a href="#">
						<i class="icon-user"></i> 
						<div id="user"><?php print GateKeeper::getUserName(); ?></div>
					</a>
					<?php }	?>
 				</li>
			</ul>	
		</div>		
	</div> </div> </div>
	<section class="section container-fluid">
		<div class="row-fluid">
			<div class="span1">
				<div id="side-left">
				<div class="nav-collapse sidebar-nav">
					<ul class="sidebar">
						<li><a href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>	
						<li><a href="files.php"><i class="icon-upload-alt"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="/" id="vnc"><i class="icon-desktop"></i><span class="hidden-tablet" > VNC Access</span></a></li>
						<li><a href="music.php"><i class="icon-music"></i><span class="hidden-tablet"> Music</span></a></li>
						<li class="active"><a href="trailercontrol.php"><i class="icon-off"></i><span class="hidden-tablet"> Trailer Control</span></a></li>
					</ul>
				</div>
				</div>
			</div>
			
		<div class="span9" style="margin-left: 55px;">
			<div class="content">
				<div class="row-fluid">
<?php 
//
// Print the error (if there is something to print)
//
if(isset($_ERROR) && strlen($_ERROR) > 0)
{
	print "<div id=\"error\">".$_ERROR."</div>";
}
?>
<div id="frame">
<?php

// Checking if the user is allowed to access the page, otherwise showing the login box
if(!GateKeeper::isAccessAllowed())
{
	$this->printLoginBox();
}
else 
{
	$TStats = explode(" ", exec("trailer all --get | awk '{print($2)}' | tr '\n' ' '"));
?>
	<div class="span6">
		<div class="span9" style="margin-left:0; padding-bottom:40px;">
			<h1>Lights</h1>
			<h2>Front Room</h2>
			<div class="onoffswitch">
				<?php 
			    	if($TStats[2] == "on")
			    		$FLStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="FrontLights" onclick="trailer('front_lights', this);" <?php echo $FLStat; ?>>
			    <label class="onoffswitch-label" for="FrontLights">
			        <div class="onoffswitch-inner"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
			<h2>Back Room</h2>
			<div class="onoffswitch">
				<?php 
			    	if($TStats[3] == "on")
			    		$BLStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="BackLights" onclick="trailer('back_lights', this);" <?php echo $BLStat; ?>>
			    <label class="onoffswitch-label" for="BackLights">
			        <div class="onoffswitch-inner"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
		</div>
		<div class="span9" style="margin-left:0; padding-bottom:40px;">
			<h1>Screen</h1>
			<div class="onoffswitch">
			    <?php 
			    	if($TStats[1] == "on")
			    		$ScreenStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="Screen" onclick="trailer('screen', this);" <?php echo $ScreenStat; ?>>
			    <label class="onoffswitch-label" for="Screen">
			        <div class="onoffswitch-inner screen"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
		</div>
		<div class="span9" style="margin-left:0; padding-bottom:40px;">
			<h1>Projector</h1>
			<div class="onoffswitch">
			    <?php 
			    	if($TStats[0] == "on")
			    		$ProjStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="Proj" onclick="trailer('proj', this);" <?php echo $ProjStat; ?>>
			    <label class="onoffswitch-label" for="Proj">
			        <div class="onoffswitch-inner"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
		</div>
	</div>
	<div class="span6">
		<div class="span9" style="margin-left:0;">
			<h1>Masters</h1>
			<h2>Movie Mode</h2>
			<div class="onoffswitch">
				<?php 
			    	if(($TStats[2] == "off") && ($TStats[0] == "on") && ($TStats[1] == "on"))
			    		$MovieStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="Movie" onclick="trailer('movie', this);" <?php echo $MovieStat; ?>>
			    <label class="onoffswitch-label" for="Movie">
			        <div class="onoffswitch-inner"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
			<h2>Lights</h2>
			<div class="onoffswitch">
				<?php 
			    	if(($TStats[3] == "on") && ($TStats[2] == "on"))
			    		$LightsStat = "checked";
			    ?>
			    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="Lights" onclick="trailer('lights', this);" <?php echo $LightsStat; ?>>
			    <label class="onoffswitch-label" for="Lights">
			        <div class="onoffswitch-inner"></div>
			        <div class="onoffswitch-switch"></div>
			    </label>
		    </div>
			<h2>All</h2>
			<input type="submit" value="On" onclick="trailer('all', 'on');" />
			<input type="submit" value="Off" onclick="trailer('all', 'off');" />
		</div>
	</div>

<?php
}
?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</body>
</html>
	
<?php
	}
}

//
// This is where the system is activated. 
// We check if the user wants an image and show it. If not, we show the explorer.
//
$encodeExplorer = new EncodeExplorer();
$encodeExplorer->init();

GateKeeper::init();

$encodeExplorer->run();

?>
