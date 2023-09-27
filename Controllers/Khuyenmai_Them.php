<?php
    class Khuyenmai_Them extends controllers{
        protected $khuyenmai;
        function __construct()
        {
            $this->khuyenmai = $this->model('qlkhuyenmai');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Khuyenmai',
                'maKhuyenMai' => '',
                'tenKhuyenMai' => '',
                'mucUuDai' => ''
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $maKhuyenMai = $_POST['txtmaKhuyenMai'];
                $tenKhuyenMai = $_POST['txttenKhuyenMai'];
                $mucUuDai = $_POST['txtmucUuDai'];
                
                if ($maKhuyenMai == '' || $tenKhuyenMai == '' || $mucUuDai == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->khuyenmai->checktrungmakm($maKhuyenMai);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã khách hàng!')</script>";
                    } else {
                        $kq = $this->khuyenmai->qlkhuyenmai_ins($maKhuyenMai, $tenKhuyenMai, $mucUuDai);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Khuyenmai_Danhsach'</script>";
                        } else {
                            echo "<script> alert('Thêm thất bại!')</script>";
                        }
                    }
                }
            }

            //Gọi lại giao diện
            $this->view('MasterLayout', [
                'page' => 'Them_Khuyenmai',
                'maKhuyenMai' => $maKhuyenMai,
                'tenKhuyenMai' => $tenKhuyenMai,
                'mucUuDai' => $mucUuDai
            ]);
        }
    }
?>