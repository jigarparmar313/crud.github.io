<?php

$servername  = "localhost";
$username = "root";
$password = "";
$db = "crudyoutube";

$con = mysqli_connect($servername, $username, $password,$db);

if($con)
{
    // echo ("Connection Successful");
    ?>
    
    <script>
        alert("Connection Successfull");
        </script>
    
    <?php
}
else
{
    echo ("Connection failed");
}


?>  