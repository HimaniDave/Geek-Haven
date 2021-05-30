<?php

include 'dbcon.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'links.php';?>
    <link rel="stylesheet" id="theme" href="css\style.css">
    <title>GeekHaven</title>
</head>

<body>
    <!-- HERO SECTION -->
    <div class="main-container">
        <div class="sub-container">
            <div class="conatiner">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">GeekHaven</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-target=".navbar-collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars "></i>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link p-3" aria-current="page" href="#about">Perks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3" href="#society">Societies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="sub-container container text-center">
                <div class="hero-content">
                    <h1>GeekHaven</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta ab
                        consequatur consectetur illo soluta laudantium, sequi natus quae!
                        Corrupti impedit ea sint obcaecati facere conseq
                    </p>
                    <button class="btn btn-outline-dark"><a href="login.php">Login</a></button>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e6739f" fill-opacity="1"
                d="M0,96L26.7,90.7C53.3,85,107,75,160,101.3C213.3,128,267,192,320,197.3C373.3,203,427,149,480,112C533.3,75,587,53,640,85.3C693.3,117,747,203,800,213.3C853.3,224,907,160,960,117.3C1013.3,75,1067,53,1120,80C1173.3,107,1227,181,1280,181.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg>
    </div>
    <!-- END OF HERO SECTION -->

    <!-- PERKS OF GEEKHAVEN -->
    <div class="container text-center" id="about">
        <div class="row sub-content">
            <h1>Perks of GeekHaven</h1>
            <div class="col-lg-3 info-div p-5">
                <i class="fas fa-phone fa-3x"></i>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                    doloribus!
                </h2>
            </div>
            <div class="col-lg-3 info-div p-5">
                <i class="fas fa-mobile-alt fa-3x"></i>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                    doloribus!
                </h2>
            </div>
            <div class="col-lg-3 info-div p-5">
                <i class="fas fa-magic fa-3x"></i>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                    doloribus!
                </h2>
            </div>
        </div>
    </div>
    <!-- END OF PERKS OF GEEKHAVEN -->

    <!-- SOCITIES IN GEEKHAVEN -->
    <br><br>
    <div class="container mx-6" id="society">
        <div class="row sub-content my-6 mx-6">
            <h1 class="text-center mx-6">Societies of GeekHaven</h1>
            <div class="card mb-3 society-card">
                <a href="societies/dance.php">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <img class="society-img"
                                src="https://image.freepik.com/free-vector/woman-fitness-dancing-home_23-2148882333.jpg"
                                alt="Dance club" />
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Dance Club</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                                    magnam?Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Consequuntur, minima.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card mb-3 society-card">
                <a href="societies/drama.php">
                    <div class="row g-0">
                        <div class="col-lg-8 col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Drama Club</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                                    magnam?Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Consequuntur, minima.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <img class="society-img"
                                src="https://image.freepik.com/free-vector/theatre-premiere-night-actress-stage-classic-play-drama-piece-tragedy-scene-broadway-showtime-acting-masks-as-decoration_335657-184.jpg"
                                alt="Dance club" />
                        </div>
                    </div>
                </a>
            </div>

            <div class="card mb-3 society-card">
                <a href="societies/music.php">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <img class="society-img"
                                src="https://image.freepik.com/free-vector/popular-music-abstract-concept-illustration-popular-singer-tour-pop-music-industry-top-chart-artist-musical-band-production-service-recording-studio-book-event_335657-3656.jpg"
                                alt="Dance club" />
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Music Club</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                                    magnam?Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Consequuntur, minima.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </a>
    </div>

    <!-- END OF GEEKHAVEN SOCIETIES -->

    <!-- CONTACT -->

    <?php 
        include 'dbcon.php';

        $inserted= false;

        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $feedback=$_POST['feedback'];

            $contactTable="INSERT INTO `contact` (`name`, `feedback`) VALUES ('$email', '$feedback')";
            $res= mysqli_query($con,$contactTable);

            if($res){

                $inserted=true;
            }else{
                echo '<script type="text/JavaScript"> 
                alert("Please try  again later");
                </script>';
            }
            
        }
    
    ?>

    <div class="conatiner contacts" id="contact">
        <h1 class="text-center">Contact Us!</h1>
        <div class="contact">
            <form class="mx-4 my-4" method="POST" action="#">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" required autocomplete="off" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Feedback</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="feedback" required
                        autocomplete="off" />
                </div>

                <button type="submit" name="submit" class="btn mx-2 my-4 btn-outline-dark">
                    Submit
                </button>
            </form>
            <?php 
            if($inserted){
                echo '<script type="text/JavaScript"> 
                alert("Thanks for your feedback");
                </script>';
            }
            ?>
        </div>
    </div>


    <!-- END OF CONTACT FORM -->

    <?php include 'footer.php';?>

    <button onclick="topFunction()" id="myBtn">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="app.js"></script>

</body>

</html>