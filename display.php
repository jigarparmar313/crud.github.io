<?php

include('connection.php');

include('links.php');


?>


<!-- first create selectquery -->



<!DOCTYPE html>
<html>

<head>
  <title>Display Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 	<link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<link rel="stylesheet" href="css/style.css">

<table class="table">
  <h3 class="text-center table-success rounded-4 mb-5" style="width: 60%; margin: auto;">List of candidates for web development
    job</h3>

  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>DEGREE</th>
    <th>MOBILE</th>
    <th>EMAIL</th>
    <th>REFER</th>
    <th>JOBPOST</th>
    <th colspan="2">OPERATION</th>
  </thead>

  <tbody>



    <?php

    $selectquery = " select * from jobregistration ";

    $query = mysqli_query($con, $selectquery);

    $nums = mysqli_num_rows($query);

    // echo $nums;
    
    // this mysqli_num_rows query is used to fetch the no of rows in db
    
    // $res = mysqli_fetch_array($query);
    
    // echo $res[0];
    
    while ($res = mysqli_fetch_array($query)) {
      // echo $res['email'] . "<br>";
    ?>    


    <tr>
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['degree']; ?></td>
      <td><?php echo $res['mobile']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['refer']; ?></td>
      <td><?php echo $res['jobpost']; ?></td>
      <td><a href="update.php?id=<?php echo $res['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="UPDATE">
        <i class="fa fa-edit" style="color:green;" aria-hidden="true"></a></i> </td>
        <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="DELETE">
        <i class="fa fa-trash" style="color:red;" aria-hidden="true"></a></i>
      </td>
    </tr>



    <!-- <tr>
      <td data-label="S.No">1</td>
      <td data-label="Name">Dinesh</td>
      <td data-label="DEGREE">34</td>
      <td data-label="MOBILE">50%</td>
      <td data-label="REFER">Passed</td>
      <td data-label="POST">Passed</td>
      <td data-label="POST">
        <i class="fa fa-edit mr-5" aria-hidden="true"></i>
        <i class="fa fa-trash ml-5" aria-hidden="true"></i>
      </td>
    </tr> -->
    <?php

    }


    

    ?>








  </tbody>
</table>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

</body>

</html>