<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "uploads/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['wav','mp3','ogg','flac','3ga','aac','ac3','aifc','aiff','iff','m4a','opus','vox','wma','xac','3gp','avi','wmv','mov','mp4']; // These will be the only file extensions allowed 

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Supported file types are as follows:<ul><li>wav<li>mp3<li>ogg<li>flac<li>3ga<li>aac<li>ac3<li>aifc<li>aiff<li>iff<li>m4a<li>opus<li>vox<li>wma<li>xac<li>3gp<li>avi<li>wmv<li>mov<li>mp4</ul>";
      }

      if ($fileSize > 4000000000) {
        $errors[] = "File exceeds maximum size (4GB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>