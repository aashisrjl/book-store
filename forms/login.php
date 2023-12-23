<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/signup.css">
<style>
 
    .card{
        margin-left: 55%;
        margin-top: 20%;
    }
    input{
        margin-bottom: 20px;
    }
    label{
        margin-bottom: 5px;
    }
    body{
        background-color:purple;
    }

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 main">
                <div class="card">
                
                    <h3>Login Form</h3>
                    <?php include('../msg/errmsg.php'); ?>
                    <?php include('../msg/successmsg.php'); ?>
                
                
                <div class="card-body">
    
                 <form action="../process/loginprocess.php" method="post">
                            
                    <label for="email" class="from-label">Email :</label>
                    <input type="text" name="email" class="form-control">
    
    
                    <label for="password" class="from-label">Password :</label>
                    <input type="password" name="password" class="form-control">
    </hr>
    <button type="submit" class="btn btn-success">Login</button>

    <p id="conf">Don't have an Account ? <a href="signup.php">signup</a></p>
    <p id="conf" style="color:'red';"> <a href="index.php">Visit Website Without login !</a></p>


    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    
</body>
<script src="../js/bootstrap.min.js"></script>
</html>