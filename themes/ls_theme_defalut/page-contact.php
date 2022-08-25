<?php
/*
 * Template Name: Trang liên hệ
 *
 * @package ls_theme
 */
get_header();
global $ls_options;
?>
    <div class="content mt-10">
        <div class="contact-address">
            <div class="grid wide">
                <div class="contact-address-item row">
                    <div class="contact-address-item__maps col l-6">
                        <iframe class="contact-address-item__maps--link"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3628481283035!2d106.6810527506547!3d10.783496661973436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2eb93b03b1%3A0x1c59a46f7764c421!2zMTMsIDkgS-G7syDEkOG7k25nLCBQaMaw4budbmcgOSwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1661157115797!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="contact-address-item__form-contact col l-6 col-12">
                        <div class="contact-address-item__form-contact--address">
                            <h2 class="contact-address-item__form-contact--address--title">SHYNH BEAUTY SPA - Dẫn đầu trị mụn uy tín số 1 Việt Nam
                            </h2>
                            <p class="contact-address-item__form-contact--address--text">Hotline: <?php echo $ls_options['hotline-1']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Website: <?php echo $ls_options['web']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Mail: <?php echo $ls_options['emailft-2']; ?></p>
                        </div>
                        <div class="contact-address-item__form-contact--group">
                            <h2 class="contact-address-item__form-contact--group--title">Liên hệ với chúng tôi</h2>
                            <?php echo apply_shortcodes( '[contact-form-7 id="123" title="Liên hệ"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advise-contact none-mobile">
            <div class="advise-contact__body grid wide">
                <div class="contact-body row">
                    <div class="contact-body__left col l-5">
                        <div class="contact-body__column">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name"><?php echo $ls_options['hotline-1']; ?></div>
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
                            <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="address">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn
                    ghé thăm</p>
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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>

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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>

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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>

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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>

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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>

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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>

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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">HỒ CHÍ MINH</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>

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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>

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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>

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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>

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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>

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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>

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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6 col-md-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>

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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>

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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>

                                    <button class="btn location-view">Xem địa chỉ</button>
                                </div>
                                <div class="col-lg-2"></div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6 col-md-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>

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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>

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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>

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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>

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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>

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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>
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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>

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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>

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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>

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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>

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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>

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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>
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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>
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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>
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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>
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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>
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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>
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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>
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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>
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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>
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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>
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
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-4 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-6 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận
                                        10 (Vòng Xoay Dân Chủ)
                                    </p>
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
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh
                                        (Đối Diện Chợ Bà Chiểu)</p>
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
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần
                                        ĐH Sư Phạm Kĩ Thuật)</p>
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
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7
                                        (Gần cầu HimLam)</p>
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
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò
                                        Vấp</p>
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
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân
                                        Bình</p>
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
