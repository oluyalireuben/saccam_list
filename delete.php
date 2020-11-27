<?php

if (isset($_GET['xyz'])){
    extract($_GET);
    //To start deleting connect to the database
    $conn = mysqli_connect("localhost","root","","mbogi_three");

    //   Create the delete query
    $delete_query = "DELETE FROM `employees` WHERE id='$xyz'";

    //    Write the query to execute the deletion

    $delete = mysqli_query($conn,$delete_query);
    //    Write an if statement to check if the deletion was successful

    if ($delete){
    //    Redirect to view_employees.php to see if the record was deleted
        header("location:view_employees.php");
    }else{
        echo "Deleting Failed";
    }
}













































