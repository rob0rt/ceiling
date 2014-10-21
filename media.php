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
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="cssbu/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="cssbu/bootstrap-responsive.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="cssbu/font-awesome.css" media="all" />
		<link rel="stylesheet" type="text/css" href="cssbu/style.css" media="all" />
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.jstree.js"></script>
		<script type="text/javascript" src="js/ui.js"></script>
		<script type="text/javascript" src="js/controlers.js"></script>
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/dashboard.js"></script>
	<script type="text/javascript">
		//<![CDATA[
			var pollStatus	=	true;
			$(function(){
				$('.button').hover(function(){$(this).addClass('ui-state-hover')},function(){$(this).removeClass('ui-state-hover')});
				$('#buttonPlayList').click(function(){
					$('#libraryContainer').animate({
						height: 'toggle'
					});
					$('#buttonzone').animate({
						width: 'toggle'
					});
					return false;
				});
				$('#buttonViewer').click(function(){
					$('#viewContainer').animate({
						height: 'toggle'
					})
					return false;
				});
				$('#buttonEqualizer').click(function(){
					updateEQ();
					$('#window_equalizer').dialog('open');
					return false;
				})
				$('#buttonOffsets').click(function(){
					$('#window_offset').dialog('open');
					return false;
				});
				$('#buttonBatch').click(function(){
					$('#window_batch').dialog('open');
					return false;
				});
				$('#buttonOpen').click(function(){
					browse_target	=	'default';
					browse();
					$('#window_browse').dialog('open');
					return false;
				});
				$('#buttonPrev').mousedown(function(){
					intv	=	1;
					ccmd	=	'prev';
					setIntv();
					return false;
				});
				$('#buttonPrev').mouseup(function(){
					if(intv<=5){
						sendCommand({'command':'pl_previous'});
					}
					intv	=	0;
					return false;
				});
				$('#buttonNext').mousedown(function(){
					intv	=	1;
					ccmd	=	'next';
					setIntv();
					return false;
				});
				$('#buttonNext').mouseup(function(){
					if(intv<=5){
						sendCommand({'command':'pl_next'});
					}
					intv	=	0;
					return false;
				});
				$('#buttonPlEmpty').click(function(){
					sendCommand({'command':'pl_empty'})
					updatePlayList(true);
					return false;
				});
				$('#buttonLoop').click(function(){
					sendCommand({'command':'pl_loop'});
					return false;
				});
				$('#buttonRepeat').click(function(){
					sendCommand({'command':'pl_repeat'});
					return false;
				});
				$('#buttonShuffle').click(function(){
					sendCommand({'command':'pl_random'});
					return false;
				})
				$('#buttonRefresh').click(function(){
				    updatePlayList(true);
				    return false;
				});
				$('#buttonPlPlay').click(function(){
					sendCommand({
						'command': 'pl_play',
						'id':$('.jstree-clicked','#libraryTree').first().parents().first().attr('id').substr(5)
					})
					return false;
				});
				$('#buttonPlAdd').click(function(){
					$('.jstree-clicked','#libraryTree').each(function(){
						if($(this).parents().first().attr('uri')){
							sendCommand({
								'command':'in_enqueue',
								'input' : $(this).parents().first().attr('uri')
							});
						};
					});
					$('#libraryTree').jstree('deselect_all');
					setTimeout(function(){updatePlayList(true);},1000);
					return false;
				});
				$('#buttonStreams, #buttonStreams2').click(function(){
					updateStreams();
					$('#window_streams').dialog('open');
				});
				$('#viewContainer').animate({height: 'toggle'});
			});
			/* delay script loading so we won't block if we have no net access */
			$.getScript('http://static.flowplayer.org/js/flowplayer-3.2.6.min.js', function(data, textStatus){
				$('#player').empty();
				flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf");
				/* .getScript only handles success() */
			 });
		//]]>
	</script>
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
?>
			<div class="centered">
			<div id="mainContainer" class="centered">
			<div id="controlContainer" class="ui-widget">
				<div id="controlTable" class="ui-widget-content">
					<ul id="controlButtons">
						<li id="buttonPrev" class="button48  ui-corner-all" title="<?vlc gettext("Previous") ?>"></li>
						<li id="buttonPlay" class="button48  ui-corner-all paused" title="<?vlc gettext("Play") ?>"></li>
						<li id="buttonNext" class="button48  ui-corner-all" title="<?vlc gettext("Next") ?>"></li>
						<li id="buttonOpen" class="button48  ui-corner-all" title="<?vlc gettext("Open Media") ?>"></li>
						<li id="buttonStop" class="button48  ui-corner-all" title="<?vlc gettext("Stop") ?>"></li>
						<li id="buttonFull" class="button48  ui-corner-all" title="<?vlc gettext("Full Screen") ?>"></li>
					</ul>
					<ul id="buttonszone">
						<li id="buttonPlayList" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Hide / Show Library") ?>"><span class="ui-icon ui-icon-note"></span></li>
						<li id="buttonStreams" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Manage Streams") ?>"><span class="ui-icon ui-icon-script"></span></li>
						<li id="buttonOffsets" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Track Synchronisation") ?>"><span class="ui-icon ui-icon-transfer-e-w"></span></li>
						<li id="buttonEqualizer" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Equalizer") ?>"><span class="ui-icon ui-icon-signal"></span></li>
						<li id="buttonBatch" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("VLM Batch Commands") ?>"><span class="ui-icon ui-icon-suitcase"></span></li>
					</ul>
					<div id="volumesliderzone">
						<div id="volumeSlider" title="Volume"><img src="images/speaker-32.png" class="ui-slider-handle" alt="volume"/></div>
						<div id="currentVolume" class="dynamic">50%</div>
					</div>
					<div id="artszone">
						<img id="albumArt" src="/art" width="141px" height="130px" alt="Album Art"/>
					</div>
					<div id="mediaTitle" class="dynamic"></div>
					<div id="seekContainer">
						<div id="seekSlider" title="<?vlc gettext("Seek Time") ?>"></div>
						<div id="currentTime" class="dynamic">00:00:00</div>
						<div id="totalTime" class="dynamic">00:00:00</div>
					</div>
				</div>
			</div>
			<div id="libraryContainer" class="ui-widget">
				<ul id="buttonzone" align="left" class="ui-widget-content" style="overflow:hidden; white-space: nowrap;">
					<li id="buttonShuffle" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Shuffle") ?>"><span class="ui-icon ui-icon-shuffle"></span></li>
					<li id="buttonLoop" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Loop") ?>"><span class="ui-icon ui-icon-refresh"></span></li>
					<li id="buttonRepeat" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Repeat") ?>"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span></li>
					<li id="buttonPlEmpty" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Empty Playlist") ?>"><span class="ui-icon ui-icon-trash"></span></li>
					<li id="buttonPlAdd" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Queue Selected") ?>"><span class="ui-icon ui-icon-plus"></span></li>
					<li id="buttonPlPlay" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Play Selected") ?>"><span class="ui-icon ui-icon-play"></span></li>
					<li id="buttonRefresh" class="button ui-widget ui-state-default ui-corner-all" title="<?vlc gettext("Refresh List") ?>"><span class="ui-icon ui-icon-arrowrefresh-1-n"></span></li>
				</ul>
				<div id="libraryTree" class="ui-widget-content"></div>
			</div>
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
