<?php
/*
 * Template Name: Trang ưu đãi
 *
 * @package ls_theme
 */
get_header();
global $post, $ls_options;
?>
    <div class="content">
        <div class="promotion">
            <h2 class="promotion__heading">Ưu đãi</h2>
            <div class="promotion--container">
                <div class="promotion--container--body grid wide">
                    <div class="promotion--container--body__list row">
                        <?php
                        $args = array(
                            'post_type' => 'promotion',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                        );
                        $count = 0;
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="promotion--container--body__list--item col l-5 col-md-12">
                            <div class="promotion--container--body__list--item--content row">
                                <div class="promotion--container--body__list--item--content--images col l-5">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                                </div>
                                <div class="promotion--container--body__list--item--content--text col l-7">
                                    <h1 class="promotion--container--body__list--item--content--text--title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                                    <p class="promotion--container--body__list--item--content--text--desc"><a href="<?php the_permalink(); ?>"><?php echo get_the_content(); ?></a></p>
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
        <div class="paging">
            <ul class="paging-list d-flex">
                <div class="paging-list__prev"></div>
                <li class="paging-list__item active-white">
                    <a href="" class="paging-list__item--link">1</a>
                </li>
                <li class="paging-list__item">
                    <a href="" class="paging-list__item--link">2</a>
                </li>
                <li class="paging-list__item">
                    <a href="" class="paging-list__item--link">3</a>
                </li>
                <div class="paging-list__next">
                    <a href="">
                        <img src="<?php bloginfo('template_directory'); ?>/images/arrow.jpg" alt="">
                    </a>
                </div>
            </ul>
        </div>
        <div class="advise-contact promotion--advise-contact">
            <div class="advise-contact__body grid wide">
                <div class="contact-body row">
                    <div class="contact-body__left col l-5">
                        <div class="contact-body__column">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name">1900 0000 00</div>
                            <div class="contact__desc">Giải đáp tất cả thắc mắc của quý khách hàng, phục vụ tận tâm
                                24/7</div>
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
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="họ tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="số điện thoại">
                            </div>
                            <button class="btn-exception">Gửi ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
