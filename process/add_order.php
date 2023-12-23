
<?php 
include('../db/connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['pay'])){
        session_start();
        $user_id=$_SESSION['user_id'];
        $Date = date("Y/m/d");
        $num=$_POST['num'];
        $query= "INSERT INTO orders(user_id,order_date,number) VALUES('$user_id','$Date','$num')";
        if(mysqli_query($conn,$query)){
            $msg="Done";
        }else{
            $errmsg="error in Query";
        }
    }else{
        $errmsg="pay not found";
    }

    if(isset($_POST['pay'])){
        $_SESSION['cart'] = []; 
        echo "<script>
            window.location.href='../forms/cart.php';
        </script>";
    }
        
}else{
    $errmsg="request methos cant support";
}
if($msg!=""){
    header('Location:../forms/cart.php?msg='.$msg);
}else{
    header('Location:../forms/cart.php?errmsg='.$errmsg);
 
}
?>