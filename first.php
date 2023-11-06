<?php

    include 'connect.php';

    if(isset($_POST['submit'])) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $sql="insert into `stuff` values('$id', '$name', '$lastname', '$email', '$address')";

        $result=mysqli_query($con, $sql);
        if($result){
            header('location:display.php');
        }else{
            die("not inserted");
        }
    }
?>
        <!doctype html>
        
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Body building</title>
  </head>
  <body>
    <h1>welcome to my first program</h1>
    <div class="container my-5">
    <form method="post">
                  
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" class="form-control" placeholder="enter your id" name="id" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="enter customer name" name="name" autocomplete="off">
                  </div>  
                 
                  <div class="form-group">
                    <label>Last_Name</label>
                    <input type="text" class="form-control" placeholder="enter customer lastname" name="lastname" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="enter customer email" name="email" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label>Add</label>
                    <input type="text" class="form-control" placeholder="enter your address" name="address" autocomplete="off">
                  </div>

                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                  
    </div>
    
  </body>
</html>
       