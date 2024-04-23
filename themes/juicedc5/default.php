<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
$this->inc('elements/header_theme.php');
?>


<main class="container full-width gutters-all justify-center">
    <div class="col-12 col-xs-10  col-sm-8 col-md-6 col-lg-4">
        <?php
    	$a = new Area('Main');
    	$a->display($c);
        ?>
    </div>
</main>



<?php
$this->inc('elements/footer_theme.php');
$this->inc('elements/footer.php');
?>
