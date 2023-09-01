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
    <div class="val-box" onclick="redirectToSubmission()">
        <i class="bi bi-image"></i>
        <div>
            
            <span>Submission</span>
        </div>
    </div>

     <div class="val-box" onclick="redirectToDashboard()">
        <i class="bi bi-controller"></i>
        <div>
            
            <span>Active Contest</span>
        </div>
    </div>


    <div class="val-box" onclick="redirectToParticipant()">
        <i class="bi bi-people"></i>
        <div>
            
            <span>Total Participants</span>
        </div>
    </div>

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iubcomp";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, message FROM contact_messages";
$result = $conn->query($sql);

$conn->close();
?>

    <div class="col-lg-6 mt-5">
        <div class="messages-received-box">
            <h2 style="margin:20px; margin-left:0; color: #444a53;" class="tm-text-primary">View Messages Received</h2>
            <?php
            if ($result->num_rows > 0) {
                echo '<table class="table">';
                echo '<thead><tr><th>Sender Name</th><th>Email</th><th>Message</th></tr></thead>';
                echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['message'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody></table>';
            } else {
                echo 'No messages received yet.';
            }
            ?>
        </div>
    </div>

    </section>

  


</body>
</html>
<script>
    function redirectToDashboard() {
        window.location.href = 'admin_ActiveCompetition.php';
    }

    function redirectToParticipant() {
        window.location.href = 'admin_participants.php';
    }
    function redirectToSubmission() {
        window.location.href = 'admin_Submission.php';
    }
</script>
