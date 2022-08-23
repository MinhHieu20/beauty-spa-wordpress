<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ls_theme_defalut
 */
global $ls_options;
global $post;
get_header();
?>
<div class="content">
        <div class="top-banner">
            <div class="top-banner-1">
            </div>
        </div>
        <div class="content-container grid wide">
            <div class="container-item ">
                <div class="container-heading">
                    <div class="container-item-logo">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                    </div>
                    <h2 class="container-item-title">Dịch vụ nổi bật</h2>
                </div>
                <div class="container-body">
                    <div class="container-service row">
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"> <img src="<?php bloginfo('template_directory'); ?>/images/dieutrimun.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"> <img src="<?php bloginfo('template_directory'); ?>/images/dieutrithammun.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"> <img src="<?php bloginfo('template_directory'); ?>/images/chamsocda.png" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"> <img src="<?php bloginfo('template_directory'); ?>/images/goidau.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"><img src="<?php bloginfo('template_directory'); ?>/images/trietlong.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"><img src="<?php bloginfo('template_directory'); ?>/images/tamtrang.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"><img src="<?php bloginfo('template_directory'); ?>/images/massage-da-nong.jpg" alt="" class="service-image"> </a>
                        </div>
                        <div class="container-service-item col-lg-3 col-sm-3 col-6 pd-05">
                            <a href="!#"><img src="<?php bloginfo('template_directory'); ?>/images/xamthammy.jpg" alt="" class="service-image"> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-introduction row">
                <div class="introduction-info col-lg-6 col-12">
                    <div class="introduction-info-logo">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" alt="" class="info-logo-img">
                    </div>
                    <div class="introduction-info-title">Cơ sở vật chất hiện đại</div>
                    <div class="introduction-info-desc">
                        Hệ thống Shynh Beauty Spa trải rộng khắp cả nước, đáp ứng nhu cầu làm đẹp của chị em phụ nữ ở khắp mọi nơi.
                        Không gian Shynh Beauty Spa được thiết kế nhẹ nhàng, gần gũi và mang đến trải nghiệm cực kì thư giãn cho khách hàng.
                    </div>
                </div>

                <div class="introduction-image col-lg-6">
                    <img src="<?php bloginfo('template_directory'); ?>/images/viber_image_2019-11-16_15-11-30.jpg" alt="" class="introduction-image-1">
                    <img src="<?php bloginfo('template_directory'); ?>/images/12.png" alt="" class="introduction-image-2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/17.3 Shynh Liệu Trình2557.png" alt="" class="introduction-image-3">
                </div>

            </div>
        </div>
        <div class="top-banner-2">
            <div class="top-banner-body">
                <img src="<?php bloginfo('template_directory'); ?>/images/nhapkhau.png" alt="" class="top-banner-body-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/hethong.png" alt="" class="top-banner-body-image">
            </div>


        </div>
        <div class="top-banner-3">
        </div>
        <div class="content-container treatment-result index-result background-mobile">
            <div class="container-item grid wide">
                <div class="container-heading treatment-result-heading">
                    <div class="container-item-logo pd-5">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                    </div>
                    <h2 class="container-item-title">Kết quả điều trị</h2>
                </div>
                <div class="container-body">
                    <div class="treatment-category">
                        <ul  id="item_id" class="category-nav row">
                            <li class="category-item tab-item active">
                                <a class="category-item-link">Điều trị mụn</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Điều trị thâm mụn</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Chăm sóc da</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Gội đầu</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Triệt lông</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Tắm trắng</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Massage</a>
                            </li>
                            <li class="category-item tab-item">
                                <a class="category-item-link">Phun xăm thẩm mỹ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane active">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '26',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                                $args = array(
                                    'post_type' => 'beauty',
                                    'post_status' => 'publish',
                                    'cat_id' => '24',
                                    'posts_per_page' => 8,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            ?>
                            <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                <div class="treatment-result-image">
                                    <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                </div>
                                <div class="treatment-result-desc">
                                    <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                </div>
                            </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '25',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '27',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '30',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '31',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '29',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="treatment-result-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'cat_id' => '28',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                    <div class="treatment-result-image">
                                        <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                    </div>
                                    <div class="treatment-result-desc">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                    </div>
                    <button class="seemore-mobile btn"><a href="#">Xem thêm</a></button>
                </div>
            </div>
        </div>
        <div class="content-container event">
            <div class="container-item grid wide">
                <div class="container-heading event-heading">
                    <div class="container-item-logo pd-1 ">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                    </div>
                    <h2 class="container-item-title">Sự kiện</h2>

                </div>
                <div class="container-body ">
                    <div class="event-list">
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/event/0A1A0293.jpg" alt="" class="event-image">
                            </div>
                            <div class="event-item-text ">

                                <h2 class="event-title">Khai trương SHYNH spa chi nhánh quận 2</h2>
                                <p class="event-desc">Cơ
                                    sở mới của SHYNH SPA
                                    được mở rộng hoàn
                                    toàn mới tại địa chỉ
                                    mới ...</p>
                            </div>
                        </div>
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/event/event2.png" alt="" class="event-image">
                            </div>
                            <div class="event-item-text">
                                <h2 class="event-title">Ngày
                                    của mẹ-tặng mẹ combo
                                    tận hưởng 699k</h2>
                                <p class="event-desc">Cảm
                                    ơn mẹ đã luôn hi
                                    sinh, lo lắng cho
                                    con suốt những năm
                                    tháng qua...</p>
                            </div>
                        </div>
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo-mobile">
                                <img src="<?php bloginfo('template_directory'); ?>/images/event/event3.png" alt="" class="event-image">
                            </div>
                            <div class="event-item-text">
                                <h2 class="event-title">đăng
                                    ký thành viên vip cơ
                                    hội trúng xe sh</h2>
                                <p class="event-desc">Đăng
                                    ký thành viên để tận
                                    hưởng những ưu đãi
                                    đồng thời có cơ hội
                                    ....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-footer">
                    <button class="btn-exception"><a href="<?php echo home_url(); ?>/su-kien">Xem thêm</a></button>
                </div>
            </div>

        </div>
        <div class="sale">
            <div class="sale-heading"></div>
            <div class="sale-heading-nav">
                <div class="container-item-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                </div>
                <h2 class="container-item-title">ưu đãi</h2>
            </div>
        </div>
        <div class="content-container event sale-container">
            <div class="container-item grid wide">

                <div class="container-body ">
                    <div class="event-list">
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/sale/sale1.png" alt="" class="event-image">
                            </div>
                            <div class="event-item-text">
                                <h2 class="event-title">Khai
                                    trương SHYNH spa chi
                                    nhánh quận 2</h2>

                                <p class="event-desc">Cơ
                                    sở mới của SHYNH SPA
                                    được mở rộng hoàn
                                    toàn mới tại địa chỉ
                                    mới ...</p>
                            </div>
                        </div>
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/sale/sale2.png" alt="" class="event-image">
                            </div>
                            <div class="event-item-text">
                                <h2 class="event-title">Ngày
                                    của mẹ-tặng mẹ combo
                                    tận hưởng 699k</h2>
                                <p class="event-desc">Cảm
                                    ơn mẹ đã luôn hi
                                    sinh, lo lắng cho
                                    con suốt những năm
                                    tháng qua...</p>
                            </div>
                        </div>
                        <div class="event-item col-lg-3 col-sm-12">
                            <div class="event-item-image image-pseudo-mobile">
                                <img src="<?php bloginfo('template_directory'); ?>/images/sale/sale3.png" alt="" class="event-image">
                            </div>
                            <div class="event-item-text">
                                <h2 class="event-title">đăng
                                    ký thành viên vip cơ
                                    hội trúng xe sh</h2>
                                <p class="event-desc">Đăng
                                    ký thành viên để tận
                                    hưởng những ưu đãi
                                    đồng thời có cơ hội
                                    ....</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-footer">
                    <button class="btn-exception"><a href="<?php echo home_url(); ?>/uu-dai">Xem thêm</a></button>
                </div>
            </div>

        </div>
        <div class="content-container beauty-store">
            <div class="container-item grid wide">
                <div class="container-heading heading-store">
                    <div class="container-item-logo">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                    </div>
                    <h2 class="container-item-title">shynh beauty store</h2>

                </div>
                <div class="container-body ">
                    <div class="store-category">
                        <ul class="category-list row">
                            <li class="category-item tab-category active">
                                <a class="category-item__link pseudo-link">điều trị thâm mụn</a>
                            </li>
                            <li class="category-item tab-category">
                                <a class="category-item__link pseudo-link">điều trị nám</a>
                            </li>
                            <li class="category-item tab-category">
                                <a class="category-item__link pseudo-link">serum</a>
                            </li>
                            <li class="category-item tab-category">
                                <a class="category-item__link pseudo-link">sữa rửa mặt</a>
                            </li>
                            <li class="category-item tab-category">
                                <a class="category-item__link">kem dưỡng trắng da</a>
                            </li>

                        </ul>
                    </div>

                    <div class="slide-container active swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt
                                            nạ sợi tre
                                            bamboo Dưỡng
                                            ẩm da, mịn
                                            màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70
                                                000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-7.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-8.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-9.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-10.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-11.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-12.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">
                        </div>
                    </div>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt
                                            nạ sợi tre
                                            bamboo Dưỡng
                                            ẩm da, mịn
                                            màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70
                                                000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-7.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-8.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-9.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-10.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-11.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-12.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">

                        </div>
                    </div>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt
                                            nạ sợi tre
                                            bamboo Dưỡng
                                            ẩm da, mịn
                                            màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70
                                                000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-7.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-8.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-9.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-10.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-11.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-12.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">

                        </div>
                    </div>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt
                                            nạ sợi tre
                                            bamboo Dưỡng
                                            ẩm da, mịn
                                            màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70
                                                000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-7.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-8.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-9.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-10.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-11.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-12.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">

                        </div>
                    </div>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt
                                            nạ sợi tre
                                            bamboo Dưỡng
                                            ẩm da, mịn
                                            màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70
                                                000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-6.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-7.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-8.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-9.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-10.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-11.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-12.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card swiper-slide col-lg-3 col-4">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/product/img-5.png" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.
                                        </p>
                                        <div class="money">
                                            <h2 class="price">70 000đ</h2>
                                            <button class="button">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">

                        </div>
                    </div>

                </div>
                <div class="container-footer">
                    <button class="btn-exception">Xem cửa hàng</button>
                </div>
            </div>
        </div>
        <div class="advise-contact advise-contactIndex">
            <div class="advise-contact__body grid wide">
                <div class="contact-body row">
                    <div class="contact-body__left col l-5">
                        <div class="contact-body__column">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name">1900 989 800 (BẤM PHÍM 2)</div>
                            <div class="contact__desc">Giải đáp tất cả thắc mắc của quý khách hàng, phục vụ tận tâm 24/7</div>
                        </div>
                        <div class="contact-body__column">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/calendar.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">đặt lịch hẹn</div>
                            <div class="contact__name">Nhận ưu đãi</div>
                            <div class="contact__desc">Đặt ngay lịch hẹn hôm nay để nhận hàng ngàn ưu đãi</div>
                        </div>

                    </div>
                    <div class="contact-body__right col l-7">
                        <div class="contact-body__right-heading">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/register.png" alt="" class="contact__heading">
                        </div>
                        <div class="contact-body__right-info">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="họ tên">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="số điện thoại">
                                </div>
                                <button class="btn-exception">Gửi ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption pd-6">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn ghé thăm</p>
            </div>
            <div class="address-nav">
                <div class="container container-width">
                    <ul class="address-nav-location row">
                        <li class="address-nav-location__item active">
                            <a class="address-nav-location__item--link">Tất cả</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Hồ Chí Minh</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Hà nội</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền nam</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền tây</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền trung</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Tây nguyên</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="location-details active">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/viber_image_2022-08-09_11-49-01-314.jpg" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 3</h4>
                                    <p class="location-details-right__info">13/5 Kỳ Đồng, Phường 9, Quận 3 </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/IMG_0074.JPG" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">278/26 Tô Hiến Thành, Phường 15, Quận 10</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/FYN_0904.JPG" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Nam Kỳ Khởi Nghĩa</h4>
                                    <p class="location-details-right__info">193A/6 Nam Kỳ Khởi Nghĩa, Phường Võ Thị Sáu, Quận 3</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/NGT_-9646.jpg" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Phan Xích Long</h4>
                                    <p class="location-details-right__info">82 Phan Xích Long, Phường 3, Quận Bình Thạnh</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/NGT_-7083.jpg" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Nguyễn Gia Trí</h4>
                                    <p class="location-details-right__info">69/20 Nguyễn Gia Trí (D2 cũ), Phường 25, Quận Bình Thạnh</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/location/FYN_0476.JPG" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Đặng Văn Bi</h4>
                                    <p class="location-details-right__info">Đường N1, Nhà phố Moonlight, 100E/18 Đặng Văn Bi, Phường Bình Thọ, Thành phố Thủ Đức</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="address-near dp-none">
                <button class="btn address-near-btn">Tìm chi nhánh gần bạn</button>
            </div>
        </div>
    </div>
<?php
get_footer();
