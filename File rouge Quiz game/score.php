<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codequiz";
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
 $scores=$_SESSION['scores'];
 $theme = $_SESSION['theme']; 
 $today = date("Y-m-d H:i:s") ;
//  echo $today ;
 $users= $_SESSION['id'];
    $sql="INSERT INTO test(userId,themeId,date,score) VALUES ('$users','$theme','$today','$scores')";
  $result=mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="score.css">

</head>
<body>
    
<h1>Result</h1>
<h1>Score : <?php echo  $_SESSION['scores']; ?></h1>
<a href="index.php"><button id="score">Back</button></a>

<?php
$_SESSION['scores'] = 0;
$_SESSION['count'] = 0;
?>
</body>
</html>