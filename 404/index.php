<?php
header('Cache-Control: max-age=86400');
$myURL = basename(__DIR__);
$frontLInk = '';
if ($myURL == "masterwbd") {
    $frontLInk = 'site/';
} else {
    $frontLInk = '../site/';
}

require($frontLInk . 'includes/global_header.php');
?>


        <?php require($frontLInk . 'includes/global_masthead.php');?>
        <?php require($frontLInk . 'includes/global_main_nav.php');?>
        <div id="main">
            <div class="columns">
                <div class="column is-two-thirds">
                    <section class="section">
                        <div class="container has-text-centered">
                            <h1 class="title">404 - Page Not Found</h1>
                            <p>The page you are looking for is missing or does not exsist.</p>
                            
                        </div>
                    </section>

                </div>
                <div class="column is-one-third">
                    <section class="section">
                        <div class="container">


                        </div>
                    </section>
                </div>



            </div>

        </div>
       


    <?php require($frontLInk . 'includes/global_footer.php'); ?>