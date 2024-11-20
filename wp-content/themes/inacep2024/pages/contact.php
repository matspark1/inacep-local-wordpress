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

        <!-- holder for input -->
        <div class="contact-form-parent">
            <form>
                <!-- email and name will be side by side -->
                <div class="name-email-input">
                    <!-- name -->
                    <div class="contact-name">
                        <label for="cFName">Name</label>
                        <input type="text" name="cFName" id="cFName" />
                    </div>
                    <!-- email -->
                    <div class="contact-email">
                        <label for="cFEmail">Email Address</label>
                        <input type="text" name="cFEmail" id="cFEmail" />
                    </div>
                </div>

                <!-- subject -->
                <div class="contact-subject">
                    <label for="cFSubject">Subject</label>
                    <input type="text" name="cFSubject" id="cFSubject" />
                </div>

                <!-- message -->
                <div class="contact-message">
                    <label for="cFMessage">Message</label>
                    <textarea id="cFMessage"></textarea>
                </div>

                <!-- submit button -->
                <div class="contact-submit-btn">
                    <button id="contactBtn">Send Message</button>
                </div>
            </form>
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

<?php get_footer();?>
