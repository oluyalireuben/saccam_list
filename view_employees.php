<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees</title>
</head>
<body>
    <table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>SALARY</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        <?php
        // Connect to the database to collect data
        $conn = mysqli_connect("localhost","root","","mbogi_three");
        // Create the select * query
        $select_query = "SELECT * FROM `employees` WHERE 1";

        // Write the query to execute the fetching

        $data = mysqli_query($conn,$select_query);
        // Loop through the data as you display them one by one
        while ($row = mysqli_fetch_assoc($data)){
            extract($row);
            //Start printing data which is now available on variable names
            //Same as the column in the database table
            echo "<tr>
                        <td>$jina</td>
                        <td>$arafa</td>
                        <td>$simu</td>
                        <td>$mshahara</td>
                        <td><a href='delete.php?xyz=$id'><button>Delete</button></a></td>
                        <td><a href='update.php?one=$id&two=$jina&three=$arafa&four=$simu&five=$mshahara'><button>Update</button></a></td>
                    </tr>";

        }

        ?>
    </table>
</body>
</html>































