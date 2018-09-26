<?php

header("Location: photo.php");
var_dump($_POST);

echo ("Welcome ". $_POST['firstname'+'lastname']. "<br />");
   echo ("Your ". $_POST['email']. " is registered");
   echo()


   $uploaddir = '/profilePic';
   $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
       echo "File is valid, and was successfully uploaded.\n";
   } else {
       echo "Possible file upload attack!\n";
   }

   echo 'Here is some more debugging info:';
   print_r($_FILES);











 ?>
