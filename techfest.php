<?php
include("winners/winners.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUBCOMP</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <header class="header">
       
        <nav class="tm-nav tm-extended-nav">
            
            <ul class="nav-menu">
                                             
            <li class="nav-item">                                
                        <a href="index.html" class="nav-link current">
                            <img src="img/logo1.png" alt="Logo" class="tm-brand-icon" style="width: 50px; height: auto; padding-top:20px;">
                            <span class="logo-text">IUBComp</span>
                        </a>
                    </li>
            
                <li class="nav-item">
                    <a href="index.html" class="nav-link" style="padding-top:27px;">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="categoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top:27px;">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <a class="dropdown-item" href="categories.html">Photography</a>
                        <a class="dropdown-item" href="techfest.php">TechFest</a>
                        <a class="dropdown-item" href="categories_art.html">Art&Crafts</a>
                    </div>
                </li>
                <!--<li class="nav-item">
                    <a href="projects.html" class="nav-link">Projects</a>
                </li>-->
                <li class="nav-item" style="padding-top:18px;">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            
                <li class="nav-item" style="padding-top:18px;">
                    <a href="login_form.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

   
    
<!-- About section -->
<section id="intro" class="tm-section">
    <div class="tm-section-col tm-content tm-content-small tm-parallax" data-parallax="scroll" data-image-src="img/techfest.jpg">
        <div class="text-container" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px; border-radius: 10px;">
            <h2 class="tm-text-primary" style="text-align: center; color: #fff; font-weight: bold; font-size: 36px;">TechFest</h2>
            <p style="text-align: center; color: #fff; font-weight: bold; font-size: 18px;">
                The annual CSE Dept Festival.
            </p>
        </div>
        <hr class="tm-hr tm-mb-50">                
    </div>
</section>


    <main style="margin-bottom: 75px;">
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <!-- Announcement box for winners on the left -->
                <div class="col-md-6">
                <div class="tech-heading">
                <h3>Announcing This Semester's Winners:</h3>
                </div>
                <div class="announcement-box">
                        
                <div class="table-responsive">
                <table class="table">
                <thead><tr>
                    <th>Competition</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Date</th></tr>
                </thead>
                <tbody>
            <?php
                if(is_array($fetchData)){      
                $sn=1;
                foreach($fetchData as $data){
                ?>

                <tr>
                <td><?php echo $data['comp']??''; ?></td>
                <td><?php echo $data['position']??''; ?></td>
                <td><?php echo $data['fullName']??''; ?></td>
                <td><?php echo $data['id']??''; ?></td>
                <td><?php echo $data['email']??''; ?></td>
                <td><?php echo $data['date']??''; ?></td>
                </tr>
                <?php
                $sn++;}}else{ ?>
                <tr>
                    <td colspan="8">
                <?php echo $fetchData; ?>
            </td>
                <tr>
                <?php
                }?>
                </tbody>
                </table>
            </div>
                    </div>
                </div>

<!-- Slide-in picture carousel on the right -->
<div class="col-md-6">
<div class="tech-heading">
    <h3>Gallery</h3>
</div>
    <div class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/techfest1.jpg" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="img/techfest2.jpg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="img/techfest3.jpg" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="img/techfest4.jpg" alt="Image 3">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>

</main>
       

<footer class="footer">
&copy; Copyright 2023 IUBCOMP 
                 
</footer>              




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js>"></script>
<script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Carousel
        function slideImages() {
            $(".carousel-slide").animate({ right: "0%" }, 1000, function() {
                // After animation, move the first image to the end of the container
                $(".carousel-slide:last").after($(".carousel-slide:first"));
                // Reset
                $(".carousel-slide").css("right", "-100%");
            });
        }

        // Call the slideImages function periodically
        setInterval(slideImages, 2000); 
    });
</script>

</body>
</html>