<?php

session_start();
$_SESSION['count'] = 0;
$_SESSION['scores'] = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
</head>
<body>

<nav>

    <!-- <img id="images" src="image/LOGO.png" >
    <ul class="menu">
        <li><a href="#home" >Home</a></li>
        <li><a href="#about" >About</a></li>
        <li><a href="#categories">categories</a></li>
        <li><a href="Signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign in</a></li>
    </ul>
    <div id="bottonn">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>        

    <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                <a  onclick="haha()" class="active" href="#Home">Home</a>
                    <a  onclick="haha()" class="active" href="#About">About</a>
                    <a  onclick="haha()" href="#categories">categories</a>
                    <a  onclick="haha()" href="#Signup.php">Sign Up </a>
                    <a  onclick="haha()" href="#signin.php">Sign in</a>
                </div>
            </div>
<script>


</script> -->

<img id="images" src="image/LOGO.png" width="92" height="70">
    <a href="#home" >Home</a>
    <a href="#about" >about</a>
    <a href="#categories">categories</a>
    <a href="Signup.php">Sign Up</a>
    <a href="signin.php">Sign in</a>
    <a href="logout.php">logout</a>


   </nav>
   
        <div id="quiz" class="quiz-picture">
            <h1>We achieve knowledge through learning with joy <br> and building our future</h1>
            <img src="image/arton78895.jpg" alt="">
            <a href="#categories"> <input type="submit" id="btn" value="Start Now!"></a>

        </div>
    <div id="about" class="quiz-about">

    <h1>About the Quiz</h1>
    <h3>Goal:</h3>
    <p id="butt">Assessment of students' level according to their levels</p>
    <div id="tut">
    <div>
        <h1>1</h1>
        <p> choose A catecory:<br>
        -JavaScript<br>
        -PHP <br>
        -CSS <br>

    </p>

    </div>

    <div>
      <h1>2</h1>
      <p>pass the <br>
        -The user chooses a theme among 3 themes<br>
        -ach theme contains 10 questions.<br>
        -Each question has 4 choices<br>
        -of which only 1 is correct.</p><br>

    </div>
    </div>

    <div id="categories" class="quiz-Categories">

        <h1>Categories</h1>
        <h3>Choose a category :</h3>
        <div class="code">
            <div id="js">
        <a href="Quiz.php?type=<?php echo 1?>"><img src="image/721791 2.png" alt=""></a>
        </div>
        <div id="php">
           <a href="Quiz.php?type=<?php echo 2?>" ><img src="image/Vector.png" alt=""></a>
       
        </div>
        <div id="css">

            <a href="Quiz.php?type=<?php echo 3?>"><img src="image/Vector 1.png" alt=""></a>
        </div>
        </div>
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