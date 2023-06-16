<?php
$maxFileSize = 5242880; //5Mb
$allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif');
if (isset($_POST['submit'])) {
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileTmp = $_FILES['file']['tmp_name'];
$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
if (!in_array($fileType, $allowedFileTypes)) {
echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed."; }
elseif ($fileSize > $maxFileSize) {
echo "Error: File size exceeds the maximum limit of 5MB."; }
else {
$destination = "uploads/" . $fileName;
move_uploaded_file($fileTmp, $destination);
echo "File uploaded successfully!"; }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>File Uploading</title>
</head>
<body>
<h1>Select File To Upload</h1>
<form method="POST" action="" enctype="multipart/form-data">
<input type="file" name="file" id="file" required><br><br>
<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
