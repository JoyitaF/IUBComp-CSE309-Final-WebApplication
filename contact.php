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
    
    <!-- Icons Link-->
    <script src="https://kit.fontawesome.com/11e165b909.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('iub.webp'); /* Replace 'background.jpg' with your image file path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
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

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($conn)) { ?>
        <p class="success-message"><?php echo "Message sent successfully!"; ?></p>
    <?php } ?>
    <!-- Content -->
    <main>
        <div class="tm-content">
            <div class="row">
            <div id="contact" class="col-lg-6 mb-5 mb-lg-0">
                <div class="form-container">
                <form action="connection.php" method="post">
                    <!-- Contact left -->
                        <h2 class="tm-text-primary">Contact Us</h2>
                        <h5 style="color:white;">
                            Send your message and we will get back to you!
                        <h5>
                    
                            <div class="form-group">
                                <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <textarea rows="6" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                            </div>

                            <div class="form-group tm-text-right">
                                <button type="submit" class="tm-btn">Send</button>
                            </div>
                </form> 
                </div>                  
            </div>

            <div class="col-lg-6">
                <div class="tm-section-col tm-content tm-content-small" style="color:white; text-align:center;">
                    <!-- Add your content here -->
                    <i class="fa-solid fa-earth-americas"></i> Address: <br><p>Dhaka, Bangladesh<br></p>
                    <i class="fa-solid fa-phone"></i> Phone: <br><a href="tel:12345678910"><p>12345678910</a><br></p>
                    <i class="fa-regular fa-envelope"></i> Email: <br><a href = "mailto: iubcomp@email.com"><p>iubcomp@email.com</a></p>
                </div>
            </div>
            </div>     
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