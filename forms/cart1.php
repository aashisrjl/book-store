
<?php/* include('../msg/logincheck.php') ?>

<?php
include('../db/connect.php');
$query= "SELECT * FROM buy where `name` IS NOT NULL";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

</head>
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
    .total{
        border:3px solid black;
        padding:20px;
        margin:10px 10px 20px 10px;
        box-shadow:3px 2px 1px black;
        margin-left:100px;
    }
    .total h1{
        color:green;
        font-size:30px;
        text-shadow:3px 2px 1px green;  
    }
    .total li{
        border:3px green dashed;
        font-weight:bold;
        padding:10px;
        margin-top:20px;
    }
    .total h3{
        color:red;
        margin-top:20px;
        text-shadow:3px 2px 1px green; 
        border:2px solid gray;
        padding:10px;

    }
    .total span{
        color:green;
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
            <li id="h1" class="contact"><a href="contact.php">contact</a></li>
            <li id="reg">Register</li>
        </ul>
    </div>
        </div>
    </div>
    <div class="cont">
        <h1>Your Shopping Cart</h1>
    </div>
    
    <div class="con">
        <div class="container">
            <br> <br><br><br>

    <div class="row">
    <div class="col-6 col-md-center">
     <table class="table">
      <thead class="text-center">
     <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"> Action</th>
    </tr>
     </thead>
     <tbody>  
         <?php while($row= mysqli_fetch_assoc($result)){ ?> 
               <tr>
               <td> <?php echo $row['name']; ?> </td>
               <td> <?php echo $row['price']; ?> </td>
               <td> <?php echo $row['quantity']; ?> </td>
               <td> hello </td>
             </tr>
          <?php } ?>
                    
   </tbody>
  </table>
  </div>
   <?php
  // $total=mysqli_fetch_assoc($result);
  // $amount= $total['price'];
  // $all= $amount + ($amount - 1); 
   ?>
         
           
               
     <div class="col-4">
         <div class="total">
             <h1>Total Amount </h1> 
               
         <?php while($row= mysqli_fetch_assoc($result)){ ?> 
               <ul>
               <li> <?php echo $row['name']; ?> </li>
         </ul>
          <?php } ?>
                    
               
            <h3> Total Price : <span>1500.00  </span></h3>
         </div>

        </div>
    </div>
    </div>
        
    
    <div class="foot">
        <h4>copyright@aashisrijal</h4>
    </div>


</body>
<script src="../js/jquery-3.6.4.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scriptdet.js"></script>
</html>


