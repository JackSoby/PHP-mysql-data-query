

<!--
/*
What now? There is code missing here. Please figure out how to execute a query against this
fictional DB. For the sake of argument, the "questions" table has data that looks like the below
but with many many rows.


id | question_id | question_text | survey_id | display_order

398 | 23893 | How? | 2 | 1
399 | 23412 | What? | 333 | 3
400 | 89344 | When? | 13 | 1
401 | 34723 | Where? | 232 | 9
*/ -->



<html>
<head>
<title>Survey Questions Galore</title>
</head>
<body>

<h1>
  Here are all the survey questions... in order!
</h1>
<!--
Print out a listing of the questions in the survey in order.

No special styling is needed. Feel free to use whatever basic html you'd like.
-->
<?php
$surveyId = $_COOKIE['survey']['id'];

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_FBR) or trigger_error($mysqli->connect_error());
$query = 'select * from survey_questions where survey_id = $surveyId';
// I am assuming that $surveyId is a integer representing the survey the user is taking. It is being held as a HTTP cookie.
// I am telling the database to grab the all the questions with a matching servey_id.


$result = $mysqli->query($query);
//  I am setting result equal to all the questions with a matching survey id

foreach ($result as $question) {
  echo "$question <br>";
}
// $result is an array of questions. I am looping through the array and placing each question on a new line.
$mysqli->close();
?>
</body>
</html>
