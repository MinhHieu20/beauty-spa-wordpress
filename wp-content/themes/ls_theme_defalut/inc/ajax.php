<?php
add_action( 'wp_ajax_thongbao', 'thongbao_init' );
add_action( 'wp_ajax_nopriv_thongbao', 'thongbao_init' );
function thongbao_init() {
    //do bên js để dạng json nên giá trị trả về dùng phải encode
    $id = (isset($_POST['id']))?esc_attr($_POST['id']) : '';
    $maps = get_field('maps',$id);
    die();//bắt buộc phải có khi kết thúc
}