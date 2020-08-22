<?php
function decode($string){
	$decoded = "";
	for($i = 0; $i < strlen($string); $i++){
		$num = ord(substr($string,$i,1));
		if($num > 79){
			$decoded = $decoded . chr($num - 47);
		}elseif($num <= 79){
			$decoded = $decoded . chr($num + 47);
		}
	}
	return $decoded;
}

$code = decode($_POST['code']);
$bol = explode("|",$code);
$random = $bol[3];
$user = $bol[0];
$pass = $bol[1];
echo md5($user.$pass.$random);
?>