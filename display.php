<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud opertation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

</head>


<body>

  <div class="container">
    <button class="btn btn-primary my-5"><a href="first.php" class="text-light">Add User</a></button>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email</th>
          <th scope="col">Add</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>

      <tbody>


        <?php

        $sql = "select * from `stuff`";
        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['id'];
            $name = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];
            $add = $row['address'];

            echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $lastname . '</td>
        <td>' . $email . '</td>
        <td>' . $add . '</td>
        <td>
        <button class="btn btn-primary">
          <a href="update.php? updateid='.$id.'" class="text-light">
              Update
          </a>
        </button>
        <button class="btn btn-danger">
        <a href="delete.php? deleteid='.$id.'" class="text-light">
              Delete
          </a>
        </button>
      </td>
        </tr>';

          }
        }
        ?>



      </tbody>
    </table>

  </div>
</body>

</html>