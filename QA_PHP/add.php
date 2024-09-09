<?php include 'db.php'; ?>
<?php
    if(isset($_POST['submit'])) {
        //Get post variables
        $question_number = $_POST['question_number'];
        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];
        //Choices array
        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = isset($_POST['choice5']) ? $_POST['choice5'] : ''; 

        // Prepare the statement for inserting the question
        $stmt = $mysqli->prepare("INSERT INTO questions (question_number, text) VALUES (?, ?)");
        $stmt->bind_param("is", $question_number, $question_text);

        // Run query
        if ($stmt->execute()) {
            // Iterate over choices array and insert into the database
            foreach($choices as $choice => $value) {
                if($value != '') {
                    $is_correct = ($correct_choice == $choice) ? 1 : 0;

                    // Prepare the statement for inserting the choice
                    $stmt = $mysqli->prepare("INSERT INTO choices (question_number, is_correct, text) VALUES (?, ?, ?)");
                    $stmt->bind_param("iis", $question_number, $is_correct, $value);

                    // Run query for choice
                    if (!$stmt->execute()) {
                        die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
                    }
                }
            }
            $msg = 'Question has been added';
        } else {
            die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
        }

        // Get total questions
        $query = "SELECT * FROM questions";
        // Get results
        $questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $questions->num_rows;
        $next = $total+1;
    }
?>
<!DOCTYPE HTML>
<html>
 <head>
 <meta charset="utf-8" />
 <title>Question App</title>
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
    <h2>Add A Question</h2>
    <?php
        if(isset($msg)) {
            echo '<p>'.$msg.'</p>';
        }
    ?>
    <form method="post" action="add.php">
        <p>
            <label>Question Number</label>
            <input type="number" value="<?php echo $next; ?>" name="question_number" />
        </p>
        <p>
            <label>Question Text</label>
            <input type="text" name="question_text" />
        </p>
        <p>
            <label>Choice #1: </label>
            <input type="text" name="choice1" />
        </p>
        <p>
            <label>Choice #2: </label>
            <input type="text" name="choice2" />
        </p>
        <p>
            <label>Choice #3: </label>
            <input type="text" name="choice3" />
        </p>
        <p>
            <label>Choice #4: </label>
            <input type="text" name="choice4" />
        </p>
        <p>
            <label>Choice #5: </label>
            <input type="text" name="choice5" />
        </p>
        <p>
            <label>Correct Choice Number: </label>
            <input type="number" name="correct_choice" />
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
    </form>
   </div>
 </main>
 <footer>
 <div class="container">
    Copyright &copy; 2024, Orhun Ipek Question App
 </div>
</footer>
</body>
</html>
