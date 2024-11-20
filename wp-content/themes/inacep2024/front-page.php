<?php
$page_title = 'INACEP Home';
get_header();
?>


<div class="app">
    <div class="home-hero">
        <h1>INACEP</h1>
        <p>
            The Indiana Chapter of the American College of Emergency Physicians
            was founded in 1972 and represents over 600 Hoosier emergency
            physicians.
        </p>
    </div>
    <div class="home-btns">
        <a href="#"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Your State
            Officials</a
        >
        <a href="#"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Congress</a
        >
    </div>
    <div class="home-content">
        <div class="home-card">
            <div class="home-card-header">
                <i class="fa-solid fa-users-rectangle"></i>
                <h2>Who is INACEP?</h2>
            </div>
            <p>
                <?php echo get_post_meta(get_the_ID(), 'Who is INACEP? - Introduction (First paragraph of text)', true); ?>
                <br />
                <br />
                <?php echo get_post_meta(get_the_ID(), 'Who is INACEP? - Introduction (Second paragraph of text)', true); ?>
            </p>
        </div>
        <div class="home-card">
            <div class="home-card-header">
                <i class="fa-solid fa-bullseye"></i>
                <h2>Our Mission</h2>
            </div>
            <p>
                <?php echo get_post_meta(get_the_ID(), 'INACEP Mission Statement (First paragraph of text)', true); ?>
                <br /><br />
                <?php echo get_post_meta(get_the_ID(), 'INACEP Mission Statement (Second paragraph of text)', true); ?>
            </p>
        </div>
    </div>
    <div class="home-join">
        <h2>Join INACEP and ACEP Today</h2>
        <a href="#" class="join-btn"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Us</a
        >
    </div>
</div>



<?php get_footer();?>
