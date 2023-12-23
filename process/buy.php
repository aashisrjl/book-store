<?php 
/*include('../db/connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name'])&& isset($_POST['price']) && isset($_POST['quantity']) ){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $qty=$_POST['quantity'];
       
    session_start();
        $user_id=$_SESSION['id'];

        $query="INSERT INTO buy (`name`,price,quantity,user_id) VALUES('$name','$price','$qty','$user_id')";
        if(mysqli_query($conn,$query)){
            $msg="successfull";
        }else{
            $errmsg="error in query";
        }

    }else{
        $errmsg="All field are required";
    }
}else{
    $errmsg= "post request required";
}

if($msg!=""){
    header('Location:../forms/shop.php?msg='.$msg);
}else{
    header('Location:../forms/shop.php?errmsg='.$errmsg);

}
?>