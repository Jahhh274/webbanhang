<?php
    class Nhanvien_Them extends controllers{
        protected $nhanvien;
        function __construct()
        {
            $this->nhanvien = $this->model('qlnhanvien');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Nhanvien',
                'maNV' => '',
                'tenNV' => '',
                'ngaySinh' => '',
                'gioiTinh' => '',
                'diaChi' => '',
                'chucVu' => '',
                'luongNV' => '',
                'sdtNV' => ''
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $maNV = $_POST['txtmaNV'];
                $tenNV = $_POST['txttenNV'];
                $ngaySinh = $_POST['txtngaySinh'];
                $gioiTinh = isset($_POST['chkgioiTinh']) ? $_POST['chkgioiTinh'] : array();
                $diaChi = $_POST['txtdiaChi'];
                $chucVu = isset($_POST['txtchucVu']) ? $_POST['txtchucVu'] : array();
                $luongNV = $_POST['txtluongNV'];
                $sdtNV = $_POST['txtsdtNV'];

                if ($maNV == '' || $tenNV == '' || $ngaySinh == '' || $gioiTinh == '' || $diaChi == '' || $chucVu == '' || $luongNV == '' || $sdtNV == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->nhanvien->checktrungmanv($maNV);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã nhân viên!')</script>";
                    } else {
                        $kq = $this->nhanvien->qlnhanvien_ins($maNV, $tenNV, $ngaySinh, $gioiTinh, $diaChi, $chucVu, $luongNV, $sdtNV);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Nhanvien_Danhsach'</script>";
                        } else {
                            echo "<script> alert('Thêm thất bại!')</script>";
                        }
                    }
                }
            }

                // $this->view('MasterLayout',[
                //     'page'=>'Them_Nhanvien',
                //     'dulieu'=>$this->nhanvien->nhanvien_find('', '')
                // ]);
            //Gọi lại giao diện
            $this->view('MasterLayout', [
                'page' => 'Them_Nhanvien',
                'maNV' => $maNV,
                'tenNV' => $tenNV,
                'ngaySinh' => $ngaySinh,
                'gioiTinh' => $gioiTinh,
                'diaChi' => $diaChi,
                'chucVu' => $chucVu,
                'luongNV' => $luongNV,
                'sdtNV' => $sdtNV
            ]);
        }
    }
?>