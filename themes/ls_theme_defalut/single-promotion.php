<?php
/**
 * The template for displaying all single promotion.
 *
 * @package ls_theme_defalut
 */

get_header();
global $post;
?>
    <div class="content service-content">
        <?php
            while ( have_posts() ) : the_post();
        ?>
        <div class="service-container grid wide">
            <div class="service row service-promotion-mobile">
                <div class="service--detail col l-9">
                    <h1 class="service--detail__heading"><?php the_title(); ?></h1>
                    <div class="service--detailing promotion--detail">
                        <div class="promotion--detail__item">
                            <div class="promotion--detail__item--images">
                                <?php
                                    $post_id = $_GET['post_id'];
                                    $image_content = get_field('image_content',$post_id);
                                ?>
                                <img src="<?php echo $image_content['url']; ?>" alt="">
                            </div>
                            <div class="promotion--detail__item--subsection">
                                <p class="promotion--detail__item--subsection--desc"><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="service--detail--button">
                        <button class="btn promotion--detail__btn" id="promotion--detail__btn">
                            <i class="fa-solid fa-gift icon--gift"></i>Nhận ưu đãi</button>
                    </div>
                </div>
                <?php endwhile; // End of the loop. ?>
                <div class="promotion-mobile">
                    <h2 class="promotion-mobile__heading">Ưu đãi liên quan</h2>
                    <div class="promotion-mobile--container">
                        <div class="promotion-mobile--container--body grid wide">
                            <div class="promotion-mobile--container--body__list row">
                                <?php
                                    $args = array(
                                        'post_type' => 'promotion',
                                        'post_status' => 'publish',
                                        'cat_id' => '42',
                                        'posts_per_page' => 3,
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="promotion-mobile--container--body__list--item col l-5 col-md-12">
                                    <div class="promotion-mobile--container--body__list--item--content row">
                                        <div class="promotion-mobile--container--body__list--item--content--images col l-5">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <div class="promotion-mobile--container--body__list--item--content--text col l-7">
                                            <h1 class="promotion-mobile--container--body__list--item--content--text--title">
                                                <a href="<?php the_permalink(); ?>"><?php echo truncate( get_the_title(), 50 ); ?></a></h1>
                                            <p class="promotion-mobile--container--body__list--item--content--text--desc"><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service--category col l-3">
                    <div class="details-news">
                        <h3 class="details-news-title">ƯU ĐÃI LỚN NHẤT</h3>

                        <div class="detail-news--menu">
                            <div class="detail-news--menu__list row">
                                <?php
                                    $args = array(
                                        'post_type' => 'promotion',
                                        'post_status' => 'publish',
                                        'cat_id' => '41',
                                        'posts_per_page' => 5,
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="detail-news--menu__list--item">
                                    <div class="detail-news-boder">
                                        <div class="detail-news--menu__list--item--images col-xl-5">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <div class="detail-news--menu__list--item--desc col-xl-7">
                                            <p><a href="<?php the_permalink(); ?>"><?php echo truncate( get_the_title(), 50 ); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-new promotion-news promotion--detail-mobile">
            <div class="tips-new-item grid wide">
                <div class="tips-new-item__heading">
                    <h2 class="tips-new-item__heading--title">Tin tức liên quan</h2>
                </div>
                <div class="tips-new-item__body dp-blockTL dp-none">
                    <div class="tips-new-item__body--list row">
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
                        <div class="tips-new-item__body--list--item col-lg-3 col-md-4">
                            <?php
                            if ($count == 2) {
                            ?>
                            <div class="tips-new-item__body--list--item-images">
                            <?php
                            } else {
                            ?>
                            <div class="tips-new-item__body--list--item-images image-pseudo">
                            <?php
                            }
                            ?>
                                <img src="<?php echo $image[0]; ?>" alt="">
                            </div>
                            <h2 class="tips-new-item__body--list--item-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                            <p class="tips-new-item__body--list--item-desc"><?php the_excerpt(); ?></p>
                        </div>
                        <?php
                            $count++;
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="promotion--container dp-nonePC dp-noneTL dp-block">
                    <div class="promotion--container--body grid wide">
                        <div class="promotion--container--body__list row">
                            <div class="promotion--container--body__list--item col l-5 col-md-5">
                                <div class="promotion--container--body__list--item--content row">
                                    <div class="promotion--container--body__list--item--content--images col l-5">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/event/event1.png" alt="">
                                    </div>
                                    <div class="promotion--container--body__list--item--content--text col l-7">
                                        <h1 class="promotion--container--body__list--item--content--text--title">khai
                                            trương shynh spa chi nhánh quận 2</h1>
                                        <p class="promotion--container--body__list--item--content--text--desc">Cơ sở mới
                                            của SHYNH SPA được mở rộng mới hoàn toàn tại địa chỉ mới ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="promotion--container--body__list--item col l-5 col-md-5">
                                <div class="promotion--container--body__list--item--content row">
                                    <div class="promotion--container--body__list--item--content--images col l-5">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/event/event1.png" alt="">
                                    </div>
                                    <div class="promotion--container--body__list--item--content--text col l-7">
                                        <h1 class="promotion--container--body__list--item--content--text--title">khai
                                            trương shynh spa chi nhánh quận 2</h1>
                                        <p class="promotion--container--body__list--item--content--text--desc">Cơ sở mới
                                            của SHYNH SPA được mở rộng mới hoàn toàn tại địa chỉ mới ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
