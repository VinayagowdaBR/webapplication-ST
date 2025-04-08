<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- - - - -->
    <!-- Favicon -->
    <link rel="icon" type="image/ico" sizes="32x32" href="<?php echo base_url(); ?>assets/images/logos/st_LOGO.ico">
    <!-- - - - -->
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/odometer-theme-minimal.css">
    <!-- - - - -->
    <!-- Main CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- - - - -->
    <!-- Preload CSS and Fonts -->
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/swiper.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/fancybox.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/odometer-theme-minimal.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo base_url(); ?>assets/images/home_slider/Website Design & Development.jpg" as="image">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- - - - -->
    <!-- Secondary Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    
    
    
    
    
    <style>
        
        /* Style for scrollable sub-menu */
.scrollable-submenu {
    max-height: 240px; /* Adjust height as needed to show ~5 items */
    overflow-y: auto;
    overflow-x: hidden;
    padding-right: 10px; /* Space for scrollbar */
}

/* Optional: Nice scrollbar style (for modern browsers) */
.scrollable-submenu::-webkit-scrollbar {
    width: 6px;
}

.scrollable-submenu::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.scrollable-submenu::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 5px;
}

.scrollable-submenu::-webkit-scrollbar-thumb:hover {
    background: #555;
}

    </style>

    <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');
    $CI->load->model('Model_lang');
    $CI->load->model('admin/Model_menu');

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if($class_name == 'home')
    {
        echo '<meta name="description" content="'.$page_home['meta_description'].'">';
        echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
        echo '<title>'.$page_home['title'].'</title>';
    }
    if($class_name == 'about')
    {
        echo '<meta name="description" content="'.$page_about['md_about'].'">';
        echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
        echo '<title>'.$page_about['mt_about'].'</title>';
    }
    if($class_name == 'terms_and_conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy_policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'faq')
    {
        echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
        echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
        echo '<title>'.$page_faq['mt_faq'].'</title>';
    }
    if($class_name == 'team')
    {
        echo '<meta name="description" content="'.$page_team['md_team'].'">';
        echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
        echo '<title>'.$page_team['mt_team'].'</title>';
    }
    if($class_name == 'team_member')
    {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
        echo '<title>'.$single_team_member['meta_title'].'</title>';
    }
    if($class_name == 'portfolio')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
            echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
            echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';  
        } else {
            $single_portfolio = $this->Model_portfolio->portfolio_detail($segment_3);
            echo '<meta name="description" content="'.$single_portfolio['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_portfolio['meta_keyword'].'">';
            echo '<title>'.$single_portfolio['meta_title'].'</title>';
        }       
    }
    if($class_name == 'testimonial')
    {
        echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
        echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
        echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
    }
    if($class_name == 'contact')
    {
        echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
        echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
        echo '<title>'.$page_contact['mt_contact'].'</title>';
    }
    if($class_name == 'search')
    {
        echo '<meta name="description" content="'.$page_search['md_search'].'">';
        echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
        echo '<title>'.$page_search['mt_search'].'</title>';
    }
    if($class_name == 'terms-and-conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy-policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'pricing')
    {
        echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
        echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
        echo '<title>'.$page_pricing['mt_pricing'].'</title>';
    }
    if($class_name == 'photo_gallery')
    {
        echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
        echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
        echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
    }
    if($class_name == 'service')
    {
        if($segment_3 == 0) {
            // echo '<meta name="description" content="'.$page_service['md_service'].'">';
            // echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
            // echo '<title>'.$page_service['mt_service'].'</title>';  
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="'.$single_service['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
            echo '<title>'.$single_service['meta_title'].'</title>';
        }       
    }
    if($class_name == 'category')
    {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="'.$single_category['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
        echo '<title>'.$single_category['meta_title'].'</title>';     
    }
    if($class_name == 'news')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_news['md_news'].'">';
            echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
            echo '<title>'.$page_news['mt_news'].'</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
            echo '<title>'.$news_single_item['meta_title'].'</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    if($class_name == 'event')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_event['md_event'].'">';
            echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
            echo '<title>'.$page_event['mt_event'].'</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
            echo '<title>'.$event_single_item['meta_title'].'</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css">

    <?php if($_SESSION['sess_layout_direction'] == 'Right'): ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/rtl.css">
    <?php endif; ?>

    <!--Js-->
    <script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/toastr.min.js"></script>

    <style>
    /* Existing styles (unchanged) */
    .header-area,
    ul.nav-menu li ul li a,
    .searchbar .input-search,
    .text-animated li a,
    .slider-one .owl-nav .owl-prev,
    .slider-one .owl-nav .owl-next,
    .about-tab:before,
    .progress-gallery .bar-container .progress .progress-bar-custom,
    .choose-item:before,
    .feature-icon i,
    .feature-item:hover .feature-text,
    .bg-counterup,
    .portfolio-bg,
    .faq-header button.faq-button,
    .faq-header button.faq-button.collapsed:hover,
    .booking-area:before,
    .bg-booking,
    .team-carousel .owl-nav .owl-prev,
    .team-carousel .owl-nav .owl-next,
    .team-text,
    .team-social li a:hover,
    .price-header i,
    .button-df a,
    .bg-testimonial,
    .testimonial-carousel .owl-dots .owl-dot,
    .blog-carousel .owl-nav .owl-prev,
    .blog-carousel .owl-nav .owl-next,
    .blog-author li.blog-button a,
    .call-us:before,
    .footer-item h3:before,
    .footer-item h3:after,
    .footer-item .btn,
    .footer-item ul.footer-social li a,
    .scroll-top,
    .headstyle h4:before,
    .headstyle h4:after,
    .team-detail-text ul li a,
    .sidebar-item h3:before,
    .sidebar-item h3:after,
    .event-contact-item,
    .gallery-bg,
    .testimonial-grid .testimonial-description p:before,
    .testimonial-two-carousel .testimonial-description p:before,
    .form-button .btn,
    .project-carousel .owl-nav .owl-prev,
    .project-carousel .owl-nav .owl-next,
    .sidebar-item button,
    .contact-item:hover .contact-icon,
    .contact-form .btn,
    span.input-group-btn {
        background: #<?php echo $setting['front_end_color']; ?>!important;
    }

    ul.nav-menu li:hover > a,
    .searchbar .search-button:hover,
    .text-animated li a:hover,
    .text-animated li:last-child a:hover,
    .slider-one .owl-nav .owl-prev:hover,
    .slider-one .owl-nav .owl-next:hover,
    .feature-item:hover .feature-icon i,
    .services-text a:hover,
    .portfolio-menu li.filtr-active,
    .portfolio-menu li:hover,
    .portfolio-text h3 a:hover,
    .form-button .btn2:hover,
    .blog-item h3 a:hover,
    .blog-item span i,
    .blog-author li a i,
    .blog-author li a:hover,
    .call-us .button a:hover,
    .footer-item ul li a:hover,
    .team-info ul li span,
    li.event-header-left i,
    .recent-text a:hover,
    .event-contact-item:hover .event-contact-icon,
    .service-sidebar-item ul li a:hover,
    .portfolio-details ul li span,
    .sidebar-item ul li a:hover,
    .blog-one-text h3 a:hover,
    .blog-one-text ul li i,
    .single-blog ul li i,
    .contact-icon {
        color: #<?php echo $setting['front_end_color']; ?>!important;
    }

    .text-animated li a,
    .slider-one .owl-nav .owl-prev,
    .slider-one .owl-nav .owl-next,
    .feature-icon i,
    .feature-item:hover .feature-text,
    .footer-item .form-control,
    .footer-item .btn,
    .footer-item ul.footer-social li a,
    .event-contact-item:hover .event-contact-icon,
    .form-control:focus,
    .sidebar-item button,
    .contact-item:hover .contact-icon,
    .contact-form .btn {
        border-color: #<?php echo $setting['front_end_color']; ?>!important;
    }

    .video-button span {
        border-left-color: #<?php echo $setting['front_end_color']; ?>!important;
    }

    .portfolio-menu li.filtr-active,
    .team-social li a:hover {
        border-bottom-color: #<?php echo $setting['front_end_color']; ?>!important;
    }

    .portfolio-menu li.filtr-active:before,
    .team-social li a:hover {
        border-top-color: #<?php echo $setting['front_end_color']; ?>!important;
    }

    ul.nav-menu li ul li:hover > a {
        background: #f1f1f1!important;
    }

    .text-animated li a:hover,
    .text-animated li:last-child a:hover,
    .slider-one .owl-nav .owl-prev:hover,
    .slider-one .owl-nav .owl-next:hover {
        background: #fff!important;
        border-color: #fff!important;
    }

    .text-animated li:last-child a {
        background: #313131!important;
        border-color: #313131!important;
    }

    .blog-author li.blog-button a,
    .blog-author li.blog-button i,
    .footer-item ul.footer-social li a:hover,
    .contact-item:hover .contact-icon {
        color: #fff!important;
    }

    .feature-item:hover .feature-icon i,
    .faq-header button.faq-button.collapsed {
        background: #fff!important;
    }

    .team-carousel .owl-nav .owl-prev:hover,
    .team-carousel .owl-nav .owl-next:hover,
    .blog-carousel .owl-nav .owl-prev:hover,
    .blog-carousel .owl-nav .owl-next:hover,
    .button-df a:hover,
    .testimonial-carousel .owl-dots .owl-dot.active,
    .blog-author li.blog-button a:hover,
    .footer-item ul.footer-social li a:hover,
    .team-detail-text ul li a:hover,
    .form-button .btn:hover,
    .project-carousel .owl-nav .owl-prev:hover,
    .project-carousel .owl-nav .owl-next:hover,
    .contact-form .btn:hover {
        background: #313131!important;
    }

    .footer-item ul.footer-social li a:hover,
    .contact-form .btn:hover {
        border-color: #313131!important;
    }

    .event-contact-item:hover,
    .faq-body,
    .feature-item:hover .feature-icon i,
    .faq-header button.faq-button.collapsed {
        background: #f5f5f5!important;
    }

    .booking-form input:focus,
    .booking-form textarea:focus {
        border-color: #fff!important;
    }

    .booking-form button[type="submit"] {
        background: #313131!important;
        color: #fff!important;
    }

    .booking-form button[type="submit"]:hover {
        background: #fff!important;
        color: #313131!important;
    }

    /* Dropdown Menu Fixes */
    .menu-item-has-children {
        position: relative;
        background: transparent; /* Ensure parent has no white background */
    }

    /* Style for the main menu to set a consistent background */
    .nav-menu {
        background: #<?php echo $setting['front_end_color']; ?>; /* Match your theme color */
        padding: 0; /* Remove any default padding */
        margin: 0; /* Remove any default margin */
    }

    /* Style for the first-level dropdown */
    .nav-menu .menu-item-has-children > ul {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 200px; /* Minimum width for the dropdown */
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 0; /* Remove default padding to eliminate top/bottom space */
        display: none; /* Hidden by default */
        z-index: 1000; /* Ensure dropdown is above other elements */
        margin: 0; /* Remove any default margin */
    }

    /* Show dropdown on hover */
    .nav-menu .menu-item-has-children:hover > ul {
        display: block;
    }

    /* Style for nested (child) dropdowns */
    .nav-menu .menu-item-has-children ul .menu-item-has-children > ul {
        position: absolute;
        top: 0; /* Align with the top of the parent item */
        left: 100%; /* Position to the right of the parent */
        min-width: 200px; /* Minimum width for nested dropdowns */
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 0; /* Remove default padding */
        display: none; /* Hidden by default */
        margin: 0; /* Remove any default margin */
        margin-left: -1px; /* Align edges to remove gap */
        z-index: 1000; /* Ensure nested dropdown is above other elements */
    }

    /* Show nested dropdown on hover */
    .nav-menu .menu-item-has-children ul .menu-item-has-children:hover > ul {
        display: block;
    }

    /* Increase width of specific dropdowns (e.g., Digital, Web App, etc.) */
    .nav-menu .menu-item-has-children ul li {
        width: 250px; /* Increase width as needed */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        background: transparent; /* Ensure no white background on li */
    }

    /* Ensure scrollable submenu works with the new width and removes white space */
    .scrollable-submenu {
        max-height: 240px;
        overflow-y: auto;
        overflow-x: hidden;
        padding: 0; /* Remove padding to eliminate white space */
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    /* Style for menu items inside dropdowns */
    .nav-menu ul ul a {
        padding: 10px 15px; /* Consistent padding for content */
        display: block;
        color: #333;
        text-decoration: none;
        margin: 0; /* Remove any default margin */
    }

    .nav-menu ul ul a:hover {
        background: #f5f5f5;
        color: #007bff; /* Or your theme color */
    }

    /* Remove any residual white space from list items */
    .nav-menu ul ul li {
        margin: 0;
        padding: 0;
        list-style: none; /* Ensure no bullets or default styling */
    }

    /* Ensure the parent menu item background matches the dropdown when hovered */
    .nav-menu .menu-item-has-children:hover {
        background: #fff; /* Match the dropdown background on hover */
    }
</style>

</head>

<body>
    
    <?php echo $comment['code_body']; ?>

    <?php if($setting['preloader_status'] == 'On'): ?>
    <!--Preloader Start-->
    <div id="preloader">
        <div id="status" style="background-image: url(<?php echo base_url(); ?>public/images/preloader.gif)"></div>
    </div>
    <!--Preloader End-->
    <?php endif; ?>

    <!--Header-Area Start-->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-12">
                    <div class="header-social">
                        <ul>
                            <li>
                                <div class="social-bar">
                                    <ul>
                                        <?php
                                        foreach ($social as $row)
                                        {
                                            if($row['social_url']!='')
                                            {
                                                echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="header-info">
                        <ul class="first">
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span><?php echo $setting['top_bar_email']; ?></span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span><?php echo $setting['top_bar_phone']; ?></span>
                            </li>
                        </ul>

                        <?php if($setting['language_status'] == 'Show'): ?>
                        <div class="lang-right">
                        <?php echo form_open(base_url().'lang/change'); ?>
                            <select name="lang_change_id" class="form-control" onchange="this.form.submit()">
                                <?php
                                $all_language = $CI->Model_lang->show_all_language();
                                foreach($all_language as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['lang_id']; ?>" <?php if($row['lang_id'] == $_SESSION['sess_lang_id']) {echo 'selected';} ?>><?php echo $row['lang_short_name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        <?php echo form_close(); ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header-Area End-->

    <!--Menu Start-->
    <div id="strickymenu" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="logo flex">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 main-menu">
                    <div class="main-menu-item">
                        <ul class="nav-menu">
                            
                            <?php
                            $all_dynamic_pages = array();
                            $all_dynamic_pages = $CI->Model_common->all_dynamic_pages();
                            if(count($all_dynamic_pages) >= 1)
                            {
                                $d_page = 1;
                            }
                            else
                            {
                                $d_page = 0;
                            }

                            $arr_menu = array();
                            $all_menu = $CI->Model_menu->show();
                            foreach($all_menu as $row)
                            {
                                $arr_menu[$row['menu_id']] = $row['menu_status'];
                            }
                            ?>
                            
                            <?php if($arr_menu[1] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <?php endif; ?>
                            
                            <?php if($arr_menu[2] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
                            <?php endif; ?>
                            
                            <?php if($arr_menu[3] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>team"><?php echo TEAM; ?></a></li>
                            <?php endif; ?>  
                            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////                           -->

                            <?php if( ($arr_menu[4] == 'Show') || ($arr_menu[5] == 'Show') || ($arr_menu[6] == 'Show') || ($arr_menu[7] == 'Show') || ($arr_menu[8] == 'Show') || ($d_page == 1) ): ?>
                            <li class="menu-item-has-children"><a href="javascript:void;" class="chl"><?php echo PAGE; ?></a>
                                <ul>
                                    <?php if($arr_menu[4] == 'Show'): ?>
                                    <li><a href="<?php echo base_url(); ?>event"><?php echo EVENT; ?></a></li>
                                    <?php endif; ?>

                                    <?php if($arr_menu[5] == 'Show'): ?>
                                    <li><a href="<?php echo base_url(); ?>photo-gallery"><?php echo PHOTO_GALLERY; ?></a></li>
                                    <?php endif; ?>
                                    
                                    <?php if($arr_menu[6] == 'Show'): ?>
                                    <li><a href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a></li>
                                    <?php endif; ?>

                                    <?php if($arr_menu[7] == 'Show'): ?>
                                    <li><a href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a></li>
                                    <?php endif; ?>

                                    <?php if($arr_menu[8] == 'Show'): ?>
                                    <li><a href="<?php echo base_url(); ?>pricing"><?php echo PRICING_TABLE; ?></a></li>
                                    <?php endif; ?>

                                    <?php if($d_page == 1): ?>
                                        <?php
                                        foreach($all_dynamic_pages as $rrr)
                                        {
                                            ?>
                                            <li><a href="<?php echo base_url(); ?>page/<?php echo $rrr['slug']; ?>"><?php echo $rrr['name']; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <?php endif; ?>

                            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->






                            <?php if($arr_menu[9] == 'Show'): ?>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);" class="chl"><?php echo SERVICE; ?></a>
                                <ul>
                                    <!-- Digital -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Digital</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/digital/seo">SEO</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/sem">SEM</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/smm">SMM</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/smo">SMO</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/whatsapp-telegram">Whatsapp & Telegram Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/youtube">YouTube Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/orm">Online Reputation Management</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/ppc">Pay Per Click [PPC] Management</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/affiliate">Affiliate Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/digital-marketing">Digital Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/lead-based">Lead Based Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/local-seo">Local SEO Marketing</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/brand-promotion">SEO Brand Promotion</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/consulting">SEO-Consulting</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/link-building">Link Building Services</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/digital/seo-copy-writing">SEO Copy Writing</a></li>
                                        </ul>
                                    </li>

                                    <!-- Web App -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Web App</a>
                                        <ul class="scrollable-submenu">
                                        <li><a href="<?php echo base_url(); ?>service/web-app/react-js">React JS Development</a></li>
                                        <li><a href="<?php echo base_url(); ?>service/web-app/node-js">Node JS Application Development</a></li>
                                        <li><a href="<?php echo base_url(); ?>service/web-app/web-design">Web Design</a></li>
                                        <li><a href="<?php echo base_url(); ?>service/web-app/angular-js">Angular JS Development</a></li>
                                        <li><a href="<?php echo base_url(); ?>service/web-app/web-app-dev">Web Application Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- Website -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Website</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/website/design-development">Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/redesign">Website Redesigning Services</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/html5">HTML5 Website Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/responsive">Responsive Website Design</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/professional">Professional Website Design</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/cms">CMS Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/dynamic">Dynamic Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/custom">Custom Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/static">Static Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/affiliate">Affiliate Website Design</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/website/corporate">Corporate Web Design & Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- E-com -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">E-com</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/ecom/web-design">E-Commerce Web Design</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/development">E-Commerce Website Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/theme-custom">E-Commerce Theme Customization</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/b2b-b2c-d2c">B2B, B2C & D2C E-Commerce Solutions</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/multivendor">Multi-Vendor E-Commerce Site Creation</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/maintenance">E-Commerce Website Maintenance</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/hosting">E-Commerce Hosting Services</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/shopping-cart">E-Commerce Shopping Cart</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/payment">E-Commerce Payment Gateway Integration</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/seo">E-Commerce SEO Services</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/redesign">E-Commerce Redesigning Services</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/ecom/module-dev">E-Commerce Module Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- CMS -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">CMS</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/cms/web-portal">CMS Web Portal Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/redesign">CMS Website Redesigning</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/wordpress">Wordpress Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/wp-maintenance">Wordpress Site Maintenance</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/joomla">Joomla Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/joomla-maintenance">Joomla Website Maintenance</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/payment-integration">Payment Gateway Integration for WordPress & Joomla</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/ecom">CMS E-Commerce Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/shopify">Shopify Website Design & Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/cms/php-cms">PHP CMS Website Design & Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- Mobile -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Mobile</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/mobile/android">Android App Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/mobile/ios">IOS App Development</a></li>
                                            <li><a href="<?php echo base_url(); ?>service/mobile/hybrid">Hybrid App Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- Branding -->
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Branding</a>
                                        <ul class="scrollable-submenu">
                                            <li><a href="<?php echo base_url(); ?>service/branding/graphic-design">Graphic Design</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>



                                <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                            <?php if($arr_menu[10] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
                            <?php endif; ?>

                            <?php if($arr_menu[11] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>news"><?php echo NEWS; ?></a></li>
                            <?php endif; ?>

                            <?php if($arr_menu[12] == 'Show'): ?>
                            <li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="searchbar">
                        <div class="search-button"><i class="fa fa-search"></i></div>
                        <?php echo form_open(base_url().'search'); ?>
                            <div class="input-group input-search">
                                <input type="text" class="form-control" placeholder="<?php echo SEARCH_FOR; ?>" name="search_string">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="form1"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu End-->