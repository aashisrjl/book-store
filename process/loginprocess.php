<?php
include('../db/connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

if($password!=""){
    if($email!=""){
        $enc=md5($password);
        $query= "SELECT * FROM users where email='$email' and `password`='$enc'";
        $result= mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            $row= mysqli_fetch_assoc($result);
            session_start();
            
            $_SESSION['user_id']= $row['user_id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['password']=$row['password'];
            $_SESSION['role']=$row['role'];
            $msg= "succesfully login";

        }else{
            $errmsg="record not match";
        }
    
            

    }else{
        $errmsg="email cannot be empty!";
    }
}else{
    $errmsg="password cant be empty";
}
}else{
    $errmsg ="All fields are required";
}
}else{
    $errmsg= "request method does not support";
}
if($msg !="")
{
    
    header('Location:../forms/cart.php?msg='.$msg);
    
}else{

header('Location:../forms/login.php?err='.$errmsg);
} 
 ?>
 