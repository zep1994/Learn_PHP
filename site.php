<?php 
    $target_dir = "C:\xampp\htdocs\Learn_PHP";
    $target_dir = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_dir, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";          
        } else {
            echo "File is not an image.";
            $uploadOK = 0;
        }
    }
  ?>