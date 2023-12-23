<?php
/*include('../db/connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name'])&& isset($_POST['price']) && isset($_POST['quantity']) ){
        

        $id=$_SESSION['id'];
        $name= $_POST['name'];
        $price =$_POST['price'];
        $quantity= $_POST['quantity'];


        $query="INSERT INTO order_items (order_id,book_id,quantity,price_per_unit) VALUES('1','$id','$price','$quantity')";
        if(mysqli_query($conn,$query))
        {
            echo "
            <script>
            alert ('Added to cart');
            window.location.href='../forms/shop.php';
            </script>
            
            ";
            $msg="saved";
        

        }else{
            $errmsg="error in query";
        }
    }else{
        $errrmsg="all field are required";
    }

}else{
    $errmsg="request method not support";
}

if($msg!=""){
    header('location:../forms/shop.php?msg='.$msg);
}else{
    header('location:../forms/shop.php?errmsg='.$errmsg);

}
 ?>

