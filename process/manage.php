<?php include('../msg/logincheck.php') ?>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems = array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myitems))
            {
                echo "<script>
                alert('items alredy added');
                window.location.href='../forms/shop.php';
                </script>";
            }else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo "<script>
            alert('item  added');
            window.location.href='../forms/shop.php';
            </script>";
            }

        }else{
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo "<script>
                alert('items added');
                window.location.href='../forms/shop.php';
                </script>";
        }
    }
    if(isset($_POST['remove_item'])){
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['name']==$_POST['name']){
                unset($_SESSION['cart'][$key]);
                $_SERVER['cart']=array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='../forms/cart.php';
                </script>";
            }
        }

    }

    if(isset($_POST['logout'])){               
        session_start();       
        session_destroy();
        header('Location:../forms/login.php');
    }

    if(isset($_POST['mod_quantity'])){

        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['name']==$_POST['name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['mod_quantity'];
                echo "<script>
                window.location.href='../forms/cart.php';
                </script>";
            }
        }
    }
    


}

?>