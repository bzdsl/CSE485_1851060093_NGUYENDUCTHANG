<?php
include 'config/config.php';
$id = $_GET['id'];
$errors = array(); // Initialize an error array. 


$query2 = mysqli_query($conn, "select * from tbl_user where id='$id'");
$row2 = mysqli_fetch_array($query2);



if (isset($_POST['update_user'])) {


    $mk1 = $_POST['mk'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE tbl_user SET email='$email', fname='$fname',  lname='$lname', age='$age' WHERE id='$id'";

    mysqli_query($conn, $sql);
    $url = "you.php?id=" . $id;
    header('location:' . $url);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Change profile</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Change profile</h1>
        <form method="POST" class="form" id="form-1">
            <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" name="lname" value="<?php echo $row2['lname']; ?>">
            </div>
            <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $row2['fname']; ?>">
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" name="email" value="<?php echo $row2['email']; ?>">
            </div>
            <div class="form-group">
                <label for="age"></label>
                <input type="text" class="form-control" name="age" value="<?php echo $row2['age']; ?>">
            </div>
            <button name="update_user" class="btn btn-primary">Change</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>