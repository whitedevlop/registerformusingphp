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
    <title>Display | Welcome</title>
    <?php include 'links/links.php' ?>
    <?php include 'css/styles.php' ?>
</head>
<body>
    <div class="main-div">
        <div class="center-div">
        <h1>List of candidate for web developer job  <a href="index.php">Add New Form</a><br>
        <a href="logout.php">Log Out</a>
    </h1>
    <div class="sesion"><h4>admin: <?php echo $_SESSION['username']; ?></h4></div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Refer</th>
                            <th>Post</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include'connection.php';
                            $selectquery = 'select * from jobsregistration';
                            $query = mysqli_query ($con, $selectquery);

                            while ($res = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['name']; ?></td>
                                    <td><?php echo $res['degree']; ?></td>
                                    <td><?php echo $res['mobile']; ?></td>
                                    <td><?php echo $res['email']; ?></td>
                                    <td><?php echo $res['refer']; ?></td>
                                    <td><?php echo $res['jobpost']; ?></td>
                                    <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                    <td><a href="delete.php?idth=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>