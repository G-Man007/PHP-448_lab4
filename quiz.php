<?php
  $q1 = $_POST["Q1"];
  $q2 = $_POST["Q2"];
  $q3 = $_POST["Q3"];
  $q4 = $_POST["Q4"];
  $q5 = $_POST["Q5"];
  echo '<head><title>Quiz Results</title></head>';
  echo "<h2> Quiz Results</h2> ";
  echo "Question 1: Who was George Washington's Vice President?<br>";
  echo "You answered: " . $q1 . "<br>";
  echo "Correct answer: John Adams<br><br>";

  echo "Question 2: How old is the universe?<br>";
  echo "You answered: " . $q2 . "<br>";
  echo "Correct answer: 13.772 Billion Years Old<br><br>";

  echo "Question 3: The 'Great Northern War' was primarily between which two countries?<br>";
  echo "You answered: " . $q3 . "<br>";
  echo "Correct answer: Russia & Sweden<br><br>";

  echo "Question 4: Two cars are traveling in the same direction along the same route. The red car travels at a constant speed of 40 miles per hour, and the black car is traveling at a constant speed of 50 miles per hour. If the red car is 20 miles ahead of the black car, how many hours will it take the black car to overtake the red car?<br>";
  echo "You answered: " . $q4 . "<br>";
  echo "Correct answer: 2 Hours<br><br>";

  echo "Question 5: If you choose an answer to this question at random, what is the chance you will be correct?<br>";
  echo "You answered: " . $q5 . "<br>";
  echo "Correct answer: 25% || 50% <br><br>";

  $temp = 0;
	if($q1=="John Adams"){
		$temp++;}
	if($q2=="13.772 Billion Years Old"){
		$temp++;}
	if($q3=="Russia & Sweden"){
		$temp++;}
	if($q4=="2 Hours"){
		$temp++;}
	if($q5=="25%"||$q5=="50%"){
		$temp++;}
 $score = ($temp/5)*100;
  echo "Final Score: " . $score ."%";
?>
