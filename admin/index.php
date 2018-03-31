<?php
	session_start();
	$noNavbar='';
	if (isset($_SESSION['Username'])) {
		header('Location: dashboard.php'); //redirect to dashboard page
	}

	//  print_r($_SESSION);
	include 'init.php';



	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$hashedPass = sha1($password);

		$stmt = $con->prepare("SELECT
            `userID`,
            `userName`,
            `userPassword`,
            `userEmail`,
            `userFullName`, 
            `userGroupID`, 
            `userTrustStatus`,
            `userRegStatus` 
            FROM `users` 
            WHERE `userName`=? AND `userPassword`=? AND `userGroupID`=1");
		$stmt->execute(array($username, $hashedPass));
		$count = $stmt->rowCount();


		if ($count > 0) {

			$_SESSION['Username'] = $username;//register session user name
			echo("Welcome " . $username);
			header('Location: dashboard.php'); //redirect to dashboard page
			exit();

		}


	}
?>
<form class="login" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off"/>
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>
    <input class="btn btn-primary btn-block" type="submit" value="Login"/>
</form>
<?php
	//echo (lang('MESSAGE').'   '.lang('ADMIN'));

?>
<?php
	include $tpl . "footer.php"

?>
