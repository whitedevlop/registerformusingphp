<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'css/styles.php' ?>
    <?php include 'links/links.php' ?>
</head>
<body>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registrations where email='$email'";
    $query = mysqli_query($con,$email_search);  

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "login successful";
            ?>
            <script>
                location.replace("index.php");
            </script>
            <?php
        }else{
            echo "login unsuccessful";
        }
        }else{
            echo "Invalid Email";
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
                             <input name="email" placeholder="Email" type="email" class="form-control" required>
                        </div> <!--  form-group -->

                        <div class="form-group input-group">
                           <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                                <input name="password" placeholder="Password * " type="password" class="form-control" required>
                        </div> <!--  form-group -->

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                        <p class="text-center">Not have an account? <a href="regis.php">Sign Up</a> </p>

            </form>
        </article>
    </div>
</body>
</html>