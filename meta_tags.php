<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="author" content="Stoyan Stoyanov" />
<meta name="copyright" content="W3b-D3sign owner" />
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="global">
<meta name="generator" content="Notepad++">
<meta name="googlebot" content="noodp">
<meta name="language" content="English">
<?php
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
if ($browser == true){
	$browser = 'iphone';
}
if($browser == 'iphone'){ echo '
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />';
}else{
	echo '
<meta name="viewport" content="width=device-width, initial-scale=1">';
}
?>