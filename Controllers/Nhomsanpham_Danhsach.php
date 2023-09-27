<?php
    class Nhomsanpham_Danhsach extends controllers{
        protected $dsnhomsanpham;
        function __construct()
        {
            $this->dsnhomsanpham=$this->model('qlnhomsanpham');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Nhomsanpham',
                'dulieu'=>$this->dsnhomsanpham->nhomsanpham_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $tenNSP = $_POST['txttenNSP'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhomsanpham',
                    'dulieu'=>$this->dsnhomsanpham->nhomsanpham_find($tenNSP),
                    'tenNSP'=>$tenNSP
                ]);
            }
        }
        function xoa($tenNSP){
            $kq = $this->dsnhomsanpham->nhomsanpham_del($tenNSP);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Nhomsanpham',
                'dulieu'=>$this->dsnhomsanpham->nhomsanpham_find('', '')
            ]);
        }
        function sua($tenNSP){
            $this->view('MasterLayout',[
                'page'=>'Sua_Nhomsanpham',
                'dulieu'=>$this->dsnhomsanpham->nhomsanpham_sel_del($tenNSP)
            ]);
        }
        function suadl(){
            if(isset($_POST['btnLuu'])){
                $tenNSP = $_POST['txttenNSP'];
                $moTa = $_POST['txtmoTa'];

                $kq = $this->dsnhomsanpham->nhomsanpham_upd($tenNSP, $moTa);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhomsanpham',
                    'dulieu'=>$this->dsnhomsanpham->nhomsanpham_find('', '')
                ]);
                
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhomsanpham',
                    'dulieu'=>$this->dsnhomsanpham->nhomsanpham_find('', '')
                ]);
            }
        }
    }
?>