<?php
	require "Connect.php";
	
	$data = json_decode(stripslashes($_GET['data']));

	$Timestamp = time();
	$Lat = $data[0];
	$Long = $data[1]; 
	$Name = $data[2];
	$Type = $data[3];
	$Locality = $data[4];
	$Territory = $data[5];
	$Country = $data[6];
	$query = "INSERT INTO `Geolocation` (`Timestamp`,`Lat`, `Long`, `Tag`, `Type`, `Locality`, `Territory`, `Country`) VALUES ('$Timestamp','$Lat','$Long','$Name','$Type','$Locality','$Territory','$Country')";
	mysqli_query($connect,$query);
	
    $directory = "/var/www/html/Admin/img/".$Name."_".$Timestamp;
    print $directory;
    if(!mkdir($directory,0775)){
        die('Failed to create folders...');
    }
        
?>