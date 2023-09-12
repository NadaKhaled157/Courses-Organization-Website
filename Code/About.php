<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION["user"])) {
    include 'logged-nav.php';
} else {
    include 'nav-bar.php';
}
echo "<span class='d-inline-block' tabindex='0' data-bs-toggle='popover' data-bs-trigger='hover focus' data-bs-content='Disabled popover'>
  <button class='btn btn-primary' type='button' >Disabled button</button>
</span>";
echo "<button type='button' class='btn btn-secondary' data-bs-container='body' data-bs-toggle='popover' data-bs-placement='bottom' data-bs-content='Bottom popover'>
  Popover on bottom
</button>"
?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


