<?php
	session_start();
?>

<!--	Author: Mike O'Kane
		Date:	December 2007
		File:	math-quiz.php
		Purpose: Web session example
-->
<style>
.myDiv {
  border: 5px outset red;
  background-color: lightblue;
  text-align: left;
  height:100px;
}
</style>

<html>
<head>
	<title>Math Quiz</title>
	<link rel ="stylesheet" type="text/css" href="quiz.css">
</head>

<body>
<?php
    print ("<div class='heading'>");
    if (!isset($_SESSION['score']))
	{
		$_SESSION['score'] = 0;
		$_SESSION['count'] = 0;
		print (" <h1>Welcome to the Math Quiz!</h1> ");
	}

	if (isset($_POST['userAnswer']))
	{
		$_SESSION['count'] = $_SESSION['count'] + 1;
		$userAnswer = $_POST['userAnswer'];
		$correctAnswer = $_SESSION['num1'] + $_SESSION['num2'];
		if ($correctAnswer == $userAnswer)
		{
			$_SESSION['score'] = $_SESSION['score'] + 1;
			print (" <h1>That is correct!</h1> ");
		}
		else
			print ("<h1>Sorry! The correct sum of ".$_SESSION['num1']." and ".$_SESSION['num2'].
				" is $correctAnswer</h1>");
	}
    print ("</div>");

	print("<p>SCORE SO FAR: <strong>".$_SESSION['score']."</strong> OUT OF A POSSIBLE <strong>".$_SESSION['count']."</strong></p>");

	print ("<h2>Can you add these numbers?</h2>");
	print ("<form action = \"math-quiz.php\" method = \"post\" >");
	$_SESSION['num1'] = rand(1, 20);
	$_SESSION['num2'] = rand(1, 20);

	print("<label style=\"width: 200px;\">".$_SESSION['num1']." + ".$_SESSION['num2']." = ");
	print("<input type = \"text\" size = \"10\" name = \"userAnswer\"></label>");
	print("<input class = \"submit\" type = \"submit\" value = \"Submit\"></form>");
	print("<p><a href=\"math-quit.php\">Ready to quit?</a></p>");
?>
</body>
</html>
