<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ls_theme_defalut
 */
global $ls_options;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sass/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slider.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wapper">
    <header class="header">
        <div class="header-container">
            <div class="header-container-heading">
                <div class="header-container-heading__title">
                    <div class="header-container-heading__title--text">
                        <span class="header-container-heading__title--text-name">Hơn 50 chi nhánh trên toàn quốc</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-contact d-flex row">
            <div class="header-contact-left col-xl-4 col-md-3 col-4">
                <form role="search" method="get" action="">
                    <input type="search" name="" class="header-contact-left__search" placeholder="Thông tin tìm kiếm" />
                    <button type="submit" class="header-contact-left__button dp-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search header-contact-left__button--icon" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5
                                        5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
                <button class="navbar-mobile js-mobile-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="mobile-menu-overlay"></div>
            </div>
            <div class="header-contact-right col-xl-4 col-md-3 col-4">
                <button type="submit" class="search-mobile dp-block ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#fff" class="bi bi-search header-contact-left__button--icon" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
                <div class="header-contact-right__cart">
                    <div class="header-cart-pc dp-none dp-blockPC">
                        <button class="header-contact-right__cart--btn">
                            <img src="<?php bloginfo('template_directory'); ?>/images/store.png" alt="">
                            <span class="header-contact-right__cart--number dp-none">5+</span>
                        </button>
                        <div class="header-cart--notify border-1 dp-none">
                            <div class="header-cart--notify__info">
                                <div class="row header-cart--notify__info--top">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="header-cart--notify__info--top-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 p-0">
                                        <div class="header-cart--notify__info--top-detail">
                                            <h3>Tẩy tế bào chết chiết xuất từ hạt trái mơ</h3>
                                            <div class="top-detail-amount">
                                                <span class="top-detail-amount__number">1</span>
                                                <span class="top-detail-amount_cal">x</span>
                                                <span class="top-detail-amount__price">70,000 đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-cart--notify__info--top-icon">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="header-cart--notify__info--main">
                                    <h3 class="header-cart--notify__info--main-heading">Tổng cộng: 70,000 Đ</h3>
                                </div>
                                <div class="header-cart--notify__info--bottom">
                                    <button class="btn header-cart--notify__info--bottom-view">Xem giỏ hàng</button>
                                    <button class="btn header-cart--notify__info--bottom-pay">Thang toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="header-contact-right__tel">
                    <span class="header-contact-right__tel--number">hotline <?php echo $ls_options['hotline-1']; ?></span>
                </button>
            </div>
        </div>
        <div class="header-logo">
            <div class="header-logo__page">
                <a href="#"><img src="<?php echo $ls_options['logo']['url']; ?>" alt=""></a>
            </div>
        </div>
        <div class="header-main js-mobile-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'   => 'menu-1',
                        'menu_id'          => 'primary-menu',
                        'menu_class'       => 'header-main-nav__list d-flex',
                        'add_li_class'     => 'header-main-nav__list--item',
                        'container_class'  => 'header-main-nav',
                    )
                );
                ?>
        </div>
    </header>
