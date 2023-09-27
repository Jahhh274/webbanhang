<?php
    class Sanpham_Danhsach extends controllers{
        protected $dssanpham;
        function __construct()
        {
            $this->dssanpham=$this->model('qlsanpham');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Sanpham',
                'dulieu'=>$this->dssanpham->sanpham_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maSP = $_POST['txtmaSP'];
                $tenSP = $_POST['txttenSP'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Sanpham',
                    'dulieu'=>$this->dssanpham->sanpham_find($maSP, $tenSP),
                    'maSP'=>$maSP,
                    'tenSP'=>$tenSP
                ]);
            }
        }
        function xoa($maSP){
            $kq = $this->dssanpham->sanpham_del($maSP);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Sanpham',
                'dulieu'=>$this->dssanpham->sanpham_find('', '')
            ]);
        }
        function sua($maSP){
            $this->view('MasterLayout',[
                'page'=>'Sua_Sanpham',
                'dulieu'=>$this->dssanpham-> sanpham_sel_del($maSP),
                'maSP' =>$maSP
            ]);
        }

        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maSP = $_POST['txtmaSP'];
                $tenSP = $_POST['txttenSP'];
                $maNCC = isset($_POST['txtmaNCC']) ? $_POST['txtmaNCC'] : '';
                $gianhapSP = $_POST['txtgianhapSP'];
                $giabanSP = $_POST['txtgiabanSP'];
                $soLuong = $_POST['txtsoLuong'];
                $maNV = isset($_POST['txtmaNV']) ? $_POST['txtmaNV'] : '';
                $tenNSP = isset($_POST['txttenNSP']) ? $_POST['txttenNSP'] : '';

                $kq = $this->dssanpham->sanpham_upd($maSP, $tenSP, $maNCC, $gianhapSP, $giabanSP, $soLuong, $maNV, $tenNSP);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Sanpham',
                    'dulieu'=>$this->dssanpham->sanpham_find('', '')
                ]);
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Sanpham',
                    'dulieu'=>$this->dssanpham->sanpham_find('', '')
                ]);
            }
        }
    }
?>