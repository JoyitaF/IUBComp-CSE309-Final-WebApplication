<?php
include("winners.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>S.N</th>
         <th>Competition</th>
         <th>Position</th>
         <th>Name</th>
         <th>ID</th>
         <th>Email</th>
         <th>Date</th></tr>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>

      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['comp']??''; ?></td>
      <td><?php echo $data['position']??''; ?></td>
      <td><?php echo $data['fullName']??''; ?></td>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>