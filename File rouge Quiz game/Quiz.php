<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codequiz";
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['type'])) 
$_SESSION['theme'] = $_GET['type'];
  $theme = $_SESSION['theme'];
  $question = 1;

  $_SESSION['scores'];


//$type =  $_SESSION['ii'];
if(isset($_POST['submit'])) {
  $_SESSION['count'] = $_SESSION['count'] + 1;
  if ($_SESSION['count'] == 10 && $_SESSION['valid'] == true){
    header("location:score.php");
  }
  else if($_SESSION['count'] == 10)
  {
    header("location:index.php");
  }

  // if($_POST['fav_language']){
    if(isset($_POST['fav']))
    {
    
      $valueee = $_POST['fav'];
      if($valueee == 1)
      {
        $_SESSION['scores'] = $_SESSION['scores'] +1;
      }
    }
    
  }
// }

else
  $_SESSION['count'] = 1;

// if(isset($_SESSION['count']))
//   $_SESSION['count'] = $_SESSION['count']+1;
// else 
//   $_SESSION['count'] = 1;

$count = $_SESSION['count'];

// if(!isset($_GET['sumbit']))
//   $count = 1;

// echo $_SESSION['valid'];
echo "count: ". $count;
echo "theme: ". $theme;
// $_SESSION['$theme'];
// Pour récupérer la question
$sql = "SELECT `questionId`, `themeId`, `questionOrder`,`content` FROM `question` WHERE themeId = $theme AND questionOrder = $count";
$question = $conn->query($sql)->fetch_assoc();
//echo $question["content"] . "<br><br>";

// Pour récupérer les 4 réponses de la question
$sql = "SELECT Q.questionId, A.answerId, A.content, A.isCorrect
FROM question Q
INNER JOIN answer A ON Q.questionId = A.questionId
WHERE Q.questionId = ".$question['questionId'];
$responses = $conn->query($sql);

$sql2


// }
// else {
//   echo "0 results";
// }

// $q = intval($_GET['q']);

// $con = mysqli_connect('localhost','peter','abc123','my_db');
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }

// mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM user WHERE id = '".$q."'";
// $result = mysqli_query($con,$sql);

// echo "<table>
// <tr>
// <th>Firstname</th>
// <th>Lastname</th>
// <th>Age</th>
// <th>Hometown</th>
// <th>Job</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['FirstName'] . "</td>";
//   echo "<td>" . $row['LastName'] . "</td>";
//   echo "<td>" . $row['Age'] . "</td>";
//   echo "<td>" . $row['Hometown'] . "</td>";
//   echo "<td>" . $row['Job'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
// mysqli_close($con);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Quiz.css">
</head>
<body>
    <img src="image/bg ions.png" id="bg">

    <div>

    <p id="QUESTS">Question <?php echo $question["questionOrder"] ?>/10</p>
    <?php if (isset($_SESSION['id'])){ ?><p id="SCORES">Score: <?php echo $_SESSION['scores'];?> points</p><?php } ?>
    </div>


    <div class="export">
   
   <div class="quiz">
      
      <div class="Question">
        <h1><?php echo $question["content"] ?></h1>
      </div>

      <div class="question-answer">
        <?php 
        if ($responses->num_rows > 0) {
          $answer = 1;
          while($row = $responses->fetch_assoc()) {
        ?>
        <div class="answer-<?php echo $answer ?>">
        
          <p>
            
            <span>
              
              <?php
                switch ($answer) {
                  case 1:
                    echo "A: ";
                      break;
                  case 2:
                      echo "B :";
                      break;
                      case 3:
                      echo "C: ";
                      break;
                  case 4:
                    echo "D: ";
                    break;
                  default:
                  echo "test";
                  break;
              }

              ?>
            </span> 
            <?php echo $row["content"] ?>
          </p>
          <form action="Quiz.php?type=<?php echo $theme ?>" method = "POST">

          <input class="" type="radio" id="css" name="fav" value="<?php echo  $row["isCorrect"]; ?>">
        </div>
        <?php 
          $answer++;
          }
        }

        $conn->close();
        // echo $value;
      ?>
     <!-- <div class="answer-2">
      <p> <span>B:</span>  Answer 2</p>
     </div>
     <div class="answer-3">
     <p> <span>C:</span>  Answer 3</p>
     </div>
     <div class="answer-4">
    <p> <span>D: </span> Answer 4</p>
     </div> -->
     </div>
    <input type="submit"  id="button" value="next" name="submit">
    </form>
   </div> 
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script>
    $( ".radios" ).change(function() {

    $( ".radios" ).prop( "disabled", true );
    $(".1").parent().css( "background-color", "green" );
    $(".1").css("color", "white");



});


   </script>
</body>
</html>

<?php


?>