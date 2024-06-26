<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Login or Signup</title>
</head>
<body>
<div class="card mx-auto mt-2 col-sm-6" style="width: 25rem;">
    <a href="Homepage.php"><img src="Photos/Logo.jpg" class="card-img-top" alt="Beta Academy Logo"></a>
    <div class="card-body">
        <h2 class="text-center"><strong>Welcome<br>Back!</strong></h2>
        <br>
        <h5 class="card-title">LOGIN</h5>
        <br>
        <form action="login-server.php" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
        </div>
            <?php
            session_start();
            if(isset($_SESSION["error"])){
                echo "<p style='margin-top: -15px; margin-bottom: 2px; margin-left:10px; color: #de0000; font-weight: bold; font-size: 13px;'>" . $_SESSION["error"] . "</p>";
//                echo "<a href='#' style='margin-left:10px;'>" . "Forgot my password!" . "</a>";
                unset($_SESSION["error"]);
            }
            ?>
<!--        <a href="#" class="btn btn-vintage d-block mx-auto">LOGIN</a>-->
            <input type="submit" class="btn btn-vintage d-block mx-auto" style="width:100%;" value="LOGIN">
        </form>
        <h6 class="mt-1">Don't have an account? <a href="Signup.html">Sign Up Now!</a></h6>
    </div>
</div>

<!--<div class="card flex-row flex-wrap" style="width: 18rem;">-->
<!--    <div class="card-header border-0">-->
<!--        <img class="logo" src="../Photos/Logo.jpg" alt="" />-->
<!--    </div>-->
<!--    <div class="card-block px-2">-->
<!--        <h4 class="card-title">Title</h4>-->
<!--        <p class="card-text">Description</p>-->
<!--        <a href="#" class="btn btn-primary">BUTTON</a>-->
<!--    </div>-->
<!--    <div class="w-100"></div>-->
<!--    <div class="card-footer w-100 text-muted">-->
<!--        FOOTER-->
<!--    </div>-->
<!--</div>-->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>