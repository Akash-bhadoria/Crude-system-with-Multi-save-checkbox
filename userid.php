<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br>
<div style="font-family:Georgia;"class="container">
<center><h2>Fetch Deatils Here</h2></center>
<br><br>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="userid">Database User Id :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="user Id" placeholder="Enter UserId " name="userid">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<br>
<div style="font-family:Georgia;" class="container-fluid">
<center><h3>Details Here</h3></center>
<hr>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>userId</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Movies</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_POST['submit']))
      {
      $dis =" Select * from detail where userid='$_POST[userid]' ";
      $qdis = mysqli_query($con, $dis);
      $query="SELECT movies from  movie where userid='$_POST[userid]' ";
      $resu = mysqli_query($con,$query);
    //  $table=mysqli_fetch_all($resu);
    //  echo $table;
    /*foreach($table as $m)
    {
      echo $m;
    }*/
      if(mysqli_num_rows($qdis)>0)
      {
        foreach($qdis as $result) {
      ?>

       <tr>
         <td> <?php echo $result['userid'];?> </td>
         <td> <?php echo $result['first'];?> </td>
         <td> <?php echo $result['last'];?> </td>
         <td> <?php echo $result['gender'];?> </td>
         <td> <?php echo $result['hobbies'];?> </td>
         <?php foreach($resu as $m)
         { ?>
         <td> <?php echo $m['movies'];?> </td>
       <?php } ?>
       </tr>

      <?php
      }
    }
    else{
      ?>
        <script>
          alert("No Record Found");
        </script>
      <?php

    }
  }
      ?>
    </tbody>
  </table>
</div>


</body>
</html>
