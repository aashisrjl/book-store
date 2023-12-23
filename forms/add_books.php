<?php include('../msg/logincheck.php') ?>
<?php
include('../db/connect.php');
if ($_SESSION['role'] !== 'admin') {

    header('Location: shop.php'); // Redirect to an unauthorized page
    $errmsg="You are not admin";
    exit();
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book In Shop</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/index.css">
        <style>
            .add{
                align-items: center;
                padding:20px;
                margin: 0px 0px 0px 150px;
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 rounded bg-light add">
                <h2 class="text-center">Add More Shopping Frames</h2>
                <hr>
                <form action="../process/add_book.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Book Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
        
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Book Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Book Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword1" required>
                      </div>
                   
                    <!--This is for the details add --- -->
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Author Name</label>
                      <input type="text" name="author" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">description</label>
                        <input type="textarea" name="desc" class="form-control" id="exampleInputPassword1" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock_quantity</label>
                        <input type="text" name="stock" class="form-control" id="exampleInputPassword1" required>
                      </div>
       
                      <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>


            </div>
        </div>
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
