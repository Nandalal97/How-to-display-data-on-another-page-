<?php
 if (isset($_POST['submit'])) {
    $Fist_NAME = $_POST["fname"];
    $Last_NAME = $_POST["lname"];
    $D_Fist_NAME = $_POST["dfname"];
    $D_Last_NAME = $_POST["dlname"];
    $M_Fist_NAME = $_POST["mfname"];
    $M_Last_NAME = $_POST["mlname"]; 
 $birthday = $_POST["birthday"];
 $gender = $_POST["gender"];
 $EMAIL = $_POST["email"];
 $phone = $_POST ["phone"];
 $address = $_POST ["address"];
 $state = $_POST ["state"];
 $city = $_POST ["city"];

 
 echo "Studen's Name : ". $Fist_NAME . "\n", $Last_NAME .'</br>';
 echo "Father's Name : ". $D_Fist_NAME . "\n", $D_Last_NAME .'</br>';
 echo "Mother's Name : ". $M_Fist_NAME . "\n", $M_Last_NAME .'</br>';
 echo "Date of Birth :". $birthday.'</br>';
 echo "Gender :". $gender. '</br>';
 echo "Email is : ". $EMAIL .'</br>';
 echo "phone No. :". $phone.'</br>';
 echo "Address :". $address.'</br>';
 echo "State :". $state.'</br>';
 echo "City :". $city.'</br>';
 
 }
 ?>