<?php include('gallery_database.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Black and White</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="gallery-style.css">
</head>
<body>
    <?php
    // Fetch images from the database
    $query = "SELECT id, fullName, image_url, image_desc FROM black_and_white";
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
        <p class="hover-text">Shot on: <?php echo $image_desc ?></p>
        <p class="hover-text">By: <?php echo $fullName ?></p>

        
        <!-- Create a form for voting -->
        <div class="button-container">
        <form method='POST' action='vote.php'>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script> src="gallery-script.js"</script>
</body>
</html>






