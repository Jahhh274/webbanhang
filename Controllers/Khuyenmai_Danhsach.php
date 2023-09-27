<?php
    class Khuyenmai_Danhsach extends controllers{
        protected $dskhuyenmai;
        function __construct()
        {
            $this->dskhuyenmai=$this->model('qlkhuyenmai');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Khuyenmai',
                'dulieu'=>$this->dskhuyenmai->khuyenmai_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maKhuyenMai = $_POST['txtmaKhuyenMai'];
                $tenKhuyenMai = $_POST['txttenKhuyenMai'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khuyenmai',
                    'dulieu'=>$this->dskhuyenmai->khuyenmai_find($maKhuyenMai, $tenKhuyenMai),
                    'maKhuyenMai'=>$maKhuyenMai,
                    'tenKhuyenMai'=>$tenKhuyenMai
                ]);
            }
        }
        function xoa($maKhuyenMai){
            $kq = $this->dskhuyenmai->khuyenmai_del($maKhuyenMai);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Khuyenmai',
                'dulieu'=>$this->dskhuyenmai->khuyenmai_find('', '')
            ]);
        }
        function sua($maKhuyenMai){
            $this->view('MasterLayout',[
                'page'=>'Sua_Khuyenmai',
                'dulieu'=>$this->dskhuyenmai->khuyenmai_sel_del($maKhuyenMai)
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maKhuyenMai = $_POST['txtmaKhuyenMai'];
                $tenKhuyenMai = $_POST['txttenKhuyenMai'];
                $mucUuDai = $_POST['txtmucUuDai'];

                $kq = $this->dskhuyenmai->khuyenmai_upd($maKhuyenMai, $tenKhuyenMai, $mucUuDai);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khuyenmai',
                    'dulieu'=>$this->dskhuyenmai->khuyenmai_find('', '')
                ]);
                
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Khuyenmai',
                    'dulieu'=>$this->dskhuyenmai->khuyenmai_find('', '')
                ]);
            }
        }
    }
?>