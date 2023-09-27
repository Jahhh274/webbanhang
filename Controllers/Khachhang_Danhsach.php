<?php
    class Khachhang_Danhsach extends controllers{
        protected $dskhachhang;
        function __construct()
        {
            $this->dskhachhang=$this->model('qlkhachhang');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Khachhang',
                'dulieu'=>$this->dskhachhang->khachhang_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maKH = $_POST['txtmaKH'];
                $tenKH = $_POST['txttenKH'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khachhang',
                    'dulieu'=>$this->dskhachhang->khachhang_find($maKH, $tenKH),
                    'maKH'=>$maKH,
                    'tenKH'=>$tenKH
                ]);
            }
        }
        function xoa($maKH){
            $kq = $this->dskhachhang->khachhang_del($maKH);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Khachhang',
                'dulieu'=>$this->dskhachhang->khachhang_find('', '')
            ]);
        }
        function sua($maKH){
            $this->view('MasterLayout',[
                'page'=>'Sua_Khachhang',
                'dulieu'=>$this->dskhachhang->khachhang_sel_del($maKH)
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maKH = $_POST['txtmaKH'];
                $tenKH = $_POST['txttenKH'];
                $sdtKH = $_POST['txtsdtKH'];
                $gioiTinhKH = isset($_POST['chkgioiTinhKH']) ? $_POST['chkgioiTinhKH'] : array();

                $kq = $this->dskhachhang->khachhang_upd($maKH, $tenKH, $sdtKH, $gioiTinhKH);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khachhang',
                    'dulieu'=>$this->dskhachhang->khachhang_find('', '')
                ]);
                
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khachhang',
                    'dulieu'=>$this->dskhachhang->khachhang_find('', '')
                ]);
            }
        }
    }
?>