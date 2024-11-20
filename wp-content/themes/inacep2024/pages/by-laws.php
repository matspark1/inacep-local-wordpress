<?php
/*
 * Template Name: By-Laws
*/
?>

<?php
$page_title = 'By-Laws';
get_header();
?>

<div class="app">
    <div class="empulse-header">
        <h1>INACEP By-Laws</h1>
        <p>
            Explore the operational structure and policies of Indiana ACEP,
            including membership qualifications, leadership roles, and procedural
            rules, as outlined in the chapter's bylaws.
        </p>
    </div>

    <div class="current-empulse">
        <div class="pdf">
            <object
                data="<?php echo get_template_directory_uri(); ?>/images/INACEP-By-Laws.pdf"
                type="application/pdf"
            ></object>
        </div>
        <div class="btns">
            <a href="<?php echo get_template_directory_uri(); ?>/images/INACEP-By-Laws.pdf" target="_blank"
            >Full View <i class="fa-solid fa-arrow-right"></i
                ></a>
            <a href="<?php echo get_template_directory_uri(); ?>/images/INACEP-By-Laws.pdf" download="INACEP-By-Laws.pdf"
            >Download <i class="fa-solid fa-download"></i
                ></a>
        </div>
    </div>
</div>

<?php get_footer();?>
