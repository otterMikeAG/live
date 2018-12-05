<?php
    include("../../auth/auth.php"); 
    canAccessRoute();
?>
<!DOCTYPE html>
<?php include("../../head/overview.php"); ?>
<html>
<body class="site">
<?php include("../../nav/dashboard-nav.php"); ?>
    <main class="site-content is-centered has-text-centered desktop">
        <?php include("../offer-help/preview.php"); ?>
        <?php include("overview.php"); ?>
    </main>
<?php include("../../footer/footer.php"); ?>
</body>
<script>
    feather.replace();
</script>
</html>