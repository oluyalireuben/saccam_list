<?php

        //Check if the button update has been clicked
if (isset($_POST['btn_update'])){
        //Start receiving data from the user

    $id = $_POST['v'];
    $name = $_POST['w'];
    $email = $_POST['x'];
    $phone = $_POST['y'];
    $salary = $_POST['z'];

        //To connect, Connect to the database

    $conn = mysqli_connect("localhost","root","","mbogi_three");

        //Write the update query
    $update_query= "UPDATE `employees` SET `jina`='$name',`arafa`='$email',`simu`='$phone',`mshahara`='$salary' WHERE id='$id'";

    //Execute the update query
    $update = mysqli_query($conn,$update_query);

    //Write an if statement to check if the updating was successful

    if ($update){
        //Redirect back to the view_users.php to see the changes
        header("location:view_employees.php");
    }else{
        echo "Updating failed";
    }



}





























