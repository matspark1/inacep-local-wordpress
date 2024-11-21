<?php
/*
 * Template Name: Advocacy
*/
?>

<?php
$page_title = 'Advocacy Fund';
get_header();
?>

<div class="app">
    <div class="advocacy-hero">
        <h1>Advocacy Fund</h1>
        <a href="<?php echo get_permalink(get_page_by_title('Donate Advocacy')); ?>">Contribute Today</a>
    </div>
    <div class="iempac-box-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                Over the past several years, it has become clear that additional
                funds are needed to support our efforts for the EM family and
                address future challenges. For this reason, INACEP created an
                Advocacy Fund to support shared goals among EM physicians. While the
                2024-2025 goal focuses on securing fair reimbursement, this fund may
                also address issues such as medical malpractice, ED boarding,
                provider relationships, or patient-care concerns in the future.
            </p>
        </div>
    </div>
    <div class="iempac-box-container-mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                To demonstrate our commitment to advocacy, INACEP made a significant
                donation to the new advocacy fund. We ask individuals to consider
                donating any amount they feel comfortable with. For EM practice
                groups, we suggest a contribution of $0.05 per patient based on your
                group's annual average. Thank you for supporting INACEP’s efforts
                and for being part of our EM family.
            </p>
        </div>
    </div>
    <div class="iempac-box-container-two">
        <div class="iempac-text-box">
            <p>
                To demonstrate our commitment to advocacy, INACEP made a significant
                donation to the new advocacy fund. We ask individuals to consider
                donating any amount they feel comfortable with. For EM practice
                groups, we suggest a contribution of $0.05 per patient based on your
                group's annual average. Thank you for supporting INACEP’s efforts
                and for being part of our EM family.
            </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="" />
    </div>
    <div class="iempac-join">
        <a href="<?php echo get_permalink(get_page_by_title('Donate Advocacy')); ?>" class="join-btn">Contribute Today</a>
    </div>
</div>


<?php get_footer();?>
