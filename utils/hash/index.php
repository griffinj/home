<?php
/**
 *  hash.php - This script serves as an example of how to use the hash.class
 *  Author : Jim Griffin - jim.griffin@gmail.com
 *
 */
include_once('hash.class.php');

$salt = @$_REQUEST['salt'];
$stringToHash = @$_REQUEST['hashstring'];

$errorStyle = 'display:none';

if ($stringToHash) {
	$resultHash =  new Hash($stringToHash, $salt);
	$resultHash = $resultHash ->getHash();
	
} else {
	$errorMessage = 'Hash String is required';
	$errorStyle = 'display:inline-block';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>md5 String Hasher</title>
	</head>
	<body>
		<form name="hashForm" action="" mehod="GET">
			<fieldset>
				<legend>md5 String Hasher</legend>
				<label for="hashstring">String to Hash:<br /><input type="text" name="hashstring" id="hashstring"></label><br />
				<span id="error" style="<?= $errorStyle ?>"><?= $errorMessage ?></span>
				<label for="salt">Salt<br /><input type="text" name="salt" id="salt"> * optional</label><br />
				<input type="submit" value="Submit"><br />
			</fieldset>
		</form>
		<?php if ($resultHash) {  echo $resultHash; } ?>
	</body>
</html>
		

