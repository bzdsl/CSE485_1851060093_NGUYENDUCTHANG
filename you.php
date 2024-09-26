<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location:login.php");
}
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-style.css">
    <style>

    </style>
</head>

<body>
    <!--------------------------------- NAVBAR ------------------------------------>
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container-fluid">
            <a href="admin.php?id=<?php echo $id; ?>>" class="navbar-brand"><img src="img/Flickr_logo.png" class="logo" alt=""></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="you.php?id=<?php echo $id; ?>">You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Prints</a>
                    </li>
                </ul>
            </div>

            <form class="d-flex">
                <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search">
                <a class="me-5" href="admin/upload-photo.php?id=<?php echo $id; ?>"><i class="fas fa-upload"></i></a>
                <a href="admin/contact.php?id=<?php echo $id; ?>"><i class="fas fa-paper-plane me-5"></i></a>
                <a href="you.php?id=<?php echo $id; ?>"><img class="avatar me-5 " src="img/hhh.PNG" alt=""></a>
                <a href="process-logout.php"><i class="fas fa-sign-out"></i></a>
            </form>

        </div>
    </nav>

    <?php require_once "config/config.php"; ?>
    <div class="container">
        <?php
        $sql1 = "SELECT * FROM tbl_user where id='$id'";
        $res1 = mysqli_query($conn,  $sql1);
        $row12 = mysqli_fetch_assoc($res1)
        ?>


        <div class="container mt-3">
            <div class="row">
                <div class="">Full name: <?php echo $row12['lname'];
                                            echo " ";
                                            echo $row12['fname']; ?></div>
                <div class="">
                    <div class="">Age: <?= $row12['age'] ?></div>
                </div>
                <div>
                    <div class="">Email: <?= $row12['email'] ?></div>
                </div>
                <a class="link-danger" href="update.php?id=<?php echo $id; ?>">Change info</a>

            </div>
        </div>
        <hr>
        <div class="container display">
            <?php
            $sql = "SELECT * FROM images where idkhach='$id'";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {  ?>

                    <div class="alb">
                        <img src="img/upload/<?php echo $row['image_url']; ?>">
                        <p class="text-center mt-1"><?php echo $row["title"] ?></p>

                        <form action="admin/delete-img.php?id=<?php echo $id; ?>" method="POST">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="delete_url" value="<?php echo $row['image_url']; ?>">
                            <input type="hidden" name="delete_title" value="<?php echo $row['title']; ?>">
                            <button type="submit" name="submit" href="" class="btn btn-sm btn-danger ">Delete</button>
                        </form>

                    </div>

            <?php }
            } ?>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-black text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->

        </div>
        <!--Grid row-->

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>