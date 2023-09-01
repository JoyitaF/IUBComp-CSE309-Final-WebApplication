<?php include('gallery_database.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote for Images</title>
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
<body>

<?php

$query = "SELECT id, image_url, vote_count FROM black_and_white";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $imageId = $row['id'];
    $imageUrl = $row['image_url'];
    $voteCount = $row['vote_count'];
    
    echo "<div class='image-container'>";
    echo "<img src='$imageUrl' alt='Image $imageId'>";
    echo "<p>Vote Count: $voteCount</p>";
    
    echo "</div>";
}

?>