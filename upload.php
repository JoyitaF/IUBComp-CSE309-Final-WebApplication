<?php

include('gallery_database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black and White Photo Contest Submission</title>
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
                        <a class="dropdown-item" href="#">TechFest</a>
                        <a class="dropdown-item" href="categories_art.html">Art&Crafts</a>
                        <a class="dropdown-item" href="#">Music</a>
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
    <div class="tm-section">
    
    
    <form class="submitform" action="upload.php" method="post" enctype="multipart/form-data">

    <h3>Submit your photo to the Black and White Photo Contest</h3>
        <label for="image">Select an image to upload:</label>
        <input type="file" name="image" id="image"> <br>
        <label for="image_name">Enter your ID:</label>
        <input type="text" name="image_name" id="image_name"> <br>
        <label for="fullName">Enter your full name:</label>
        <input type="text" name="fullName" id="fullName"> <br>
        <label for="email">Enter your email:</label>
        <input type="text" name="email" id="email"> <br>
        <label for="image_desc">Enter the camera information for the image:</label>
        <input type="text" name="image_desc" id="image_desc"> <br>
        <button type="submit" name="submit">Upload</button>

        <h5 style="padding-top: 40px;">Check your submissions <a href="gallery_vote.php"> here. </a></h5>
    </form>

    
    </div>


<footer class="footer">
&copy; Copyright 2023 IUBCOMP 
     
</footer>    

</main>

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
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $uploadDir = 'uploads/'; //directory path
    $uploadedFile = $uploadDir . basename($_FILES['image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));
    
    // Get the provided image name
    $imageName = $_POST['image_name'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $image_desc = $_POST['image_desc'];

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['image']['size'] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if an entry with the same ID already exists in the database
    $checkQuery = "SELECT id FROM black_and_white WHERE id = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("i", $imageName);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo '<script>alert("Error: An entry with the same ID already exists. Please choose a different ID.");</script>';
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Modify the file name to include the provided image name
        $uploadedFile = $uploadDir . $imageName . '.' . $imageFileType;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile)) {
            // Insert image metadata into the database
            $imageUrl = $uploadedFile;
            $voteCount = 0;
            $insertQuery = "INSERT INTO black_and_white (id, image_url, fullName, email, image_desc, vote_count, datum) VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bind_param("issssi", $imageName, $imageUrl, $fullName, $email, $image_desc, $voteCount);
            $insertStmt->execute();
            $insertStmt->close();
            echo "Your file" . basename($_FILES['image']['name']) . " has been successfully uploaded.";
            // header("Location: gallery_vote.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>




