<?php
    class Sanpham_Them extends controllers{
        protected $sanpham;
        function __construct()
        {
            $this->sanpham = $this->model('qlsanpham');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Sanpham',
                'maSP' => '',
                'tenSP' => '',
                'maNCC' => '',
                'gianhapSP' => '',
                'giabanSP' => '',
                'soLuong' => '',
                'maNV' => '',
                'tenNSP' => ''
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $maSP = $_POST['txtmaSP'];
                $tenSP = $_POST['txttenSP'];
                $maNCC = isset($_POST['txtmaNCC']) ? $_POST['txtmaNCC'] : '';
                $gianhapSP = $_POST['txtgianhapSP'];
                $giabanSP = $_POST['txtgiabanSP'];
                $soLuong = $_POST['txtsoLuong'];
                $maNV = isset($_POST['txtmaNV']) ? $_POST['txtmaNV'] : '';
                $tenNSP = isset($_POST['txttenNSP']) ? $_POST['txttenNSP'] : '';

                if ($maSP == '' || $tenSP == '' || $maNCC == '' || $gianhapSP == '' || $giabanSP == '' || $soLuong == '' || $maNV == '' || $tenNSP == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->sanpham->checktrungmasp($maSP);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã sản phẩm!')</script>";
                    } else {
                        $kq = $this->sanpham->sanpham_ins($maSP, $tenSP, $maNCC, $gianhapSP, $giabanSP, $soLuong, $maNV, $tenNSP);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Sanpham_Danhsach'</script>";
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
                'page' => 'Them_Sanpham',
                'maSP' => $maSP,
                'tenSP' => $tenSP,
                'maNCC' => $maNCC,
                'gianhapSP' => $gianhapSP,
                'giabanSP' => $giabanSP,
                'soLuong' => $soLuong,
                'maNV' => $maNV,
                'tenNSP' => $tenNSP
            ]);
        }
    }
?>