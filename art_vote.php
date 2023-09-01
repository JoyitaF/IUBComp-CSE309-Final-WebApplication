<?php include('art_database.php');
?>

<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black and White</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/gallery-style.css">
</head>
<body>

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

   <main>
   <div class="tm-content">

   <h3 style="font-weight: bolder;">Freeform Art Contest</h3>
   <h6>(Note: You can only vote once per submission)<h6><br>

   
   <h5 style="font-weight: bold;">To join the contest, submit your art <a href="uploadart.php">here!</a></h5>
    <?php
    // Fetch images from the database
    $query = "SELECT id, fullName, image_url, image_desc FROM free";
    $result = $conn->query($query);

    $colCount = 0;
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($colCount == 0) {
            echo '<div class="row">';
        }
        
        $imageId = $row['id'];
        $imageUrl = $row['image_url'];
        $image_desc = $row['image_desc'];
        $fullName = $row['fullName']; ?>
        
        <div class='image-container' style="background-image: url('<?php echo $imageUrl; ?>');">
        <div class="col-md-4">
        <!--<img src= <?php echo $imageUrl ?> class="img-fluid" data-toggle="modal" data-target="#imageModal" data-image-src=<?php echo $imageUrl ?>><br>-->
        <p class="hover-text">Medium: <?php echo $image_desc ?></p>
        <p class="hover-text">By: <?php echo $fullName ?></p>

        
        <!-- Create a form for voting -->
        <div class="button-container">
        <form method='POST' action='voteaction_art.php'>
        <input type='hidden' name="image_id" value='<?php echo $imageId; ?>'>
        <button class="button" type='submit'>Vote</button>
        
        </form>
        </div>

        </div>
        </div>
        
        <?php
            $colCount++;
            if ($colCount == 3) {
                echo '</div>';
                $colCount = 0;
            }
        }
        // If the last row doesn't contain 3 images, close the row div
        if ($colCount > 0) {
            echo '</div>';
        }
    } else {
        echo "No records found.";
    }
    
    ?>
    </div>


    <footer class="footer">
            Copyright 2023 IUBCOMP 
                 
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






