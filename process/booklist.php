<?php include('../db/connect.php'); ?>
<?php

if ($_SESSION['role'] !== 'admin') {
    $errmsg="You are not admin";
    header('Location: ../forms/book.php?errmsg='.$errmsg); // Redirect to an unauthorized page
    exit();
    
}else{
    $msg="Successfully added";
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['book']) && isset($_POST['pass'])){

        $book=$_POST['book'];
        $pass=$_POST['pass'];

       // if(($pass)=="12345"){
        $query= "INSERT INTO booklist (list) VALUES ('$book')";
        if(mysqli_query($conn,$query)){
            $msg="Saved";
        }
        else{
            $errmsg="error occured in query";
        }
   // }else{
        $errmsg="keyword not match";
    //}

    }else{
        $errmsg="field required";
    }

}else{
    $errmsg="get request not support";
}

if($msg)
{
    header("Location:../forms/book.php?msg=".$msg);

  /*  echo "
    <script>
    alert('$msg');
    </script>
    "; */
}
else{
 /*   echo "
    <script>
    alert('$errmsg');
    </script>
    "; */
    header("Location:../forms/book.php?errmsg=".$errmsg);



}