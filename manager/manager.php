<?php
include '../config/config.php';
session_start();
if (!isset($_SESSION['login'])) {
  header("location:index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Manager</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav style="background-color:#47bdec;">
    <a style="display:inline-block; padding:10px; font-size:25px; color:white; text-decoration:none;" href="#">Manager</a>
    <a href="logout.php"><i class="fas fa-sign-out "></i></a>

  </nav>
  <br><br><br>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>Last name</th>
          <th>First name</th>
          <th>Email</th>
          <th>Age</th>
          <th></th>
        </tr>
      </thead>
      <?php

      $query = mysqli_query($conn, "select * from tbl_user");

      while ($row = mysqli_fetch_array($query)) {

      ?>
        <tbody>
          <tr>
            <td scope="row"><?php echo $row['lname'] ?></td>
            <td scope="row"><?php echo $row['fname'] ?></td>
            <td scope="row"><?php echo $row['email'] ?></td>
            <td scope="row"><?php echo $row['age'] ?></td>

            <td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </td>

          </tr>
        </tbody>
      <?php
      } ?>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>