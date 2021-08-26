<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Welcome</title>
    <?php include'links/links.php' ?>
    <?php include'css/styles.php' ?>
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/image.svg" alt=""/>
                <h3>Welcome</h3>
                <p>Please fill all the details carefully. This form can change your life.</p>
                <a href="display.php">Check Form</a> <br>
                <a href="logout.php">Log Out</a> <br>
            </div>

            <div class="col-md-9 register-right">
                <h3 class="register-heading">Update for PHP Developer Post</h3>
                <div class="sesion"><h4>admin: <?php echo $_SESSION['username']; ?></h4></div>
                <div class="form-for-applicant">
                <form action="" method="POST">
                            <div class="row registration-form">
                                    <?php

                                    include 'connection.php';
                                        $ids = $_GET['id'];

                                        $showquery = "select * from jobsregistration where id={$ids}";

                                        $showdata = mysqli_query($con,$showquery);

                                        $arrdata = mysqli_fetch_array($showdata);

                                    // For INSERT query
                                    if(isset($_POST['submit'])){
                                        $idupdate = $_GET['id'];
                                        $name = $_POST['user'];
                                        $degree = $_POST['degree'];
                                        $mobile = $_POST['mobile'];
                                        $email = $_POST['email'];
                                        $refer = $_POST['refer'];
                                        $jobprofile = $_POST['jobprofile'];

                                        // $insertquery = "insert into jobregistration(name, degree, mobile, email, refer, jobpost) values ('$name','$degree','$mobile','$email','$refer','$jobprofile')";
                                        
                                        
                                        $query = "update jobsregistration set id=$idupdate, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile' where id=$idupdate";   


                                        $res = mysqli_query($con,$query);

                                        if($res){
                                            ?>
                                            <script>
                                                alert("Data updated successfully");
                                            </script>
                                            <?php
                                        }else{
                                            ?>
                                            <script>
                                                alert("Data is not updated");
                                            </script>
                                            <?php
                                        }
                                        }
                                    ?>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Entery your name *" name="user" value="<?php echo $arrdata['name'];?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mobile number *" name="mobile" value="<?php echo $arrdata['mobile'];?>"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Any references *" name="refer" value="<?php echo $arrdata['refer'];?>" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your qualification *" name="degree" value="<?php echo $arrdata['degree'];?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email id*" name="email" value="<?php echo $arrdata['email'];?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Web Developer *" name="jobprofile" value="<?php echo $arrdata['jobpost'];?>" required />
                                    </div>
                                    <input type="submit" class="btnRegister" name="submit" value="Update" />
                                </div>
                            </div>
                        </form>

                </div>

            </div>
               
        </div>
    </div>
</body>
</html>

