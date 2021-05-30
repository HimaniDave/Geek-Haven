<?php

include '../dbcon.php';

session_start();

$insertion=false;

if(isset($_POST['add'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $position= $_POST['position'];
    $radiobtn= $_POST['radio'];
    $file=$_FILES['file'];

    $filename= $file['name'];
    $filepath=$file['tmp_name'];
    $filerror=$file['error'];

    if($filerror==0){
        $destfile='../upload/' . $filename;
        move_uploaded_file($filepath,$destfile);
    }


    $res= "INSERT INTO `geekhaven` ( `name`, `password`, `position`, `photo`,`category`) VALUES ( '$username', '$password', '$position','$destfile', '$radiobtn')"; 
    
    $insertQuery=mysqli_query($con,$res);

    if($insertQuery){
        $insertion=true;
    }else{
        echo '<script type="text/JavaScript"> 
        alert("Something went wrong! Try again later");
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
    <?php include '../links.php';?>
    <link rel="stylesheet" href="../css/style.css">
    <title>Drama Club</title>
</head>

<body>


    <!-- Description about Dance Club -->
    <div class="container text-center">
        <div class="my-5">
            <h1>Rangtaringini </h1>
            <h4>The Drama Society</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta ab
                consequatur consectetur illo soluta laudantium, sequi natus quae!
                Corrupti impedit ea sint obcaecati facere conseq Lorem ipsum dolor sit amet consectetur, adipisicing
                elit.
                Officia asperiores aliquid quam laboriosam placeat eos!
            </p>

        </div>
    </div>



    <!-- MODAL -->
    <!-- Button trigger modal -->
    <h1 class="text-center">Team!</h1>
    <?php 
            if(isset($_SESSION['username'])){

            echo "<div class='text-center'>
            <button type='button' id='btn' class='mx-5 btn btn-outline-dark' data-bs-toggle='modal'
                data-bs-target=\"#exampleModal1\">
                Add a new member
            </button>
            </div>";

            }

    ?>

    <!-- Modal -->
    <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required autocomplete="off">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                autocomplete="off" required>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Position</label>
                            <input type="text" name="position" class="form-control" id="exampleInputPassword1"
                                autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="file" required>
                        </div>

                        <label for="">Choose society:</label>
                        <input type="radio" name="radio" value="Dance" required />
                        <label for="">Dance</label>
                        <input type="radio" name="radio" value="Music" required></input>
                        <label for="">Music</label>
                        <input type="radio" name="radio" value="Drama" required></input>
                        <label for="">Drama</label>




                        <div class="modal-footer">
                            <button type="submit" name="add" class="btn btn-outline-dark">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- END OF MODAL -->

    </div>

    <!-- Dynamic insertion -->

    <div class="container row my-4 mx-4 text-center" id="dynamic">

        <?php 

    $table="SELECT * FROM `geekhaven` WHERE category='Drama'";

    $result= mysqli_query($con,$table);

    while($row= mysqli_fetch_array($result)){
    $name=$row['name'];
    $position=$row['position'];
    $imgUrl=$row['photo'];

?>
        <div class='card society-card col-lg-3 mx-2' style='width: 18rem;'>
            <img src=<?php echo "$imgUrl" ?> />
            <div class='card-body'>
                <h5 class='card-title'><?php echo "$name" ?></h5>
                <h6 class='card-subtitle mb-2 text-muted'><?php echo "$position" ?></h6>
            </div>
        </div>
        <?php

    }


?>

    </div>

    <!-- Dynamic insertion ends -->

    <!-- Dynamic insertion ends -->




    <!-- POSTS ABOUT SOCIETY -->
    <div class="conatiner text-center">
        <h1>Rangtaringini Posts!</h1>
        <!-- Button trigger modal -->

        <?php 
        if(isset($_SESSION['username'])){
        echo '<button type="button" id="btn" class="mx-5 btn btn-outline-dark" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            New Post
        </button>';
        }

        ?>

        <!-- Modal -->
        <form method="POST">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">About the event</span>
                                <textarea class="form-control" aria-label="With textarea" name="post"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="postAdd" class="btn btn-outline-dark">Post</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    <!-- END OF POSTS ABOUT SOCIETY -->

    <!-- Dynamic insertion of posts -->


    <?php
    
    include '../dbcon.php';

    if(isset($_POST['postAdd'])){

        $posts=$_POST['post'];
        $putQuery="INSERT INTO `drama` (`post`) VALUES ('$posts')";
        $results=mysqli_query($con,$putQuery);

    }
   
    $tablePost= "SELECT * FROM `drama`";
        $resPost= mysqli_query($con,$tablePost);
    
        while($row= mysqli_fetch_array($resPost)){
            $post=$row['post'];
    
            echo "<div class='card my-4 mx-2' style='border: 2px solid var(--shade1);'>
            <div class='card-body'>
              <blockquote class='blockquote mb-0'>
                <h3>$post</h3>
              </blockquote>
            </div>
          </div>";
    
            }


?>

    <!-- End of dynamic insertion of posts -->


    <div class="container text-center">
        <button class="btn btn-outline-light">
            <a style="text-decoration:none;" href="../index.php">Back to Home</a>
        </button>
    </div>

    <?php include '../footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>



</html>