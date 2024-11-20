<?php
/*
 * Template Name: IEMPAC
*/
?>

<?php
$page_title = 'IEMPAC';
get_header();
?>

<div class="app">
    <div class="iempac-hero">
        <h1>Indiana Emergency Medicine Political Action Committee</h1>
        <a href="#">Contribute Today</a>
    </div>
    <div class="iempac-box-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'IEMPAC Card 1', true); ?>

            </p>
        </div>
    </div>
    <div class="iempac-box-container-mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'IEMPAC Card 2', true); ?>
            </p>
        </div>
    </div>
    <div class="iempac-box-container-two">
        <div class="iempac-text-box">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'IEMPAC Card 2', true); ?>
            </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
    </div>
    <div class="iempac-join">
        <a href="#" class="join-btn">Contribute Today</a>
    </div>
</div>

<?php get_footer();?>
