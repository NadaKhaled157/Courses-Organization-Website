<?php //
//include 'db.php';
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>User Records</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="courses-db";

// Create Connection
$conn= new mysqli($servername, $username, $password,$dbname);
// Check Connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query= "SELECT * FROM users";
$result= $conn->query($query);

include 'admin-nav.php';
session_start();
if(isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
unset($_SESSION["alert"]);
}
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">User ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Modify</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($result->num_rows>0){
        while ($user = $result->fetch_assoc()){
            echo "
            <tr>
        <th scope='row''> ". $user['id'] ." </th>
        <td>".$user['firstname']."</td>
        <td>".$user['lastname']."</td>
        <td>".$user['email']."</td>
        <td>".$user['pass']."</td>
        <td><a class='btn btn-vintage m-1 m-lg-2'>Edit</a><a href='delete.php?id=".$user['id']."' class='btn btn-danger m-1 m-lg-2'>Delete</a></td>
    </tr>
    ";
        }
    }
    ?>
    </tbody>
</table>
</body>
</html>

<!--INSERT INTO users (firstname, lastname,email,pass) VALUES ('test', 'user', 'test@gmail.com', '123');-->

