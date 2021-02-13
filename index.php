<?php
    header('Cache-Control: max-age=86400');
$myURL = basename(__DIR__);
$frontLInk = '';
if ($myURL == "masterwbd" || $myURL == "html")  {
    $frontLInk = 'site/';
} else {
    $frontLInk = '../site/';
}

require($frontLInk . 'includes/global_header.php');
/*require('site/includes/global_header.php');*/

?>

<?php require($frontLInk . 'includes/global_masthead.php');?>
<?php require($frontLInk . 'includes/global_main_nav.php');?>
<div id="main-content" class="container is-fluid">
    <div class="columns level is-mobile">
        <div class="column level-left is-two-thirds">
            <section class="section">
                <div class="container">
                    <h1 class="title">Tom's Count Down</h1>
                    <!-- Display the countdown timer in an element -->
                    <p id="demo"></p>

                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Jan 20, 2021 12:00:00").getTime("America/New_York");

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Display the result in the element with id="demo"
                        let ctime = "Count Down: " + days + "d " + hours + "h " + minutes + "m " + seconds +
                            "s ";

                        const eastOptions = {

                            timeZoneName: "America/New_York",
                            hour12: true,
                            hour: "2-digit",
                            minute: "2-digit",
                            second: "2-digit"

                        };
                        //console.log(date.getTimezoneOffset());

                        let curNy = new Date().toLocalTimeString("en-US", eastOptions);

                        document.getElementById("demo").innerHTML = ctime + '<br />' + 'New  York Time: ' +
                            curNy;

                        // If the count down is finished, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demo").innerHTML = "WE ARE EXPIRED IF THIS FAILS";
                        }
                    }, 1000);
                    </script>

                </div>
            </section>
        </div>
        <div class="column level-right is-one-third">
            <?php require($frontLInk . 'includes/global_right_rail.php');?>
        </div>
    </div>
</div>

<?php       
require($frontLInk . 'includes/global_footer.php');
?>