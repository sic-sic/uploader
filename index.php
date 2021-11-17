<!doctype html>
<html>
	<head>
		<title>Upload</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post" action="upload.php" enctype="multipart/form-data">
			<label>Fichier</label><br>
			<input type="file" name="files[]" multiple/><br>
			<input type="submit" value="Envoyer"/>
		</form>
	</body>
</html>
