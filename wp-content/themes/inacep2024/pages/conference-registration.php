<?php
/*
 * Template Name: Conference Registration
*/
?>

<?php
$page_title = 'Conference Registration';
get_header();
?>

<div class="app">
    <div class="register-view-box">
        <h1>Sponsors or Exhibitors</h1>
        <a
            href="<?php echo get_template_directory_uri(); ?>/images/pdfs/Exhibitor-and-Sponsor-Letter.pdf"
            target="_blank"
            class="warning"
        >
            <p>
                To register online, you will need to pay with a debit or credit
                card. If you’d like to pay with a check, click here to download,
                complete, and mail the form.
            </p>
        </a>
        <h2 class="type">Register Today</h2>
        <div class="register-btns">
            <a href="<?php echo get_permalink(get_page_by_title('Member Registration')); ?>">Member Registration</a>
            <a href="<?php echo get_permalink(get_page_by_title('Exhibitor/Sponsor Registration')); ?>">Exhibitor/Sponsor Registration</a>
        </div>
    </div>
</div>

<?php get_footer();?>
