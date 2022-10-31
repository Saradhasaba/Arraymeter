<?php
$directory = 'E:\Backupfile/test/';
if ($handle = opendir($directory)) { 
    while (false !== ($fileName = readdir($handle))) { 
	
	$oldMeterId=	explode("_",$fileName);
	$newmeterId=12345654;
	$str=file_get_contents($directory .$fileName);
	//print_r($str);
	$str=str_replace($oldMeterId, $newmeterId,$str);
	//write the entire string
	file_put_contents($directory . $fileName, $str);
	/*start file name change*/	
     $newName = str_replace($oldMeterId[0],$newmeterId,$fileName);
     rename($directory . $fileName, $directory . $newName);
	 
	 
    }
    closedir($handle);
}
?>