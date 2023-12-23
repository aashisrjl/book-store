<?php
include('../db/connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['name'])&& isset($_POST['price'])){

         $name= $_POST['name'];
         $price =$_POST['price'];

         $temp_name= $_FILES['image']['tmp_name'];
         $filesize= $_FILES['image']['size'];
         $filetype= $_FILES['image']['type'];
         $filename= $_FILES['image']['name'];

         move_uploaded_file($temp_name,'../img/'.$filename);
         $query="INSERT INTO add_shop(image,name,price) VALUES('$filename','$name','$price')";
         if(mysqli_query($conn,$query))
         {
             $msg= "Saved";
         }else{
             $errmsg= mysqli_error($conn); 

         }
    } else{
        $msg="all field are required in shop add";
    }

     //   for adding book description in datial.php //

    if(isset($_POST['name'])&& isset($_POST['author'])&& isset($_POST['desc']) && isset($_POST['stock']) && isset($_POST['price'])){

     $title=$_POST['name'];
     $author=$_POST['author'];
     $desc=$_POST['desc'];
     $stock=$_POST['stock'];
     $pricee =$_POST['price'];

     // retrieve price from table add_shop//
    $query=" INSERT INTO `books` (`book_id`, `title`, `author`, `description`, `price`, `category_id`, `stock_quantity`) VALUES (NULL, '$title', '$author', '$desc', '$pricee', '1', '$stock'); ";
    if(mysqli_query($conn,$query)){
        $msg="Saved";
    }else{
        $errmsg= mysqli_error($conn); 
    }

    }else{
        $errmsg="field required for add details in book";
    } 



}else{
    $errmsg="POST method required";
}

    
    if($msg!=" ")
    {
    header('Location:../forms/shop.php?msg='.$msg);
    }
    else{
    header('Location:../forms/add_books.php?errmsg='.$errmsg);
    }


?>