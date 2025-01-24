<?php 

if($_REQUEST['action'] == 'logout' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql2 = "SELECT * FROM `chat_users` WHERE `userid`='$deleteItem'";
        $query2 = mysqli_query($conn,$sql2);
        if(mysqli_num_rows($query2) > 0){
        $row2 = mysqli_fetch_assoc($query2);
        $email = $row2['email'];
        $sql1 = "UPDATE `chat_users` SET `current_session`='0' WHERE `email`='$email'";
        mysqli_query($conn, $sql1); 
        

session_start();
session_destroy();

header("Location: index.html");

}else{

}
}else{
 session_start();
session_destroy();

header("Location: index.html");       
}

?>