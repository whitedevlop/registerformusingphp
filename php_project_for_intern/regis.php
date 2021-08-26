<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internproject | Welcome</title>
    <?php include 'css/styles.php' ?>
    <?php include 'links/links.php' ?>
</head>
<body>

<?php
    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email =  mysqli_real_escape_string($con,$_POST['email']);
        $mobile =  mysqli_real_escape_string($con,$_POST['mobile']);
        $password =  mysqli_real_escape_string($con,$_POST['password']);
        $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);
         
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registrations where email='$email'";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            ?>
            <script>
                alert("email already exist");
            </script>
            <?php
             
        } else{
            if($password === $cpassword){
                $insertquery = "insert into registrations(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass' )";

                $iquery = mysqli_query($con, $insertquery);

                if($iquery){
                    ?>
                    <script>
                        alert("Inserted successful");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Data insert ERROR!");
                    </script>
                    <?php
                }


            }else{
                ?>
                <script>
                    alert("Pass insert ERROR!");
                </script>
                <?php
            }
        }

    }

?>
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width:400px">
            <h4 class="card-title mt-3 text-center"> Create Account </h4>   
            <p class="text-center">Get Started With Your Free Account </p>
              <p>
                <a href="error.php" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>    LogIn via Gmail  </a>
                <a href="error.php" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i> LogIn via Facebook</a>
              </p>
             <p class="divider-text">
                <span class="bg-light">OR</span>
             </p>
                 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                             <input name="username" placeholder="Full Name " type="text" class="form-control" required>
                        </div> <!--  form-group -->

                        <div class="form-group input-group">
                           <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                                <input name="email" placeholder="Email Address * " type="email" class="form-control" required>
                        </div> <!--  form-group -->


                        <div class="form-group input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-phone"></i></span>
                             </div>
                                 <input name="mobile" placeholder="Phone Number " type="number" class="form-control" required>
                        </div> <!--  form-group -->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                                <input name="password" placeholder="Create Password " type="password" class="form-control" required>
                        </div> <!--  form-group -->

                         <div class="form-group input-group">
                            <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                                 <input name="cpassword" placeholder="Repeat Password" type="password" class="form-control" required>
                        </div> <!--  form-group -->

                        <div class="form-group">
                             <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                             <p class="text-center">Have an Account <a href="login.php">Log In</a></p>
                </form>
        </article>
     </div>
</div>
</div>
    
</body>
</html>