<?php
$uploads_dir = './uploads';
$error_occured = false;
foreach($_FILES['files']['error'] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		echo "$key => ok<br>";
		$tmp_name = $_FILES['files']['tmp_name'][$key];
		$name = basename($_FILES['files']['name'][$key]);
		move_uploaded_file($tmp_name, "$uploads_dir/$name");
	} else {
		$error_occured = true;
		echo "$key => $error";
	}
}
if (!$error_occured) {
	header('location: /');
}
?>
