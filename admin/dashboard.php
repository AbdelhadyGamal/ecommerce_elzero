<?php
    session_start();
    include 'init.php';
    include $tpl."header.php";
    if (isset($_SESSION['Username'])) {
        echo("<h1 class='text-center'> Welcome ".$_SESSION['Username']."</h1>");
        
    }
    else {
        //echo("You are not Authorized to view this page!");
        header("Location :index.php");
    }
 ?>
 

<?php
    include $tpl."footer.php"
?>