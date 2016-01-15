<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<footer class="container full-width gutters-all justify-center">
    <div class="col-12 col-xs-10  col-sm-8 col-md-6 col-lg-4">
        <?php
    	$a = new Area('Footer');
    	$a->display($c);
        ?>
        <br>
        <?php echo Core::make('helper/navigation')->getLogInOutLink()?>
        <br>
        &copy;<?php echo date('Y')?>
    </div>
</footer>

</div>
