<?php include('../db/connect.php');
    $query="SELECT * FROM books where title is not null";
    $result = mysqli_query($conn,$query);

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
    .con h2{
        margin-top: 50px;
    }
    ol li{
        padding: 20px;
        font-family: cursive;
        font-weight: bold;
    }
    .foot{
        background-color: brown;
        text-align: center;
        font-weight: bold;
        font-family: cursive;
        padding: 20px;
    }
    .container h2{
        margin-bottom: 50px;
    }
    .book{
        text-align: center;
        align-items: center;
        margin-top: 30px;
        padding: 20px;
    }
    .book label,input,button{
        font-weight: bold;
        font-family: cursive;
        border-radius: 30px;
    }
    .book button{
        background-color: green;
    }
    .msg{
    width: 400px !important;
    text-align: center;
    align-items: center;
    margin-left:35%;
  }
  .row{
    justify-content:center;
  }
  .x{
   text-align:center;
  }
  .y{
    text-align:center;
    font-weight:bold;
    font-family:cursive;
    color:red;
    box-shadow: 3px 5px 2px 5px white;
    font-size:20px;
  }
  ol li{
    font-size:20px;

  }
  ol{
    list-style:none;
  }
  .x h2{
    text-shadow:3px 2px black;
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
        <h1>Books</h1>
    </div>
    
    <div class="con">
        <div class="container" data-aos="zoom-in">
            <br>
            <div class="row y rounded">
            <h2>List of Different Old and New books</h2>
            </div>
            <div class="row">
        <div class="col-6 x">
        <h2>New Books:</h2>
        <ol>
        <?php while($row= mysqli_fetch_assoc($result)){ ?> 
                        <li><?php echo $row['title']; ?> </li>
                        <?php } ?>

                      
            
        </ol>
        </div>
        <?php
        $queryy="SELECT * FROM booklist where list is not null";
        $resultt=mysqli_query($conn,$queryy);
        ?>
        <div class="col-6 x">
        <h2>Old Books:</h2>
        <ol>
        <?php while($roww= mysqli_fetch_assoc($resultt)){ ?> 
                        <li><?php echo $roww['list']; ?> </li>
                        <?php } ?>
        </ol>
        </div>
        </div>
        <div class="book">
            <form action="../process/booklist.php" method="POST">
            <p>Only Admin can add book !</p>
            <div class="msg">
            <?php include('../msg/errmsg.php'); ?>
             <?php include('../msg/successmsg.php'); ?>
            </div>
            <label for="data">ADD Books:</label>
            <input type="text" name="book" placeholder="Book Name">
            <button type="submit">Add</button>
            </form>
            <br> <br>

        </div>

    </div>
    </div>
    <div class="foot">
        <h4>copyright@aashisrijal</h4>
    </div>


</body>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
</html>


