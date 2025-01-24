<?php
require_once "dbconnection.inc.php";

include ('Chat.php');

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `Email_Address`='$id'";
    $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];
            $type = $row['User_Type'];

if(md5($password) == $pass){

                if ($type == "Administrator") {
                $_SESSION['adminname'] = $row['User_ID'];
                $_SESSION['upuid'] = $row['User_ID'];
                header("Location: index.php");
                }else{

$chat = new Chat();
    $user = $chat->loginUsers($_POST['email'], $_POST['password']);

         $sql2 = "SELECT * FROM `chat_users` WHERE `email`='$id'";

        $query1 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query1) > 0){
            $row1 = mysqli_fetch_assoc($query1);

            $_SESSION['userid'] = $row1['userid'];

                if ($type == "Specialist") {
                $_SESSION['specname'] = $row['User_ID'];
                $_SESSION['upuid'] = $row['User_ID'];
                header("Location: index1.php");
                }else if ($type == "User") {
                $_SESSION['username'] = $row['User_ID'];
                $_SESSION['upuid'] = $row['User_ID'];
                header("Location: index2.php");
                }
            }
        }
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "User does not exist.";
        }
}


if(isset($_POST['findSpec'])){

 $fil5 = $_POST['gen'];
 $fil4 = $_POST['loc']; 
 $fil3 = $_POST['comm'];
 $fil2 = $_POST['age'];
 $fil1 = $_POST['spec']; 

        $sql = "SELECT * FROM `users` WHERE `Specialist` = '$fil1' AND `Age_Group` = '$fil2' AND `Communication` = '$fil3' AND `Location` = '$fil4' AND `User_Type` = 'Specialist'";
        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
                $_SESSION['spec'] = $fil1;
                $_SESSION['age'] = $fil2;
                $_SESSION['comm'] = $fil3;
                $_SESSION['loc'] = $fil4;                                 
                header("Location: index2_appointment.php");
        }else{
            echo "Specialist is not available at the moment, kindly try again later.";
        }
}
         
?>