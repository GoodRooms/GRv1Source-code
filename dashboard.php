<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - GoodRooms</title>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<center>
    <h1 class="my-5">Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>
        Client will be later
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
    </p>
    </center>
</body>
</html>