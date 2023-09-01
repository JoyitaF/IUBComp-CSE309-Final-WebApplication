<?php
include("addwinner.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-4">
    <h3 class="text-primary"> Add Winner </h3>
    <p><?php echo !empty($result)? $result:''; ?></p>
    
    <!-- HTML Form -->
    <form method="post" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Competition" name="comp">
       </div>

       <div class="form-group">
          <input type="text" class="form-control" placeholder="Position" name="position">
       </div>

       <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name" name="fullName">
       </div>

       <div class="form-group">
          <input type="number" class="form-control" placeholder="ID" name="id">
       </div>

        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address" name="email">
       </div>
        <div class="form-group">
          <input type="date" class="form-control" placeholder="Date" name="date">
       </div>
        <div class="form-group">
 
    <button type="submit"  name="save" class="btn btn-primary">Save</button>
    </form>
    <!-- HTML Form -->
    </div>
    <div class="col-sm-8">
   
   </div>
   </div>
</div>
</body>
</html>