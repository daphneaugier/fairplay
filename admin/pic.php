<?php

/*

    Fairplay
    --------

    Daphné Augier

    (c) 2019

*/

require_once '../vendor/autoload.php';
// Initialisation twig
$loader = new \Twig\Loader\FilesystemLoader('../templates');
/*

$twig = new \Twig\Environment($loader, [
    'cache' => '../cache',
]);
*/
$twig = new \Twig\Environment($loader);


$target_dir = "../images/";

// Manage file upload
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$message[] = "";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $message[] =  "File is an image - " . $check["mime"] . ".";
        $uploadOk = True;
    } else {
        $message[] =   "File is not an image.";
        $uploadOk = False;
    }
}
// Check if file already exists
if ($uploadOk){
    if (file_exists($target_file)) {
        $message[] =  "Sorry, file already exists.";
        $uploadOk = False;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $message[] =  "Sorry, your file is too large.";
        $uploadOk = False;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $message[] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = False;
    }
    // Check if $uploadOk is set to 0 by an error
    if (!$uploadOk) {
        $message[] =  "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $message[] =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            $message[] =  "Sorry, there was an error uploading your file.";
        }
    }
}


// Build Directory list
if ($handle = opendir($target_dir)) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") 
         && ($file != ".."))
        {
            $thelist[] = $file;
        }
    }

    closedir($handle);
}


// Display page
echo $twig->render('pic.html',['dir' => $target_dir, 'files' => $thelist, 'messages' => $message]);  


?>

