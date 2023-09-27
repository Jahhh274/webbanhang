<?php
    class Khachhang_Them extends controllers{
        protected $khachhang;
        function __construct()
        {
            $this->khachhang = $this->model('qlkhachhang');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Khachhang',
                'maKH' => '',
                'tenKH' => '',
                'sdtKH' => '',
                'gioiTinhKH' => '',
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $maKH = $_POST['txtmaKH'];
                $tenKH = $_POST['txttenKH'];
                $sdtKH = $_POST['txtsdtKH'];
                $gioiTinhKH = isset($_POST['chkgioiTinhKH']) ? $_POST['chkgioiTinhKH'] : array();
                
                if ($maKH == '' || $tenKH == '' || $sdtKH == '' || $gioiTinhKH == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->khachhang->checktrungmakh($maKH);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã khách hàng!')</script>";
                    } else {
                        $kq = $this->khachhang->qlkhachhang_ins($maKH, $tenKH, $sdtKH, $gioiTinhKH);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Khachhang_Danhsach'</script>";
                        } else {
                            echo "<script> alert('Thêm thất bại!')</script>";
                        }
                    }
                }
            }

            //Gọi lại giao diện
            $this->view('MasterLayout', [
                'page' => 'Them_Khachhang',
                'maKH' => $maKH,
                'tenKH' => $tenKH,
                'sdtKH' => $sdtKH,
                'gioiTinhKH' => $gioiTinhKH
            ]);
        }
    }
?>