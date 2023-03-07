<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Crud operation</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-12">
        <button class="btn btn-primary my-5">
          <a href="user.php" class="text-light">Add user</a>
        </button>

      </div>
      <div class="col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Password</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>

            <?php

            $sql = "SELECT * FROM crud";
            $result = mysqli_query($con, $sql);

            if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $name = $row["name"];
                $email = $row["email"];
                $mobile = $row["mobile"];
                $password = $row["password"];
                echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>
                <td>
                <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a onclick="return confirm(\'are you sure ?\');" href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                </td>
              </tr>';
              }
            } else {
              echo '<tr>
                <td colspan="6" align="center">No result</td>
              </tr>';
            }

            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>