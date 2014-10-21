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
	

	//
	// Printing the actual page
	// 
	function outputHtml()
	{
		global $_ERROR;
		global $_START_TIME;

		// Checking if the user is allowed to access the page
		if(GateKeeper::isAccessAllowed())
		{
			$directory = $_GET['dir'];
			$filename = $_GET['name'];
			
			if(substr($directory, 0, 1) == '.')
			{
		    	$directory = substr($directory, 1);
		    
		    }
		    
		    $fnzi = $filename.'.zip';
			$fnzi = str_replace(" ", "", $fnzi);
		    $filename = str_replace(" ","\\ ",$filename);	
		
		    chdir('/mnt/hd0'.$directory);
		    
		    // we deliver a zip file
		    header("Content-Type: archive/zip");
		 
		    // filename for the browser to save the zip file
		    header("Content-Disposition: attachment; filename=$fnzi");
		    
		    // zip the stuff (dir and all in there) into the tmp_zip file
		    exec('zip -r '.$fnzi.' '.$filename);
		   
		    // calc the length of the zip. it is needed for the progress bar of the browser    
		    $filesize = filesize($fnzi);
		    header("Content-Length: $filesize");
		 
		    // deliver the zip file
		    $fp = fopen("$fnzi","r");
		    echo fpassthru($fp);
		 
		    // clean up the tmp zip file
		    unlink($fnzi);
		}
		else {
			echo "Session invalid. Please login.";
		}	
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
