<?php

    include 'connect.php';
        $id_n=$_GET['updateid'];
        $sql="select * from `stuff` where id=$id_n";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $id=$row['id'];
        $name=$row['first_name'];
        $lastname=$row['last_name'];
        $email=$row['email'];
        $address=$row['address'];
        

    if(isset($_POST['submit'])) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $sql="update `stuff` set id=$id, first_name='$name', last_name='$lastname', email='$email', address='$address' where id=$id_n";

        $result=mysqli_query($con, $sql);
        if($result){
            echo "successfuly update";
        }else{
            die("not updated");
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
    <div class="container my-5">
    <form method="post">
                  
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" class="form-control" placeholder="enter your id" name="id" autocomplete="off", 
                    value=<?php
                    echo $id;
                    ?>>
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="enter customer name" name="name" autocomplete="off"
                    value=<?php
                    echo $name;
                    ?>>
                  </div>  
                 
                  <div class="form-group">
                    <label>Last_Name</label>
                    <input type="text" class="form-control" placeholder="enter customer lastname" name="lastname" autocomplete="off"
                    value=<?php
                    echo $lastname;
                    ?>>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="enter customer email" name="email" autocomplete="off"
                    value=<?php
                    echo $email;
                    ?>>
                  </div>

                  <div class="form-group">
                    <label>Add</label>
                    <input type="text" class="form-control" placeholder="enter your address" name="address" autocomplete="off"
                    value=<?php
                    echo $address;
                    ?>>
                  </div>

                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
                  
    </div>
    
  </body>
</html>
       