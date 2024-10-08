<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
//Set question number
$number = (int) $_GET['n'];

/*
* Get total questions
*/
$query = "SELECT * FROM 'questions'";
//Get results
$resutls = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

/*
* Get Question
*/
$query = "SELECT * FROM 'questions' 
WHERE question_number = $number";
//Get result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();
?>
/*
* Get choices
*/
$query = "SELECT * FROM 'choices'
WHERE question_number = $number"; 

//Get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();


?>


<!DOCTYPE HTML>
<html>
 <head>
 <meta charset="utf-8" />
 <title>Question App<title>
 <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
 <header>
  <div class="container">
   <h1>Question App</h1>
  </div>
 </header>
 <main>
  <div class="container">
    <div class="current">Question <?php echo $question['question_number']?> of <?php $total; ?></div>
    <p class="question">
        <?php echo $question['text']; ?><?php echo $question['']; ?>
    </p>
    <form method="post" action="process.php">
        <ul class="choices">
        <?php while($row = $choices->fetch_assoc()): ?>

            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
        <?php endwhile; ?>
        </ul>
        <input type="submit" value="Submit" />
        <input type="hidden" name="number" value="<?php echo $number; ?>" />
   </div>
 </main>
 <footer>
 <div class="container">
    Copyright &copy; 2024, Question App
 </div>
</footer>
</body>
</html>