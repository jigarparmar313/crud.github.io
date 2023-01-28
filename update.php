<?php include 'links.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 4 example</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container mt-5">
        <form action="" method="POST">






            <?php

            include('connection.php');


            $id = $_GET['id'];

            $showquery = "select * from  jobregistration where id=$id";

            $showdata = mysqli_query($con, $showquery);

            $arrdata = mysqli_fetch_array($showdata);



            /*  
            $_POST 
            it is a php super global variable which is used to collect form data after submitting 
            an html form with method = "post".
            
            */

            if (isset($_POST['submit'])) {

                // $idupdate = $_GET['id'];
                $name = $_POST['name'];
                $degree = $_POST['degree'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $refer = $_POST['refer'];
                $jobpost = $_POST['jobpost'];

                // $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost)
                //    values('$name','$degree','$mobile','$email','$refer','$jobpost')";


                $updatequery = " update jobregistration set id='$id', name='$name', degree='$degree', mobile='$mobile',
                                email='$email', refer='$refer', jobpost='$jobpost' where id=$id ";

                $result = mysqli_query($con, $updatequery);

                if ($result) {

                    ?>

                    <script>
                        alert("data updated properly");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("data not updated properly");
                    </script>
                    <?php
                }


            }

            


            ?>









            <div class="row jumbotron box8">
                <div class="col-sm-12 mx-t3 mb-4">
                    <h2 class="text-center text-info">
                        Update Application of Web Developer Post
                    </h2>
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="name-f">FirName</label> -->
                    <input type="text" class="form-control" name="name" id="name-f" value="<?php echo $arrdata['name']?>" placeholder="Enter your first name."
                        required />
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="name-l">Last name</label> -->
                    <input type="text" class="form-control" name="degree" id="name-l" value="<?php echo $arrdata['degree']?>"
                        placeholder="Enter your qualification" required />
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="number" class="form-control" name="mobile" id="number" value="<?php echo $arrdata['mobile']?>" placeholder="Enter your number."
                        required />
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="address-1">Address Line-1</label> -->
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $arrdata['email']?>" placeholder="email id" required />
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="address-2">Address Line-2</label> -->
                    <input type="text" class="form-control" name="refer" id="reference" value="<?php echo $arrdata['refer']?>" placeholder="any reference"
                        required />
                </div>
                <div class="col-sm-6 form-group">
                    <!-- <label for="State">State</label> -->
                    <input type="text" class="form-control" name="jobpost" id="post" value="<?php echo $arrdata['jobpost']?>" value="Web Developer"
                        placeholder="Web Developer" required />
                </div>

                <div class="col-sm-6 form-group mb-0">
                    <a href="display.php" class="btn btn-outline-info text-dark float-left">
                        <!-- <input type="submit" name="submit" id="" value="Check form" class="btn btn-outline-info text-dark float-left" > -->
                        Check form
                    </a>

                    <!-- <button class="btn btn-outline-info text-dark float-left">
              Check form
            </button> -->
                </div>
                <div class="col-sm-6 form-group mb-0">
                    <input type="submit" name="submit" id="" value="Update"
                        class="btn btn-outline-primary text-dark float-right">
                    <!-- <button class="btn btn-outline-primary text-dark float-right">
              Register
            </button> -->
                </div>
            </div>
        </form>
    </div>
</body>

</html>

