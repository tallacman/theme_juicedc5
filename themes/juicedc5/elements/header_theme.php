<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">

        <header class="container full-width gutters-all justify-center">
            <div class="col-12 col-xs-10  col-sm-8 col-md-6 col-lg-4">
                <?php
            	$a = new GlobalArea('Header Site Title');
            	$a->display();
                ?>
                <nav>
                    <?php
                	$a = new GlobalArea('Header Navigation');
                	$a->display();
                    ?>
                </nav>
            </div>
        </header>
