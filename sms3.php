<!DOCTYPE html>
<body>
<?php
if(isset($_POST['sub']))
{
	$mobile=$_POST['no'];
	$messages=$_POST['msg'];
	$username = "sreevanidhulipala24097@yahoo.com";
	$hash = "90cdeb1b18a172ab87847d09269b3b5cff52e90ddcd0a32daaea2e3ec4727c5a";
	$test = "0";
	$sender = "TXTLCL"; 
	$numbers = "$mobile"; 
	$message = "$messages";
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);
	echo $result;
}
?>
</body>
<form method="post" >
Mobile number <input type="text" name="no" />
Message <input type="text" name="msg" />
<input type="submit" name="sub" value="submit" />
</form>
</html>