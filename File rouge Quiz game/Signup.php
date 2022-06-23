<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codequiz";
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])){

    $Firstname =$_POST['Firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $cpassword = ($_POST['cpassword']);

if($password=$cpassword){
  $sql="INSERT INTO user(Firstname,lastname,email,password) VALUES 
  ('$Firstname','$lastname','$email','$password')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo"<script>alert('BIBA')</script>";
    header("location:signin.php");
}
}else{
    echo"<script>alert('non password')</script>";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<nav>
    <img src="image/LOGO.png" width="80" height="60">
        <a href="index.php">home</a>
        <a href="index.php">about</a>
        <a href="index.php">categories</a>
        <a href="signup.php">Signup</a>
        <a href="signin.php">Signin</a>
        
   </nav>
<header>
<h1>Sign Up</h1>

    <div id="signup" class="container">
        <form action="Signup.php" method="post">
            <label for="fname">Firstname:</label>
            <input type="text" name="Firstname" >
            <label for="lname">Lastname:</label>
            <input type="text" name="lastname" >
            <label for="Emai" id="eml"> Email:</label>
            <input type="email" name="email" >
            <label for="Pass"> Password:</label>
            <input type="password" name="password">
            <label for="Confirm" id="confpass"> Confirm password :</label>
            <input type="password" name="cpassword" >
            <input type="submit" id="inp" name="submit" value="Sign Up">
        </form>
    </div>
</header>
<footer>
        <div class="footer-1">
        <h3>Connect with Us:</h3>
            <div>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-twitter-square"></i>
            </div>
        </div>
   <div class="footer-2">
   <p>© 2022 code quiz. All right reserved.</p>
  </div>
    </footer>

</body>
</html>