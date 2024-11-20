<!-- HEADER -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php global $page_title; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'INACEP'; ?></title>
    <?php wp_head(); ?>
    <link rel="icon" type="image" href="<?php echo get_template_directory_uri(); ?>/images/inacep_favicon.ico" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
</head>
<body>
<nav>
    <div class="toplinks">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_test4.png" alt="Logo" /></a>
        <div class="nav-links">
            <a href="<?php echo get_permalink(get_page_by_title('Conference')); ?>">Conference</a>
            <a href="<?php echo get_permalink(get_page_by_title('IEMPAC')); ?>">IEMPAC</a>
            <a href="<?php echo get_permalink(get_page_by_title('Advocacy')); ?>">Advocacy</a>
            <a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>">Contact</a>
            <a href="<?php echo get_permalink(get_page_by_title('Donate')); ?>" class="nav-donate">Donate</a>
        </div>
        <div class="hamburger-icon" id="mobilebutton">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <li><a href="<?php echo get_permalink(get_page_by_title('Conference')); ?>" class="mobile-link">Conference <i class="fa-solid fa-arrow-right"></i></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('IEMPAC')); ?>" class="mobile-link">IEMPAC <i class="fa-solid fa-arrow-right"></i></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Advocacy')); ?>" class="mobile-link">Advocacy <i class="fa-solid fa-arrow-right"></i></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="mobile-link">Contact <i class="fa-solid fa-arrow-right"></i></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Donate')); ?>" class="mobile-link">Donate <i class="fa-solid fa-arrow-right"></i></a></li>
                <li class="mobile-sub-link"><a href="<?php echo get_permalink(get_page_by_title('EMPulse')); ?>" class="mobile-link2">EMPulse <i class="fa-solid fa-arrow-right"></i></a></li>
                <li class="mobile-sub-link"><a href="<?php echo get_permalink(get_page_by_title('Board of Directors')); ?>" class="mobile-link2">Board of Directors <i class="fa-solid fa-arrow-right"></i></a></li>
                <li class="mobile-sub-link"><a href="<?php echo get_permalink(get_page_by_title('By-Laws')); ?>" class="mobile-link2">By-Laws <i class="fa-solid fa-arrow-right"></i></a></li>
                <li class="mobile-sub-link"><a href="<?php echo get_permalink(get_page_by_title('Career Opportunities')); ?>" class="mobile-link2">Career Opportunities <i class="fa-solid fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="sublinks-container">
        <div class="sublinks">
            <a href="<?php echo get_permalink(get_page_by_title('EMPulse')); ?>">EMPulse</a>
            <a href="<?php echo get_permalink(get_page_by_title('Board of Directors')); ?>">Board of Directors</a>
            <a href="<?php echo get_permalink(get_page_by_title('By-Laws')); ?>">By-Laws</a>
            <a href="<?php echo get_permalink(get_page_by_title('Career Opportunities')); ?>">Career Opportunities</a>
        </div>
    </div>
</nav>
<!-- HEADER -->
