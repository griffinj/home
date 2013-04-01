<?php
/**
 *  base64.php - This script serves as an example of how to use the hash.class
 *  Author : Jim Griffin - jim.griffin@gmail.com
 *
 */
include_once('base64utils.class.php');

$encode = @$_REQUEST['encode'];
$decode = @$_REQUEST['decode'];

$errorStyle = 'display:none';

if ($encode) {
	$base64util =  new base64utils();
	$encodedString = $base64util->encode($encode);
	
} 
if ($decode){
	$base64util = new base64utils();
	$decodedString = $base64util->decode($decode);
	
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
				<label for="encode">String to Encode:<br /><input type="text" name="encode" id="encode"></label><br />
				<span id="error" style="<?= $errorStyle ?>"><?= $errorMessage ?></span>
				<label for="decode">String to Decode:<br /><input type="text" name="decode" id="decode"></label><br />
				<input type="submit" value="Submit"><br />
			</fieldset>
		</form>
		<?php if (@$encodedString) {  echo $encodedString."<br />"; } ?>
		<?php if (@$decodedString) {  echo $decodedString."<br />"; } ?>
	</body>
</html>
		

