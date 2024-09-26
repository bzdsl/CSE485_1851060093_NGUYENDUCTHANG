<?php
include '../config/config.php';

session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
}
$idkhach = $_GET['id'];
$errors = array(); // Initialize an error array. 

$query2 = mysqli_query($conn, "select * from tbl_user where id='$idkhach'");
$row2 = mysqli_fetch_array($query2);

if (isset($_POST['update_user'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sql = "UPDATE tbl_user SET lname='$lname', email='$email', age='$age', fname='$fname'  WHERE id='$idkhach'";
    //#4
    mysqli_query($conn, $sql);
    $url = "success.php";
    header('location:' . $url);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Update form</h1>
        <form method="POST" class="form-center" id="form-1">
            <div class="form-group">
                <label for="lname">First name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $row2['fname']; ?>">
            </div>
            <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" name="lname" value="<?php echo $row2['lname']; ?>">
            </div>
            <div class="form-group">
                <label for="lname">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row2['email']; ?>">
            </div>
            <div class="form-group">
                <label for="lname">Age</label>
                <input type="text" class="form-control" name="age" value="<?php echo $row2['age']; ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-primary mt-3" name="update_user">Update</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>