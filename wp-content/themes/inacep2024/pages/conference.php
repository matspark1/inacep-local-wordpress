<?php
/*
 * Template Name: Conference
*/
?>

<?php
$page_title = 'Conference';
get_header();
?>

<div class="app">
    <div class="conference">
        <div class="conference-header">
            <h2>2024 INACEP Conference</h2>
            <h1>what should i put here</h1>
        </div>
        <div class="conference-hero">
            <div class="hero"></div>
        </div>
        <div class="conference-cards">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/conference/conference1.png" alt="" />
                <div class="card-content">
                    <h1>Join Us!</h1>
                    <h3>The INACEP conference is a yearly conference that</h3>
                    <h3>This year our conference is located at:</h3>
                    <h4><a href="#">NCAA Hall of Champions and Event Center</a>.</h4>
                    <h4>
                        Find more info in our <a href="#">Conference Brochure!</a>
                    </h4>
                    <h4>
                        This activity has been approved for AMA PRA Category 1
                        Credit&trade;.
                    </h4>
                </div>
            </div>

            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/conference/conference2.png" alt="" />
                <div class="card-content">
                    <h1>Registration:</h1>
                    <h3>
                        Registration is now open! Use the links below for public,
                        exhibitor, and sponsor registration.
                    </h3>
                    <h4></h4>
                    <h4>
                        <a href="#">Conference Registration</a>
                    </h4>
                    <h4>
                        <a href="#">Exhibitor/Sponsor Registration</a>
                    </h4>
                    <h4>We hope to see you there!</h4>
                </div>
            </div>

            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/conference/conference3.png" alt="" />
                <div class="card-content">
                    <h1>Accomodation Information:</h1>
                    <h3>Hotel reservations can be made as follows:</h3>
                    <h3>Fairfield by Marriott</h3>
                    <h4>
                        Fairfield Inn & Suites Indianapolis Downtown 501 W Washington
                        Street, Indianapolis, Indiana, USA, 46204
                    </h4>
                    <h4>(1-866-704-2648)</h4>
                    <h4>
                        Use <a href="#">this link</a> to reserve your room in the group
                        block online.
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
