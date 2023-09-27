<?php
    class Nhanvien_Danhsach extends controllers{
        protected $dsnhanvien;
        function __construct()
        {
            $this->dsnhanvien=$this->model('qlnhanvien');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Nhanvien',
                'dulieu'=>$this->dsnhanvien->nhanvien_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maNV = $_POST['txtmaNV'];
                $tenNV = $_POST['txttenNV'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhanvien',
                    'dulieu'=>$this->dsnhanvien->nhanvien_find($maNV, $tenNV),
                    'maNV'=>$maNV,
                    'tenNV'=>$tenNV
                ]);
            }
        }
        function xoa($maNV){
            $kq = $this->dsnhanvien->nhanvien_del($maNV);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Nhanvien',
                'dulieu'=>$this->dsnhanvien->nhanvien_find('', '')
            ]);
        }
        function sua($maNV){
            $this->view('MasterLayout',[
                'page'=>'Sua_Nhanvien',
                'dulieu'=>$this->dsnhanvien-> nhanvien_sel_del($maNV),
                'maNV' =>$maNV
            ]);
        }

        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maNV = $_POST['txtmaNV'];
                $tenNV = $_POST['txttenNV'];
                $ngaySinh = $_POST['txtngaySinh'];
                $gioiTinh = $_POST['chkgioiTinh'];
                $diaChi = $_POST['txtdiaChi'];
                $chucVu = $_POST['txtchucVu'];
                $luongNV = $_POST['txtluongNV'];
                $sdtNV = $_POST['txtsdtNV'];

                $kq = $this->dsnhanvien->nhanvien_upd($maNV, $tenNV, $ngaySinh, $gioiTinh, $diaChi, $chucVu, $luongNV, $sdtNV);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhanvien',
                    'dulieu'=>$this->dsnhanvien->nhanvien_find('', '')
                ]);
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhanvien',
                    'dulieu'=>$this->dsnhanvien->nhanvien_find('', '')
                ]);
            }
        }
    }
?>