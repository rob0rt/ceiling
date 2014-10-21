<?php
/*
 The class for any kind of file managing (new folder, upload, etc).
*/
class FileManager
{
	function newFolder($location, $dirname)
	{
		global $encodeExplorer;
		if(strlen($dirname) > 0)
		{
			$forbidden = array(".", "/", "\\");
			for($i = 0; $i < count($forbidden); $i++)
			{
				$dirname = str_replace($forbidden[$i], "", $dirname);
			}
			
			if(!$location->uploadAllowed())
			{
				// The system configuration does not allow uploading here
				$encodeExplorer->setErrorString("upload_not_allowed");
			}
			else if(!$location->isWritable())
			{
				// The target directory is not writable
				$encodeExplorer->setErrorString("upload_dir_not_writable");
			}
			else if(!mkdir($location->getDir(true, false, false, 0).$dirname, 0777))
			{
				// Error creating a new directory
				$encodeExplorer->setErrorString("new_dir_failed");
			}
			else if(!chmod($location->getDir(true, false, false, 0).$dirname, 0777))
			{
				// Error applying chmod 777
				$encodeExplorer->setErrorString("chmod_dir_failed");
			}
			else
			{
				// Directory successfully created, sending e-mail notification
				Logger::logCreation($location->getDir(true, false, false, 0).$dirname, true);
				Logger::emailNotification($location->getDir(true, false, false, 0).$dirname, false);
			}
		}
	}

	function uploadFile($location, $userfile)
	{
		global $encodeExplorer;
		$name = basename($userfile['name']);
		if(get_magic_quotes_gpc())
			$name = stripslashes($name);

		$upload_dir = $location->getFullPath();
		$upload_file = $upload_dir . $name;
		
		if(function_exists("finfo_open") && function_exists("finfo_file"))
			$mime_type = File::getFileMime($userfile['tmp_name']);
		else
			$mime_type = $userfile['type'];
	
		$extension = File::getFileExtension($userfile['name']);

		if(!$location->uploadAllowed())
		{
			$encodeExplorer->setErrorString("upload_not_allowed");
		}
		else if(!$location->isWritable())
		{
			$encodeExplorer->setErrorString("upload_dir_not_writable");
		}
		else if(!is_uploaded_file($userfile['tmp_name']))
		{
			$encodeExplorer->setErrorString("failed_upload");
		}
		else if(is_array(EncodeExplorer::getConfig("upload_reject_extension")) && count(EncodeExplorer::getConfig("upload_reject_extension")) > 0 && in_array($extension, EncodeExplorer::getConfig("upload_reject_extension")))
		{
			$encodeExplorer->setErrorString("upload_type_not_allowed");
		}
		else if(!@move_uploaded_file($userfile['tmp_name'], $upload_file))
		{
			$encodeExplorer->setErrorString("failed_move");
		}
		else
		{
			chmod($upload_file, 0755);
			Logger::logCreation($location->getDir(true, false, false, 0).$name, false);
		}
	}
	
	public static function delete_dir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") 
						FileManager::delete_dir($dir."/".$object); 
					else 
						unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}
	
	public static function delete_file($file){
		if(is_file($file)){
			unlink($file);
		}
	}

	//
	// The main function, checks if the user wants to perform any supported operations
	// 
	function run($location)
	{
		if(isset($_POST['userdir']) && strlen($_POST['userdir']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isNewdirAllowed()){
				$this->newFolder($location, $_POST['userdir']);
			}
		}
			
		if(isset($_FILES['userfile']['name']) && strlen($_FILES['userfile']['name']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isUploadAllowed()){
				$this->uploadFile($location, $_FILES['userfile']);
			}
		}
		
		if(isset($_GET['del'])){
			if(GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isDeleteAllowed()){
				$split_path = Location::splitPath($_GET['del']);
				$path = "";
				for($i = 0; $i < count($split_path); $i++){
					$path .= $split_path[$i];
					if($i + 1 < count($split_path))
						$path .= "/";
				}
				if($path == "" || $path == "/" || $path == "\\" || $path == ".")
					return;
				
				if(is_dir($path))
					FileManager::delete_dir($path);
				else if(is_file($path))
					FileManager::delete_file($path);
			}
		}
	}
}
?>