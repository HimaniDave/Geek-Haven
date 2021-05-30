<?php 

session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <title>Societies</title>
</head>

<body style="background-color:var(--light);">
    <h2 class="my-4 text-center" style="color:var(--shade1);">Welcome back <?php echo $_SESSION['username'];
?> !</h2>
    <div class="container my-2 row text-center" id="societyPage">
        <div class="card society-card mx-3 my-2 " style="width: 18rem;">
            <img src="https://image.freepik.com/free-vector/woman-fitness-dancing-home_23-2148882333.jpg"
                class="card-img-top" alt="dance">
            <div class="card-body">
                <h5 class="card-title"><strong>Dance Club</strong></h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, inventore.
                </p>
                <a href="societies\dance.php" class="btn btn-outline-dark">Explore</a>
            </div>
        </div>
        <div class="card society-card mx-3 my-2" style="width: 18rem;">
            <img src="https://image.freepik.com/free-vector/theatre-premiere-night-actress-stage-classic-play-drama-piece-tragedy-scene-broadway-showtime-acting-masks-as-decoration_335657-184.jpg"
                class="card-img-top" alt="dance">
            <div class="card-body">
                <h5 class="card-title"><strong>Drama Club</strong></h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, inventore.
                </p>
                <a href="societies\drama.php" class="btn btn-outline-dark">Explore</a>
            </div>
        </div>
        <div class="card society-card mx-3 my-2" style="width: 18rem;">
            <img src="https://image.freepik.com/free-vector/popular-music-abstract-concept-illustration-popular-singer-tour-pop-music-industry-top-chart-artist-musical-band-production-service-recording-studio-book-event_335657-3656.jpg"
                class="card-img-top" alt="dance">
            <div class="card-body">
                <h5 class="card-title"><strong>Music Club</strong></h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, inventore.
                </p>
                <a href="societies\music.php" class="btn btn-outline-dark">Explore</a>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>


</html>