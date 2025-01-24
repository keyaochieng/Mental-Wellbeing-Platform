<?php 

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];
 $type = $_POST['type'];
 $loc = $_POST['loc'];
 $comm = $_POST['comm'];
 $age = $_POST['age'];
 $gen = $_POST['gen'];
 $spec = $_POST['spec']; 

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

  if ($mod == 1) {
    if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

  $sql = "INSERT INTO `users`(`Fullname`,`Image`, `Email_Address`, `Phone_Number`, `Password`, `User_Type`) VALUES ('$fname','$newImgName','$email','$phone',md5('$password') , 'User')";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
  }}}
  if ($mod == 3) {
    if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

  $sql = "INSERT INTO `users`(`Fullname`, `Image`, `Email_Address`, `Phone_Number`, `Password`, `User_Type`, `Specialist`, `Age_Group`, `Communication`, `Location`, `Gender`) VALUES ('$fname','$newImgName','$email','$phone',md5('$password') , 'Specialist', '$spec', '$age', '$comm', '$loc', '$gen')";
     mysqli_query($conn, $sql);
  header("Location: index.php?specialistregistration=success");
  }}
  }
  else{
   $sql = "INSERT INTO `users`(`Fullname`, `Email_Address`, `Phone_Number`, `Password`, `User_Type`) VALUES ('$fname','$email','$phone', md5('$password'), '$type')";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
 }
}else{
  echo "Passwords do not match.";
 }
}

//Make Appointment
if (isset($_POST['makeapp'])) {
 $det = $_POST['det']; 
 $uid = $_SESSION['username'];
 $sid = $_POST['sid'];
 $time = $_POST['time'];
 $date = $_POST['date']; 

 require_once 'dbconnection.inc.php';
  
  $sql = "INSERT INTO `appointments`(`User_ID`, `Specialist_ID`, `Details`, `Date`, `Time`) VALUES ('$uid','$sid','$det','$date','$time')";
     mysqli_query($conn, $sql);
  header("Location: index2.php?makeappointment=success");
 }

//Add Self-Care Content
if (isset($_POST['addselfcare'])) {
 $dname = $_POST['dname']; 
 $uid = $_SESSION['adminname'];
 $dir = $_POST['dir'];
 $det = $_POST['det']; 

 require_once 'dbconnection.inc.php';
  
  $sql = "INSERT INTO `self_care` (`User_ID`,  `Name` , `URL`, `Details`) VALUES ('$uid','$dname','$dir','$det')";
     mysqli_query($conn, $sql);
  header("Location: index.php?addselfcarecontent=success");
 } 

//Add Feedback
if (isset($_POST['addf'])) {
 $det = $_POST['det']; 
 $uid = $_SESSION['fil'];

 require_once 'dbconnection.inc.php';
if (isset($_SESSION['username'])){
  $sql = "INSERT INTO `feedback` (`Appointment_ID`,  `User_ID`, `Details`) VALUES ('$uid','" . $_SESSION['username'] . "','$det')";
     mysqli_query($conn, $sql);
  header("Location: index2_feedback.php?addfeedback=success");
}else if (isset($_SESSION['specname'])){
  $sql = "INSERT INTO `feedback` (`Appointment_ID`,  `User_ID`, `Details`) VALUES ('$uid','" . $_SESSION['specname'] . "','$det')";
     mysqli_query($conn, $sql);
  header("Location: index1_feedback.php?addfeedback=success");
 }  
}

//Delete Functions

        if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteuser=success");
        }

        if($_REQUEST['action'] == 'deleteA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `appointments` WHERE `Appointment_ID` = '$deleteItem'";
        mysqli_query($conn, $sql);         
        header("Location: index2.php?deleteappointment=success");
        }

        if($_REQUEST['action'] == 'deleteF' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `feedback` WHERE `Feedback_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        if (isset($_SESSION['username'])){
        header("Location: index2.php?deleteappointment=success");
                }else if (isset($_SESSION['specname'])){
        header("Location: index1.php?deleteappointment=success");
                }         
        }        

//Update Functions

        if($_REQUEST['action'] == 'cancelA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `appointments` SET `Status`='Cancelled' WHERE `Appointment_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?cancelAppointment=success");          
        }

        if($_REQUEST['action'] == 'goF' && !empty($_REQUEST['id'])){ 
         $id = $_REQUEST['id'];
         $_SESSION['fil'] = $id;
                if (isset($_SESSION['username'])){
        header("Location: index2_feedback.php?viewfeedback=success");
                }else if (isset($_SESSION['specname'])){
        header("Location: index1_feedback.php?viewfeedback=success");
                }        
        }        

        if($_REQUEST['action'] == 'acceptA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `appointments` SET `Status`='Accepted' WHERE `Appointment_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?acceptAppointment=success");          
        }        

        if($_REQUEST['action'] == 'completeA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `appointments` SET `Status`='Complete' WHERE `Appointment_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index2.php?completeAppointment=success");          
        }

//Update User
if (isset($_POST['upu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $uid = $_POST['uid'];
 $mod = $_POST['mod']; 
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == "Administrator") {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == "Specialist") {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updatespecialist=success");
  }else if($mod == "User"){
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateuser=success");
 }
 }else{
  echo "Passwords do not match.";
 }
}

?>