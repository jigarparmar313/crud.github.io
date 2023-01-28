<?php

include('connection.php');


$id = $_GET['id'];

$deletequery = " delete from jobregistration where id=$id";

$deletedata = mysqli_query($con, $deletequery);
 


if($deletedata)
{
    ?>

     <script>
        alert("Deleted Successfully");
     </script>


    <?php 


} else{

    ?>

    
<script>
        alert("Not Deleted");
     </script>


    <?php
}







header('location:display.php');



?>