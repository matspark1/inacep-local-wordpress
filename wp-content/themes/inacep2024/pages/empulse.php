<?php
/*
 * Template Name: EMPulse
*/
?>

<?php
$page_title = 'EMPulse';
get_header();
?>

<div class="app">
    <div class="empulse-header">
        <h1>EMPulse Newsletter</h1>
        <p>
            Stay informed with the latest updates in emergency medicine from
            Indiana ACEP
        </p>
    </div>

    <div class="current-empulse">
        <div class="current-empulse-header">
            <h2>Newsletter Spotlight</h2>
            <div class="timeframe">
                <i class="fa-regular fa-clock"></i>
                <p>Fall 2024</p>
            </div>
        </div>
        <div class="current-empulse-header-mobile">
            <div class="timeframe">
                <i class="fa-regular fa-clock"></i>
                <p>Fall 2024</p>
            </div>
            <h2>Newsletter Spotlight</h2>
        </div>
        <p class="desc">
            Dive into our latest edition! Celebrate the 2024 conference
            highlights, meet our new board members, and discover the Osborn
            Memorial Award recipient. Catch up on legislative updates, a
            fascinating case study, and exciting employment opportunities. Join us
            in welcoming new members and explore the latest on our bulletin board!
        </p>

        <div class="pdf">
            <object
                data="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/2024-Fall-EMpulse.pdf"
                type="application/pdf"
            ></object>
        </div>
        <div class="btns">
            <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/2024-Fall-EMpulse.pdf" target="_blank"
            >Full View <i class="fa-solid fa-arrow-right"></i
                ></a>
            <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/2024-Fall-EMpulse.pdf" download="EMPulse-Fall-2024.pdf"
            >Download <i class="fa-solid fa-download"></i
                ></a>
        </div>
    </div>

    <div class="empulse-header2">
        <h1>EMPulse Archives</h1>
    </div>
    <div class="archives">
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring / Summer 2024</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Winter 2023-2024</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall 2023</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2023</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall - Winter 2022</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/images/pdfs/EMPulse/archives/EMpulse-spring-summer-2024.pdf" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2022</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
    </div>
</div>

<?php get_footer();?>
