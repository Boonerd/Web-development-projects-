<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Disply users</title>
</head>
<body>
  <a href="registration.php">Register</a>
  <h1>Reigistered Users</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

  <?php
  // retrieve data from database
  $sql= "SELECT * FROM register";
  $result = mysqli_query($connect,$sql);
  if ($result){
    while ( $row=mysqli_fetch_assoc($result)) {
      $id =$row['id'];
    $name =$row ['name'];
      $password=$row['password'] ;
      echo "<tr><th scope='row'>$id</th>
                 <td>$name</td>
                 <td>$password</td>
                 <td><button><a href ='delete.php?deleteid=$id'>Delete</a></button></td>
                 <td><button><a href ='update.php?updateid=$id'>Update</a></button></td>
                 </tr>";

    }
  }

  //echo $row ['name'];
  ?>
    <!--tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>