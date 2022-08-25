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
global $ls_options, $post;
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
                            $extension = get_term('26','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('24','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('25','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('27','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('30','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('31','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('29','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                            $extension = get_term('28','beauty_cat');
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                        'field'    => 'term_id',
                                        'terms'    => array( $extension->term_id ),
                                    ),
                                ),
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
                <div class="container-body">
                    <div class="event-list">
                        <?php
                            $args = array(
                                'post_type' => 'event_spa',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                            );
                            $count = 0;
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="event-item col-lg-3 col-sm-12">
                            <?php
                                if ($count == 2) {
                            ?>
                                <div class="event-item-image">
                            <?php
                                } else {
                            ?>
                                <div class="event-item-image image-pseudo">
                            <?php
                            }
                            ?>
                                <img src="<?php echo $image[0]; ?>" alt="" class="event-image">
                            </div>
                            <div class="event-item-text ">
                                <h2 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                                <p class="event-desc"><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                        <?php
                            $count++;
                            endwhile;
                            wp_reset_postdata();
                        ?>
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
                        <?php
                            $args = array(
                                'post_type' => 'promotion',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                            );
                            $count = 0;
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="event-item col-lg-3 col-sm-12">
                        <?php
                            if ($count == 2) {
                        ?>
                            <div class="event-item-image">
                        <?php
                        } else {
                        ?>
                            <div class="event-item-image image-pseudo">
                        <?php
                        }
                        ?>
                            <img src="<?php echo $image[0]; ?>" alt="" class="event-image">
                            </div>
                            <div class="event-item-text ">
                                <h2 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                                <p class="event-desc"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php
                            $count++;
                            endwhile;
                        wp_reset_postdata();
                        ?>
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
                <div class="container-body">
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
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.</p>
                                        <div class="money">
                                            <h2 class="price">70.000đ</h2>
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
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.</p>
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
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.</p>
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
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.</p>
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
                                        <p class="description">Mặt nạ sợi tre bamboo Dưỡng ẩm da, mịn màng SHINEE.</p>
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
                            <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]' ); ?>
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
                        <?php
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $count = 0;
                        $loop = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('44','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('45','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('43','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('47','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('48','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension = get_term('49','extension_cat');
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension->term_id ),
                                ),
                            ),
                        );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-4 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
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
