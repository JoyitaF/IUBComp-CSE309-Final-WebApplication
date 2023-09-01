<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="img/iubcompwhitelogo.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style_admin.css" />
</head>
<body>

<!--MENU BAR-->
<section id="menu">
    <div class="logo">
    <img src="img/logo1.png" alt="Logo" class="tm-brand-icon" style="width: 50px; height: auto; padding-top:20px;">
        <h2>IUBCOMP</h2>
    </div>

    <div class="items">
        <li><i class='bx bx-grid-alt'></i><a href="admin_page_landing.php">Dashboard</a></li>
        <li><i class='bx bxs-user bx-flip-horizontal'></i><a href="admin_ActiveCompetition.php">Active Contest</a></li>
    </div>

</section>

<!-- Interface-->
<section id="interface">
    <div class="navigation">
        <div class="n1">
            <div class="search">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <div class="profile">
            <i class='bx bx-bell'></i>
            <img src="images/2.jpg" alt="">
        </div>
    </div>
    <h3 class="i-name">
        Dashboard
    </h3>

    <div class="values">
       

        <div class="val-box">
            <i class="bi bi-controller"></i>
            <div>
              
                <span>Active Contest</span>
            </div>

        </div>

      
    </div>

    <!-- Table to display Active Competitions -->
    <div class="table-container">
        
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Season/Year</th>
                <th>Participant ID</th>
                <th>Participant Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Fetch and display active competitions from ActiveCompetitions table
            $activeCompetitionsQuery = "SELECT ac.Title, ac.Category, ac.SeasonYear, p.id AS ParticipantID, p.name AS ParticipantName
                                        FROM Active_Competitions ac
                                        INNER JOIN Participants p ON ac.ParticipantID = p.id";
            $activeCompetitionsResult = mysqli_query($conn, $activeCompetitionsQuery);

            while ($row = mysqli_fetch_assoc($activeCompetitionsResult)) {
                echo "<tr>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['SeasonYear'] . "</td>";
                echo "<td>" . $row['ParticipantID'] . "</td>";
                echo "<td>" . $row['ParticipantName'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    

</section>

</body>
</html>
