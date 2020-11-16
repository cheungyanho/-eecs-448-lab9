<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

function score()
{
  $count = 0;
  if($_POST["q1"]=="1")
  {
    $count++;
  }if($_POST["q2"]=="50")
  {
    $count++;
  }if($_POST["q3"]=="44")
  {
    $count++;
  }if($_POST["q4"]=="10")
  {
    $count++;
  }if($_POST=="2")
  {
    $count++;
  }
  $result = $count/5*100;
  return $result;
}

echo "Question 1 : What is the answer of 1x1?<br>  You answered: ".$q1."<br>Correct answer: 1<br><br>";
echo "Question 2 : How many states are there in US?<br>  You answered: ".$q2."<br>Correct answer: 50<br><br>";
echo "Question 3 : How many countries are there in Europe?<br>  You answered: ".$q3."<br>Correct answer: 67<br><br>";
echo "Question 4 : What is the answer of 12-8/4?<br>  You answered: ".$q4."<br>Correct answer: 10<br><br>";
echo "Question 5 : 1+1= ?<br>  You answered: ".$q5."<br>Correct answer: 2<br><br>";
echo "Your score is: ".score()."%<br>";
?>
