<?php

session_start();

include 'dbcon.php';



if(isset($_POST['submit'])){
$username= $_POST['username'];
$password= $_POST['password'];


// Make corrections here as added members can also login and post about the upcoming events
$table= "SELECT * FROM geekhaven WHERE name='$username' AND password='$password'";
$query =mysqli_query($con,$table);

$numOfRows= mysqli_num_rows($query);


if($numOfRows>0){
    $_SESSION['username']=$username;
    header('location:societyPage.php');
}else{
    echo '<script type="text/JavaScript"> 
     alert("Please check your username or password");
     </script>';
}

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Login</title>
</head>

<body>
    <h3 class="my-5 text-center" style="color:var(--shade2);">Master login</h3>
    <div class="my-5 mx-8 contact">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required autocomplete="off">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-outline-dark">Login</button>
        </form>
    </div>

</body>

</html>


<!-- Functionality to be added! -->
<!-- 1. Light/Dark mode -->
<!-- 2. Forget and Reset Password -->
<!-- 3. Gallery to be added -->
<!-- 4. Function of image in music and drama -->