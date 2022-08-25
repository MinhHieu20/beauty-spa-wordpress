<?php
/*
 * Template Name: Trang đặt lịch
 *
 * @package ls_theme
 */
get_header();
?>
    <div class="main">
        <div class="main-logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/about/imgSpa.png" alt="">
        </div>

        <div class="booking">
            <div class="booking-after">

            </div>
            <div class="booking-title">
                <h2>ĐẶT LỊCH HẸN</h2>
            </div>
            <div class="form--contact__inner--contact booking-form">
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
                            <input type="text" placeholder="Số Điện Thoại" class="form-control">
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
                                <option value="">Chọn khu vực</option>
                                <option value="">Dịch vụ 1</option>
                                <option value="">Dịch vụ 2</option>
                                <option value="">Dịch vụ 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <input type="day" placeholder="07/07/2022" class="form-control">
                        </div>
                        <div class="form--contact__inner--contact--form-group form-group col l-6">
                            <input type="text" placeholder="8:00" class="form-control">
                        </div>
                    </div>
                    <div class="form--contact__inner--contact--form row">
                        <div class="form--contact__inner--contact--form-group form-group col l-12">
                                <textarea name="" class="form-textarea" placeholder="Ghi chú lịch hẹn" id=""
                                          cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn send-contact__btn">ĐẶT LỊCH</button>
                </form>
            </div>
        </div>

        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption pd-6">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn
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
                        <ul class="location-details-list col-lg-6 col-md-6">
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

            <div class="address-near dp-none">
                <button class="btn address-near-btn">Tìm chi nhánh gần bạn</button>
            </div>
        </div>
    </div>
<?php
get_footer();
