<!DOCTYPE html>
<?php 
    include("auth/auth.php");
    isLoggedIn();
    include("head/head.php");
?>
<html>
<body class="site">
    <?php include("nav/nav.php"); ?>
    <?php include("landing/landing.php"); ?>
    <?php include("footer/footer.php"); ?>
</body>
</html>