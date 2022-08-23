<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ls_theme_defalut
 */
global $ls_options;
?>
<footer class="footer">
    <div class="footer-top">
        <div class="container footer-width">
            <div class="row footer-after">
                <div class="col-lg-4 pd-top12">
                    <div class="footer-top-interactive">
                        <div class="interactive-logo d-flex">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo $ls_options['logo']['url']; ?>" alt=""></a>
                        </div>
                        <h3 class="interactive-caption">Dẫn đầu trị mụn uy tín với phác đồ trị liệu cùng chuyên gia tư vấn, 
                            kê đơn dược mỹ phẩm cho từng làn da khác nhau</h3>
                        <div class="interactive-image d-flex">
                            <img src="<?php bloginfo('template_directory'); ?>/images/footer.jpg" alt="">
                            <div class="footer-top-interactive__share--top d-flex">
                                <img class="footer-top-interactive__share--top-image"
                                     src="<?php bloginfo('template_directory'); ?>/images/footer/footer-img.png" alt="">
                                <h5>Shynh Beauty Spa</h5>
                            </div>
                            <div class="footer-top-interactive__share--bottom d-flex">
                                <div class="footer-top-interactive__share--bottom-left">
                                    <a href="" class="d-flex">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/imgFb.png" alt="">
                                        <h5>Thích Trang</h5>
                                    </a>
                                </div>
                                <div class="footer-top-interactive__share--bottom-right">
                                    <a href="" class="d-flex">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/share.png" alt="">
                                        <h5>Chia Sẻ</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-contact">
                        <div class="footer-top-contact__tel">
                            <h3 class="contact-title"> HOTLINE </h3>
                            <a href="#"><?php echo $ls_options['hotline-1']; ?> - <?php echo $ls_options['hotline-2']; ?></a>
                            <a href="">1900 989 800 (BẤM PHÍM 2) </a>
                        </div>
                        <div class="footer-top-contact__info">
                            <h3 class="contact-title"> Thông tin liên hệ
                            </h3>
                            <ul class="footer-top-contact__info-list">
                                <li class="footer-top-contact__info-list--item">
                                    <a href="#"><?php echo $ls_options['emailft-1']; ?></a>
                                </li>
                                <li class="footer-top-contact__info-list--item">
                                    <a href="#"><?php echo $ls_options['emailft-2']; ?></a>
                                </li>
                                <li class="footer-top-contact__info-list--item">
                                    <a href="#"><?php echo $ls_options['addft']; ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-top-contact__time">
                            <h3 class="contact-title"> Thời gian làm việc
                            </h3>
                            <span class="fz16">8H30 - 19H00 Từ thứ hai đến CN(Kể cả lễ,tết)</span>
                        </div>
                        <div class="footer-top-contact__app d-flex">
                            <a href="" class="footer-top-contact__app--googleplay">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon/icon-app-02.png" alt="">
                            </a>
                            <a href="" class="footer-top-contact__app--appstore">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon/icon-app-03.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-menu">
                        <h3 class="contact-title"> Menu
                        </h3>
                        <ul class="footer-top-menu__list">
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/chinh-sach-bao-mat">Chính sách bảo mật</a>
                            </li>
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/huong-dan-dat-lich">Hướng dẫn đặt lịch</a>
                            </li>
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/tuyen-dung">Tuyển dụng Shynh Beauty Spa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom dp-none">
        <div class="footer-width">
            <h3 class="footer-title">SHYNH BEAUTY SPA - Thẩm mỹ viện hàng đầu việt nam với 50 chi nhánh trên
                toàn quốc</h3>
            <div class="footer-contact">
                <ul class="footer-contact-list">
                    <li class="footer-contact-list__item">
                        <a class="footer-contact-list__item--link fz16" href="">Hotline: 0999 999 999</a>
                    </li>
                    <li class="footer-contact-list__item">
                        <a class="footer-contact-list__item--link fz16" href="">Website: shynhbeauty.com.vn</a>
                    </li>
                    <li class="footer-contact-list__item">
                        <a class="footer-contact-list__item--link fz16" href="">Mail:info@shynhbeauty.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-width">
            <div class="row">
            <div class="footer-bottom-left  col-xl-6 col-md-6">
                <h3 class="footer-title">SHYNH BEAUTY
                    SPA - Dẫn đầu trị mụn uy tín số 1 Việt Nam</h3>
                <div class="footer-contact">
                    <ul class="footer-contact-list">
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="">Hotline: <?php echo $ls_options['hotline-1']; ?></a>
                            <a class="footer-contact-list__item--link fz16" href=""> 1900 989 800 (BẤM PHÍM 2)</a>
                        </li>
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="">Website: <?php echo $ls_options['web']; ?></a>
                        </li>
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="">Mail: <?php echo $ls_options['emailft-2']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom-right col-xl-6 col-md-6">
                Giấy phép kinh doanh tại TP.Hồ Chí Minh
            </div>
        </div>
    </div>
    <div class="footer-bottom-mobile dp-block dp-noneTL">
        <div class="row">
            <div class="footer-bottom-mobile__image">
                <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/BgBoxshow.png" alt="">
            </div>
            <div class="col-4 d-flex justify-content-between">
                <div class="footer-bottom-mobile__branch">
                    <div class="footer-bottom-mobile__branch--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgHome.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Chi nhánh</span>
                </div>
                <div class="footer-bottom-mobile__booking">
                    <div class="footer-bottom-mobile__booking--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgCanlender.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Đặt lịch</span>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-bottom-mobile__advise text-center">
                    <div class="footer-bottom-mobile__advise--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgUserheadset.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Tư vấn</span>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-between">
                <div class="footer-bottom-mobile__tel">
                    <div class="footer-bottom-mobile__tel--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgCall.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">1900 1234</span>
                </div>
                <div class="footer-bottom-mobile__app">
                    <div class="footer-bottom-mobile__app--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgApp.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Tải app</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="form--contact hide">
    <!-- tabs Items -->
    <div class="tabs">
        <div class="tab-item-heading active">
            <i class="tab-icon fa-solid fa-headset"></i>
            <span>Tư vấn</span>
        </div>
        <div class="tab-item-heading ">
            <i class="tab-icon fa-solid fa-location-dot"></i>
            <span>Chi Nhánh</span>
        </div>

        <div class="tab-item-heading">
            <i class="tab-icon fa-solid fa-calendar-days"></i>
            <span>Đặt Lịch</span>
        </div>
    </div>

    <!-- Tabs content -->
    <div class="tab-pane-content active">
        <div class="form--contact__inner">
            <div class="form--contact__inner--logo">
                <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--contact__inner--logo--image">
            </div>
            <div class="form--contact__inner--contact">
                <form action="">
                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-12">
                            <input type="text" placeholder="Họ Tên" class="form-control">
                        </div>
                    </div>

                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <input type="number" placeholder="Số Điện Thoại" class="form-control">
                        </div>
                    </div>
                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <select name="" placeholder="Chọn dịch vụ" id="" class="form-control">
                                <option value="">Chọn dịch vụ</option>
                                <option value="">Dịch vụ 1</option>
                                <option value="">Dịch vụ 2</option>
                                <option value="">Dịch vụ 3</option>
                            </select>
                        </div>
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <select name="" placeholder="Chọn Khu Vực" id="" class="form-control">
                                <option value="">Chọn dịch vụ</option>
                                <option value="">Dịch vụ 1</option>
                                <option value="">Dịch vụ 2</option>
                                <option value="">Dịch vụ 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-12">
                            <textarea name="" class="form-textarea" placeholder="Nội dung tư vấn" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn send-contact__btn">đăng ký tư vấn</button>
                </form>
                <p class="form--contact__inner--contact--text">Hoặc liên hệ hotline <span class="phone-number"><?php echo $ls_options['hotline-1']; ?></span> để được tư vấn nhanh nhất</p>
            </div>
        </div>
    </div>
    <div class="tab-pane-content">
        <div class="address">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
            </div>
            <div class="address-nav">
                <div class="container-width">
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
                <div class="container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class="container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class=" container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class=" container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class=" container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>

                                    </div>
                                </div>

                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class=" container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>

                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details ">
                <div class=" container-width">
                    <div class="row location-details-border location-details-mobile" id="mobile-scroll">
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 10</h4>
                                    <p class="location-details-right__info">375 Nguyễn Thượng Hiền, Phường 11, Quận 10 (Vòng Xoay Dân Chủ) </p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>

                                    </div>
                                </div>

                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Bình Thạnh</h4>
                                    <p class="location-details-right__info">380 Bùi Hữu Nghĩa, Phường 2, Bình Thạnh (Đối Diện Chợ Bà Chiểu)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Thủ Đức</h4>
                                    <p class="location-details-right__info">314 Võ Văn Ngân, Bình Thọ, Thủ Đức (Gần ĐH Sư Phạm Kĩ Thuật)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/thanhtoan.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Quận 7</h4>
                                    <p class="location-details-right__info">44 Nguyễn Thị Thập, Tân Hưng, Quận 7 (Gần cầu HimLam)</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/shynhhouse.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Gò Vấp</h4>
                                    <p class="location-details-right__info">398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p>
                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="location-details-list__item row">
                                <div class="col-lg-5 col-5 location-details-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/makeup.png" alt="" class="">
                                </div>
                                <div class="col-lg-7 col-7 location-details-right">
                                    <h4 class="location-details-right__name">Tân Bình</h4>
                                    <p class="location-details-right__info">120 Ni Sư Huỳnh Liên,Phường 10, Quận Tân Bình</p>

                                    <div class="location-detail-btn">
                                        <button class="btn location-view">Xem địa chỉ</button>
                                        <button class="pop-details-right__booking--item">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconPopup.png" alt="">
                                            <p>Đặt lịch</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane-content">
        <div class="form--appointment__inner">
            <div class="form--appointment__inner--logo">
                <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--appointment__inner--logo--image">
            </div>
            <div class="form--appointment__inner--title">
                <h3>ĐẶT LỊCH HẸN</h3>
            </div>
            <div class="form--appointment__inner--appointment">
                <form action="">
                    <div class="form--appointment__inner--appointment--form row">
                        <div class="form--appointment__inner--appointment--form-group form-group col l-12">
                            <input type="text" placeholder="Họ Tên" class="form-control">
                        </div>
                    </div>
                    <div class="form--appointment__inner--appointment--form row">
                        <div class="form--appointment__inner--appointment--form-group form-group col l-6">
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form--appointment__inner--appointment--form-group form-group col l-6">
                            <input type="number" placeholder="Số Điện Thoại" class="form-control">
                        </div>
                    </div>
                    <div class="form--appointment__inner--appointment--form row">
                        <div class="form--appointment__inner--appointment--form-group form-group col l-6">
                            <select name="" placeholder="Chọn dịch vụ" id="" class="form-control">
                                <option value="">Chọn dịch vụ</option>
                                <option value="">Dịch vụ 1</option>
                                <option value="">Dịch vụ 2</option>
                                <option value="">Dịch vụ 3</option>
                            </select>
                        </div>
                        <div class="form--appointment__inner--appointment--form-group form-group col l-6">
                            <select name="" placeholder="Chọn Khu Vực" id="" class="form-control">
                                <option value="">Chọn khu vực</option>
                                <option value="">Khu vực 1</option>
                                <option value="">Khu vực 2</option>
                                <option value="">Khu vực 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form--appointment__inner--appointment---time row">
                        <div class="form--appointment__inner--appointment--time-day col l-6">
                            <input type="date" class="form-controls" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="form--appointment__inner--appointment--time-day col l-6">
                            <input type="time" class="form-controls" placeholder="8:00">
                        </div>
                    </div>
                    <div class="form--appointment__inner--appointment--form row">
                        <div class="form--appointment__inner--appointment--form-group form-group col l-12">
                            <textarea name="" class="form-textarea" placeholder="Ghi chú lịch hẹn" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn send-appointment__btn">ĐẶT LỊCH</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="form--again">
    <div class="form--again__inner">
        <div class="form--again__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--again__inner--logo--image">
        </div>
        <div class="form--again__inner--title">
            <h3>ĐẶT LỊCH HẸN</h3>
        </div>
        <div class="form--again__inner--info">
            <div class="form--again__inner--info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/service/check.png" alt="">
            </div>
            <div class="form--again__inner--info-text">
                <p>Lịch hẹn của quý khách đã được đặt thành công</p>
            </div>
            <div class="form--again__inner--info-line">
                <img src="<?php bloginfo('template_directory'); ?>/images/service/_Line_.png" alt="">
            </div>
            <div class="form--again__inner--info-client">
                <p class="form--again__inner--info-client-text">Tên khách hàng: <span
                            class="form--again__inner--info-client-name"> Nguyễn Thị A</span></p>
                <p class="form--again__inner--info-client-text">Số điện thoại:<span
                            class="form--again__inner--info-client-name"> 0888 888 888</span></p>
            </div>
            <div class="form--again__inner--info-time row">
                <div class="form--again__inner--info-time-day col l-6">
                    <input type="date" class="form-controls" placeholder="08/07/2022">
                </div>
                <div class="form--again__inner--info-time-day col l-6">
                    <input type="time" class="form-controls" placeholder="8:00">
                </div>
            </div>
            <div class="form--again__inner--info-thank">
                <p>Cảm ơn quý khách hẹn gặp quý khách tại Shynh Beauty Spa</p>
            </div>
        </div>
        <button class="btn send-contact__btn">SỬA LỊCH HẸN</button>
    </div>
</div>
<!-- Phần pop up -->
<div class="form--pop" id="open-pop">
    <div class="form--pop__inner">
        <div class="form--pop__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--pop__inner--logo--image">
        </div>
        <div class="form--pop__inner--title">
            <h3>ĐẶT LỊCH HẸN</h3>
        </div>
        <div class="form--pop__inner--info">
            <div class="form--pop__inner--info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconCheck.png" alt="">
            </div>
            <div class="form--pop__inner--info-text">
                <p>lịch hẹn của quý khách đã được đặt thành công</p>
            </div>
            <div class="form--pop__inner--info-line">
            </div>
            <div class="form--pop__inner--info-client">
                <p class="form--pop__inner--info-client-text">Tên khách hàng: <span
                            class="form--pop__inner--info-client-name"> Nguyễn Thị A</span></p>
                <p class="form--pop__inner--info-client-text">Số điện thoại:<span
                            class="form--pop__inner--info-client-name"> 0888 888 888</span></p>
            </div>
            <div class="form--pop__inner--info-time row">
                <div class="form--pop__inner--info-time-day col l-6">
                    <input type="date" class="form-controls" placeholder="mm/dd/yyyy">
                </div>
                <div class="form--pop__inner--info-time-day col l-6">
                    <input type="time" class="form-controls" placeholder="8:00">
                </div>
            </div>
            <div class="form--pop__inner--info-thank">
                <p>Cảm ơn quý khách hẹn gặp quý khách tại Shynh Beauty Spa</p>
            </div>
        </div>
        <button class="btn send-contact__btn">SỬA LỊCH HẸN</button>
    </div>
    <div class="list">
        <div class="form--pop__address">
        </div>
        <div class="form--pop__advise">
        </div>
        <div class="form--pop__appointment">
        </div>
    </div>
</div>
<div class="form--advise" id="open-advise">
    <div class="form--advise__inner">
        <div class="form--advise__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--advise__inner--logo--image">
        </div>
        <div class="form--advise__inner--advise">
            <form action="">
                <div class="form--advise__inner--advise--form row">
                    <div class="form--advise__inner--advise--form-group form-group col l-12">
                        <input type="text" placeholder="Họ Tên" class="form-control">
                    </div>
                </div>
                <div class="form--advise__inner--advise--form row">
                    <div class="form--advise__inner--advise--form-group form-group col l-6">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form--advise__inner--advise--form-group form-group col l-6">
                        <input type="number" placeholder="Số Điện Thoại" class="form-control">
                    </div>
                </div>
                <div class="form--advise__inner--advise--form row">
                    <div class="form--advise__inner--advise--form-group form-group col l-6">
                        <select name="" placeholder="Chọn dịch vụ" id="" class="form-control">
                            <option value="">Chọn dịch vụ</option>
                            <option value="">Dịch vụ 1</option>
                            <option value="">Dịch vụ 2</option>
                            <option value="">Dịch vụ 3</option>
                        </select>
                    </div>
                    <div class="form--advise__inner--advise--form-group form-group col l-6">
                        <select name="" placeholder="Chọn Khu Vực" id="" class="form-control">
                            <option value="">Chọn khu vực</option>
                            <option value="">Khu vực 1</option>
                            <option value="">Khu vực 2</option>
                            <option value="">Khu vực 3</option>
                        </select>
                    </div>
                </div>
                <div class="form--advise__inner--advise--form row">
                    <div class="form--advise__inner--advise--form-group form-group col l-12">
                        <textarea name="" class="form-textarea" placeholder="Nội dung tư vấn" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button class="btn send-advise__btn">GỬI NGAY</button>
            </form>
            <p class="form--advise__inner--advise--text">Hoặc liên hệ hotline <span class="phone-number">0909 999 999</span> để được tư vấn nhanh nhất</p>
        </div>
    </div>
    <div class="form--pop__address">
    </div>
    <div class="form--pop__advise">
    </div>
    <div class="form--pop__appointment">
    </div>
</div>
<div class="form--register hide" id="open-form">
    <div class="form--contact__inner contact_inner-mobile">
        <div class="form--contact__inner--logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/footerImg.png" alt="" class="form--contact__inner--logo--image">
        </div>
        <div class="form--contact__inner--contact">
            <form action="">
                <div class="form--contact__inner--contact--form contact_inner-mobile--form row">
                    <div class="form--contact__inner--contact--form-group form-group col l-12">
                        <input type="text" placeholder="Họ Tên" class="form-control">
                    </div>
                </div>

                <div class="form--contact__inner--contact--form row">
                    <div class="form--contact__inner--contact--form-group form-group col l-6">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form--contact__inner--contact--form-group form-group col l-6">
                        <input type="number" placeholder="Số Điện Thoại" class="form-control">
                    </div>
                </div>
                <div class="form--contact__inner--contact--form row">
                    <div class="form--contact__inner--contact--form-group form-group col l-6">
                        <select name="" placeholder="Chọn dịch vụ" id="" class="form-control">
                            <option value="">Chọn dịch vụ</option>
                            <option value="">Dịch vụ 1</option>
                            <option value="">Dịch vụ 2</option>
                            <option value="">Dịch vụ 3</option>
                        </select>
                    </div>
                    <div class="form--contact__inner--contact--form-group form-group col l-6">
                        <select name="" placeholder="Chọn Khu Vực" id="" class="form-control">
                            <option value="">Chọn dịch vụ</option>
                            <option value="">Dịch vụ 1</option>
                            <option value="">Dịch vụ 2</option>
                            <option value="">Dịch vụ 3</option>
                        </select>
                    </div>
                </div>
                <div class="form--contact__inner--contact--form row">
                    <div class="form--contact__inner--contact--form-group form-group col l-12">
                                <textarea name="" class="form-textarea" placeholder="Ghi chú" id="" cols="30"
                                          rows="10"></textarea>
                    </div>
                </div>
                <button class="btn send-contact__btn">GỬI NGAY</button>
            </form>
            <p class="form--contact__inner--contact--text contact_inner-mobile--text">Hoặc liên hệ hotline <span
                        class="phone-number">0909
                            999 999</span> để được tư vấn nhanh nhất</p>
        </div>
    </div>
    <div class="form--contact__inner--extend contact_inner-mobile--extend">
        <ul class="form--contact__inner--extend--list">
            <li class="form--contact__inner--extend--list--item"><i
                        class="icon-extend fa-solid fa-location-dot"></i>Chi nhánh</li>
            <li class="form--contact__inner--extend--list--item"><i
                        class="icon-extend fa-solid fa-headset"></i>Tư vấn</li>
            <li class="form--contact__inner--extend--list--item"><i
                        class="icon-extend fa-solid fa-calendar-days"></i>Đặt lịch</li>

        </ul>
    </div>
</div>
</div><!-- #page -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
