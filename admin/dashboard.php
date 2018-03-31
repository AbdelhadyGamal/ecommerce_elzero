<?php
	session_start();
	if (isset($_SESSION['Username'])) {
		include 'init.php';
		echo("<h1 class='text-center'> Welcome " . $_SESSION['Username'] . "</h1>");
		echo("    <input class=\"btn btn-danger btn-block\" type=\"submit\" value=\"Login\"/>
");

	} else {
		//echo("You are not Authorized to view this page!");
		header("Location :index.php");
	}
?>


<?php
	include $tpl . "footer.php"
?>