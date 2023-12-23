<?php include('../msg/logincheck.php') ?>
<?php 

?>
<?php
include('../db/connect.php');
$id=$_SESSION['user_id'];
$query="SELECT * FROM users where user_id='$id'";
$result= mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

</head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script>
<style>
 .cont{
        text-align: center;
        margin-top: 15%;
        font-family: cursive;
        font-weight: bold;
        font-size: 2.5em;
        text-shadow: 2px 5px #FFFFFF75;
        
    }
    .con{
        background-color: #86A8CF;
        
    }
    .con .user{
        float:right;
        font-size:20px;
        padding:20px;
        margin-right:40px;
        font-weight:bold;
    }
    .con button{
        text-align:center;
        margin-top:10px;
        border-radius:50px;
        
    }
    
    .con h2{
        margin-top: 50px;
    }
   
    .foot{
        background-color: brown;
        text-align: center;
        font-weight: bold;
        font-family: cursive;
        padding: 20px;
        margin-bottom: 0px;
    }
    .details .card{
        display: flex;
        flex-direction: row;
        margin-top: 75px;
        border-radius: 50px;
        box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.6);
        background-color: #86A8CF;
    }
    .card img{
        border-radius: 50px;
        box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.6);
        cursor: pointer;
    }
    .card-text{
        margin-left: 50px;
        font-family: cursive;
        padding: 10px;
        background: transparent;
    }
    .card h3{
        padding: 20px;
        color: red;
        font-weight: bold;
    }
    table{
        border:3px solid black;
        margin-bottom:100px;
    }
    .offcanvas h5{
        font-weight:bold;
        color:green;
        text-decoration:underline;
        margin-left:75px;
    }
    .offcanvas-body p{
        font-family:cursive;
        font-size:20px;
        padding:20px;

    }
    .offcanvas{
        background-color:lightblue;
        font-family:cursive;
    }
    .link a{
        padding:30px;
        border-radius:70%;
      
    }
    .link{
        margin-bottom:30px;
    }
    .link img{
        border-radius:50%;
        transition:0.5s;
    }
    .link img:hover{
        transform:scaleX(1.5);
        color:red;
    }
    .img{
        border-radius:50px;
        margin-left:60px;
    }
    .p{
        color:red;
        font-weight:bold;
       text-align:center;
        font-size:30px;
        margin-top:50px;
        background-color:yellow;
        border-radius:20px;
    }
    .span{
        text-align:center;
        margin-left:25%;
        font-weight:bold;
    }
    .user i{
        padding:10px;
    }
    .ani{
        animation: ani 4s linear infinite;
      
    }
    @keyframes ani {
    0% {
        color: red;
    }
    25% {
        color: blue;
    }
    50% {
        color: green;
    }
    75% {
        color: orange;
    }
    100% {
        color: red;
    }
}


    </style>
<body>
    <div class="main1">
    <div class="row">
     <div class="col-12">
    <div class="navbar">
        <ul>
            <p><span id="a1">{Aashis</span> <span>Books</span> <span id="a2">Store}</span></p>
            <li id="h1" class="hm"><a href="index.php">Home</a> </li>
            <li id="h1" class="orders"><a href="detail.php">Details</a></li>
            <li id="h1" class="books"><a href="book.php">Books</a></li>
            <li id="h1" class="shop"><a href="shop.php">Shop</a></li>
            <li id="h1" class="contact"><a href="contact.php">Contact</a></li>
            <li id="reg">Register</li>
        </ul>
    </div>
        </div>
    </div>
    <div class="cont" data-aos="zoom-in">
        <h1>Your Shopping Cart</h1> 
    </div>
    
    <div class="con">
        <form action="../process/manage.php" method="POST">
    <button name="logout" class=" btn btn-danger-sm user text-right rounded"><i class="fa-solid fa-right-from-bracket"></i></button>
</form>
    <div class="user"><?php echo $row['role']; ?> <i class="fa-solid fa-user"></i> <h3 class="ani"><?php echo $row['username']; ?> <h3></div>
       <br><br>
        <div class="container">
            <br> <br><br><br>
            <div class="container">
              
                <div class="row">
                    <div class="col-lg-12 text-center border rounded bg-limit my-5">
                        <h1>My Cart</h1>
                    </div>

 <div class="col-lg-9">
     <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item_Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php 
  
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
        $sr=$key+1;
       
        echo"
        <tr>
        <td>$sr</td>
        <td> $value[name]</td>
        <td> $value[price] <input type='hidden' class='iprice' value='$value[price]'> </td>
        <td>
        <form action='../process/manage.php' method='POST'>
        <input type='hidden' name='name' value='$value[name]'>
        <input class='text-center iquantity' name='mod_quantity' onchange='this.form.submit();' type='number'  value='$value[Quantity]' min='1' max='10'>
        </form> 
        </td>
        <td class='itotal'> </td>
       
        <td>
        <form action='../process/manage.php' method='POST'>
        <button name='remove_item' type='submit' class='btn btn-sm btn-outline-danger'>Remove</button>
        <input type='hidden' name='name' value='$value[name]'>
        </form>
        </td>
        </tr>
        ";
    }
}
    ?>
   
   
  </tbody>
    </table>
</div>
            <div class="col-lg-3 mb-5">
                <div class="border bg-light rounded p-4 ">
                <h4 >Grand Total:</h4><br>
                <h5 class='text-right' id='gtotal' ></h5><br>

                <?php
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                {  ?> 
          
                <div class="">
                <br>
                 <button class="btn btn-primary btn-block text-center"
                 data-bs-toggle="offcanvas" data-bs-target="#purchase" 
                      aria-controls="offcanvas">Wallet Pay</button>
                      <form action="../process/add_order.php" method="POST">
                        <label for="">Enter your Number</label>
                        <input type="text" name="num" class="form-control">
                      <button type="submit" name="pay" id="btn" class="btn btn-primary">On Delivery</button>
                      </form>
            </div>
               
                <?php }?>
            </div>
            </div>

    </div>
    </div>


                    
   </tbody>
  </table>
  </div>
  
    </div>
    </div>
        
    
    <div class="foot mt-10">
        <h4>copyright@aashisrijal</h4>
    </div>

    <script>
        var gt=0;
        var iprice= document.getElementsByClassName('iprice');
        var iquantity= document.getElementsByClassName('iquantity');
        var itotal= document.getElementsByClassName('itotal');
        var gtotal= document.getElementById('gtotal');


        function subtotal(){
            for(var i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;

        }
        subtotal();
        </script>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="purchase" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" class="text-center">Pay Your bill Here</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="link">
    <a href="https://esewa.com.np/#/home"><img height="50px" width="50px" src="../img/esewa.png" alt=""></a>
    <a href="https://web.khalti.com/?csrt=10134818233029431245#/"><img height="50px" width="50px" src="../img/khalti.png" alt=""></a>
    <a href="https://services.imepay.com.np/"><img height="50px" width="50px" src="../img/ime.png" alt=""></a>
    </div>
   
    <br>
    <br>
    <p> Use QR Code for fast payment !</p>
    <img class="img" height="200px" width="200px" src="../img/qrr.jpg" alt="">
    <br><span class="span">ID : 9847749997</span>
    <p class="p">Thank you ! </p>
  </div>
</div>
<script>
    var btn = document.getElementById('btn');
    btn.addEventListener("click", function() {
        var email = prompt("Enter Your Valid Email");
        var add = prompt("Enter your Address");

        if (email !== null && email.trim() !== "" && add !== null && add.trim() !== "") {
            alert("Order Added to Queue");
        } else {
            alert("All fields are required");
        }

        window.location.href = '../forms/shop.php';
    });
</script>


</body>
<script src="../js/jquery-3.6.4.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scriptdet.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
</html>


