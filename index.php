<?php if(isset($_GET['key'])){
		$key = $_GET['key'];
		$decrypted = base64_decode($key);
	//	$replacestring = str_replace("/var/www/html/staging-temp/","/home/pinpointdev/Dropbox/onpoint.pinpoint/",$decrypted);
		$replacestring = '/var/www/html/staging-temp/'.$decrypted;
		echo file_get_contents($replacestring);
}else{
	echo "Delivery Note Not available";
}