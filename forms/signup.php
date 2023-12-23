
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/signup.css">
<style>
    body{
        background-color:purple;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 justify-content-col-md-center">
                <div class="card">
                
                    <h3>SignUp Form</h3>
                    <?php include('../msg/errmsg.php'); ?>
                    <?php include('../msg/successmsg.php'); ?>
                
                
                <div class="card-body">
    
                 <form action="../process/signuprocess.php" method="post">

                   <label for="fullname" class="from-label">FullName :</label>
                    <input type="text" name="username" class="form-control" placeholder="example rijal" required>
                            
                    <label for="email" class="from-label">Email :</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>

                    <label for="email" class="from-label">Role :</label>
                    <input type="text" name="role" class="form-control" placeholder="admin or customer" required>
    
                    <label for="password" class="from-label">Password :</label>
                    <input type="password" name="password" class="form-control" placeholder="@Aashis123" required>

                    <label for="password" class="from-label">Password Confirmation :</label>
                    <input type="password" name="passwordC" class="form-control" required>
    </hr>
    <button type="submit" class="btn btn-success">signup</button>
    <p id="conf">Alredy have an Account ? <a href="login.php">login</a> <br><a href="index.php">Skip</a></p>

    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    
</body>
<script src="../js/bootstrap.min.js"></script>
</html>
