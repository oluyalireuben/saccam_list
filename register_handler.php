<?php
        //Check if the button save has been clicked
if (isset($_POST['btn_save'])){
    //Start receiving data fro the user
    $name = $_POST['w'];
    $email = $_POST['x'];
    $phone = $_POST['y'];
    $salary= $_POST['z'];
    //To save your data, start by connecting to the db
    $conn = mysqli_connect("localhost","root","","mbogi_three");

    //Create the query to insert the data
    $insert_query = "INSERT INTO `employees`(`id`, `jina`, `arafa`, `simu`, `mshahara`) 
                                    VALUES (null,'$name','$email','$phone','$salary')";

    //Finally execute the saving query
    $save = mysqli_query($conn,$insert_query);
    //Check if saving was successful

    if ($save){
        // Go back to save another record
        header("location:register.php");
    }else{
        die("Saving Failed".mysqli_connect_error() );
    }
}
























