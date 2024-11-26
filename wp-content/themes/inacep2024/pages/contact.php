<?php
/*
 * Template Name: Contact
 */
?>

<?php
$page_title = 'Contact Us';
get_header();
?>


<div class="app">
    <div class="contact-header">
        <p>Contact Us</p>
    </div>

    <!-- main holder - input and information -->
    <div class="main-contact-parent">
        <!-- holder for contact info -->
        <div class="contact-info-parent">
            <h2>Our Information</h2>

            <!-- body for contact info -->
            <div class="contact-info-body">
                <!-- email address -->
                <div class="contact-stats">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:cindy@inacep.org">cindy@inacep.org</a>
                </div>

                <!-- phone number -->
                <div class="contact-stats">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+3174453335">317-455-3335</a>
                </div>

                <!-- location -->
                <div class="contact-stats loc">
                    <i class="fa-solid fa-location-dot"></i>
                    <div id="locationText">
                        <p>
                            Indiana Chapter, American College of American Physicians
                            <br />
                            PO Box 17136 Indianapolis, IN 46217
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="ae8622d" title="Contact Us Form"]'); ?>



    </div>
    </div>

    <div class="contact-mobile">
        <div class="contact-mobile-container">
            <h2>Our Contact Information</h2>
            <div class="contact-stats-holder">
                <div class="contact-stats">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:cindy@inacep.org">cindy@inacep.org</a>
                </div>

                <!-- phone number -->
                <div class="contact-stats">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+3174453335">317-455-3335</a>
                </div>

                <!-- location -->
                <div class="contact-stats loc">
                    <i class="fa-solid fa-location-dot"></i>
                    <div id="locationText">
                        <p>
                            Indiana Chapter, American College of American Physicians
                            <br />
                            PO Box 17136 Indianapolis, IN 46217
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>