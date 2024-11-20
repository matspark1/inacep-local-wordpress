<?php
/*
 * Template Name: Donate
*/
?>

<?php
$page_title = 'Donate to INACEP';
get_header();
?>

<div class="app">
    <div class="donate-header">
        <p>Contribute to the INACEP</p>
    </div>

    <!-- leading to two different donations - IEMPAC + Advocacy -->
    <!-- main donation holder -->
    <div class="main-donate-holder">

        <!-- donation link holder -->
        <div class="donate-link-holder">
            <!-- donate iempac type box -->
            <div class="donate-iempac-type box"></div>
            <!-- button leading to donation type -->
            <button class="donate-type-btn"><a href="<?php echo get_permalink(get_page_by_title('Donate IEMPAC')); ?>">IEMPAC</a></button>
            <!-- end of donate-link-holder -->
        </div>

        <!-- donation link holder -->
        <div class="donate-link-holder">
            <!-- donate iempac type box -->
            <div class="donate-iempac-type box"></div>
            <!-- button leading to donation type -->
            <button class="donate-type-btn"><a href="<?php echo get_permalink(get_page_by_title('Donate Advocacy')); ?>">Advocacy Fund</a></button>
            <!-- end of donate-link-holder -->
        </div>
        <!-- end of main-donate-holder -->
    </div>
</div>

<?php get_footer();?>
