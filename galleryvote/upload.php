<?php

include('gallery_database.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Select an image to upload:</label>
        <input type="file" name="image" id="image">
        <label for="image_name">Enter your ID:</label>
        <input type="text" name="image_name" id="image_name">
        <label for="fullName">Enter your full name:</label>
        <input type="text" name="fullName" id="fullName">
        <label for="email">Enter your email:</label>
        <input type="text" name="email" id="email">
        <label for="image_desc">Enter the camera information for the image:</label>
        <input type="text" name="image_desc" id="image_desc">
        <button type="submit" name="submit">Upload</button>
    </form>
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
            echo "The file " . basename($_FILES['image']['name']) . " has been uploaded and added to the database.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>




