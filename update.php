<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
<?php
if (isset($_GET['one'])){
    extract($_GET);
}
?>
<form action="update_handler.php" method="post">
    <input type="hidden" name="v" value="<?php echo $one; ?>">
    <input type="text" placeholder="Enter Name" name="w" value="<?php echo $two; ?>"><br><br>
    <input type="email" placeholder="Enter Email" name="x" value="<?php echo $three; ?>"><br><br>
    <input type="text" placeholder="Enter Phone Number" name="y" value="<?php echo $four; ?>"><br><br>
    <input type="text" placeholder="Enter Salary" name="z" value="<?php echo $five; ?>"><br><br>
    <input type="submit" value="Update" name="btn_update">
</form>
<a href="view_employees.php">Back</a>
</body>
</html>













