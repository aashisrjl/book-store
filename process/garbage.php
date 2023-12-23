//manage.php//
<?php 
/*session_start();
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

}

?>

// cart.php

 <div class="con">
        <div class="container">
            <br><br><br><br>
    <div class="col-lg-8">
     <table class="table">
      <thead class="text-center">
     <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item NAme</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"> " "</th>
    </tr>
     </thead>
    <tbody class="text-center">
    <?php 
    $total=0;
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
        $total= $total+$value['price'];
        echo"
        <tr>
        <td>1</td>
        <td> $value[name]</td>
        <td> $value[price]</td>
        <td><input type='number' value='$value[Quantity]' </td>
        <td><button>Remove</button> </td>

        </tr>
        ";
    }
}
    ?>
   
  </tbody>
</table>
            </div>
            <div class="col-lg-4">
                <div>
                <h3>Total</h3>
                <h5> <?php echo $total; ?></h5>
                </div>
            </div>
           
                <br><br>
            </div>
        
     </div>

