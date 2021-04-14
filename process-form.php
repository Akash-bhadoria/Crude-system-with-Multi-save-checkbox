<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thank You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div style="font-family:georgia; font-size:18px;"class="container">
  <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Firstname:</em> <?php echo $_GET["first"]?></li>
        <li><em>Lastname:</em> <?php echo $_GET["last"]?></li>
        <li><em>Gender:</em> <?php echo $_GET["gender"]?></li>
        <li><em>Hobbies:</em> <?php echo $_GET["hobbies"]?></li>
        <li><em>Movies:</em> <?php echo $_GET["movies"]?></li>
    </ol>
  <a href="home.php" class="btn btn-default" role="button">Back To Home Page</a>
</div>

</body>
</html>
