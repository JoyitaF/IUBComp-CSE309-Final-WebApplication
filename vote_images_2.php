<?php include('gallery_database.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote Results for Images</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .image-container {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
        .image-container img {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>
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

<body>

<main>
<div class="tm-content">
<h3>Current Votes:</h3>
<?php

$query = "SELECT id, image_url, vote_count FROM street";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $imageId = $row['id'];
    $imageUrl = $row['image_url'];
    $voteCount = $row['vote_count'];
    
    echo "<div class='image-container'>";
    echo "<img src='$imageUrl' alt='Image $imageId'>";
    echo "<h5>Vote Count: $voteCount</h5>";
    
    echo "</div>";
}

?>
</div>

<footer class="footer">
&copy; Copyright 2023 IUBCOMP 
                 
    </footer> 
</main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script> src="js/gallery-script.js"</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js>"></script>
</body>
</html>