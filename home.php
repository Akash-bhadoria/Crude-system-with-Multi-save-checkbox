<?php

include 'db.php';


if(isset($_POST['submit'])){
  $first = mysqli_real_escape_string($con, $_POST['first']) ;
	$last = mysqli_real_escape_string($con, $_POST['last']) ;
	$gender = mysqli_real_escape_string($con, $_POST['gender']) ;
	$hobbies = $_POST['hobbies'] ;
  $imp = implode(",",$hobbies);
  $movies = $_POST['movies'] ;
  $impl = implode(",",$movies);

			$query = "insert into detail(first, last, gender, hobbies) values('$first', '$last', '$gender', '$imp')";
			$iquery = mysqli_query($con, $query);
      if($iquery){
        $q2="select userid from detail where first='$first' and last='$last' and gender='$gender' and hobbies='$imp'";
        $rep=mysqli_query($con,$q2);

      $table = mysqli_fetch_assoc($rep);
      $r=$table['userid'];

      foreach($movies as $m)
      {
       $query2="insert into movie(userid,movies)values('$r','$m')";
        $res=mysqli_query($con,$query2);
      }


        if($res){
					?>
						<script>
							alert("Details Inserted Successful");
						</script>
					<?php
				}else{

					?>
						<script>
							alert("Details Not Inserted");
						</script>
					<?php
				}
      }
     header("location:process-form.php?first=$first&last=$last&gender=$gender&hobbies=$imp&movies=$impl");
}
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>DEATILS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br>
<div style="font-family:Georgia;"class="container">
  <center><h2>Enter Deatils Here</h2></center>
  <br><br>
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="first">First Name :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first" placeholder="Enter First Name" name="first">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="last">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="last" placeholder="Enter Last Name" name="last">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender :</label>
      <div class="col-sm-10">
        <input type="radio" id="gender" name="gender" value="male" required> Male <p>
        <input type="radio" id="gender" name="gender" value="Female" required> Female
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="first">Hobbies:</label>
      <div class="col-sm-10">
        <input type="checkbox" id="hobbies" name="hobbies[]" value="Reading"> Reading<br/>
        <input type="checkbox" id="hobbies" name="hobbies[]" value="Writing"> Writing<br/>
        <input type="checkbox" id="hobbies" name="hobbies[]" value="Playing"> Playing<br/>
        <input type="checkbox" id="hobbies" name="hobbies[]" value="Travelling"> Travelling<br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="movies">Movies:</label>
      <div class="col-sm-10">
        <input type="checkbox" id="movies" name="movies[]" value="Harry Potter"> Harry Potter<br/>
        <input type="checkbox" id="movies" name="movies[]" value="Lord Of The Rings"> Lord Of The Rings<br/>
        <input type="checkbox" id="movies" name="movies[]" value="Aquaman"> Aquaman<br/>
        <input type="checkbox" id="movies" name="movies[]" value="Transformer"> Transformer<br/>
        <input type="checkbox" id="movies" name="movies[]" value="Transpoter"> Transpoter<br/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
        <a href="userid.php" class="btn btn-default" role="button">Search</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>
