<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Title</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="Homepage.php">
            <img src="../Photos/Logo.png" alt="Beta Academy" width="45">
            Beta Academy
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">C++</a></li>
                        <li><a class="dropdown-item" href="#">C++/OOP</a></li>
                        <li><a class="dropdown-item" href="#">Matlab</a></li>
                        <li><a class="dropdown-item" href="#">Robotics</a></li>
                        <li><a class="dropdown-item" href="#">Autocad</a></li>
                        <li><a class="dropdown-item" href="#">Solidworks</a></li>
                        <li><a class="dropdown-item" href="#">Automotive</a></li>
                        <li><a class="dropdown-item" href="#">Revit</a></li>
                        <li><a class="dropdown-item" href="#">Photoshop</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="All-Courses.php">See All</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-1" href="#">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:300px;">
                <button class="btn btn-outline-vintage" id="button" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mx-3 mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        👤 <?php echo $_SESSION["user"]?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">View Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>

<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">👤 --><?php //echo $_SESSION["user"]?><!--</a>-->
<!--            </li>-->
            </ul>
        </div>
    </div>
</nav>
</body>
</html>