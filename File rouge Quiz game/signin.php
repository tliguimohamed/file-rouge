<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>
<body>
  


<?php

include'config.php';
// if(isset($_POST['submit'])){

//     $Firstname =$_POST['Firstname'];
//     $lastname =$_POST['lastname'];
//     $email =$_POST['email'];
//     $password = $_POST['password'];
//     $cpassword = ($_POST['cpassword']);
// // $sql=
// if($password=$cpassword){
//   $sql="INSERT INTO user(Firstname,lastname,email,password) VALUES 
//   ('$Firstname','$lastname','$email','$password')";
//   $result=mysqli_query($conn,$sql);
//   if(!$result){
//     echo"<script>alert('non password connect')</script>";
//     // $row= mysqli_fetch_array($result);
//   }
// }else{
//     echo"<script>alert('non password')</script>";
// }

// }
$_SESSION['valid'] = false;
if(isset($_POST['submit'])){
  $password=$_POST['password'];
  $email=$_POST['email'];
  $sql="SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  $result=mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    header("Location: index.php");
    $row=mysqli_fetch_assoc($result);
    $_SESSION['id']=$row['userId'];
    $_SESSION['valid'] = true;
  }
  else{
    header("Location: signin.php");
  }
  
}


?>

<nav>
    <img src="image/LOGO.png" width="92" height="70">
        <a href="index.php">home</a>
        <a href="index.php">about</a>
        <a href="index.php">categories</a>
        <a href="Signup.php">signup</a>
        <a href="signin.php">signin</a>
        
   </nav>
   <header>
   <div class="sign">

 <form action="signin.php"  method="post">
 <label for="fname">Username or email address:</label><br>
            <input type="email" name="email" ><br>
            <label for="lname" id="pass">Password:</label><br>
            <input type="password" name="password" ><br>
            <input type="submit" id="sub" name="submit" value="login">
          </form>
        </div>
          <header>
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