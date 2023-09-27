<?php
    class Nhacungcap_Danhsach extends controllers{
        protected $dsnhacungcap;
        function __construct()
        {
            $this->dsnhacungcap=$this->model('qlnhacungcap');
        }
        function Get_data(){
            $this->view('MasterLayout', [
                'page'=>'Danhsach_Nhacungcap',
                'dulieu'=>$this->dsnhacungcap->nhacungcap_find('', '')
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimkiem'])){
                $maNCC = $_POST['txtmaNCC'];
                $tenNCC = $_POST['txttenNCC'];
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhacungcap',
                    'dulieu'=>$this->dsnhacungcap->nhacungcap_find($maNCC, $tenNCC),
                    'maNCC'=>$maNCC,
                    'tenNCC'=>$tenNCC
                ]);
            }
        }
        function xoa($maNCC){
            $kq = $this->dsnhacungcap->nhacungcap_del($maNCC);
            if($kq){
                echo "<script> alert('Xóa thành công!')</script>";
            }else{
                echo "<script> alert('Xóa thất bại!')</script>";
            }
            //gọi lại giao diện
            $this->view('MasterLayout',[
                'page'=>'Danhsach_Nhacungcap',
                'dulieu'=>$this->dsnhacungcap->nhacungcap_find('', '')
            ]);
        }
        function sua($maNCC){
            $this->view('MasterLayout',[
                'page'=>'Sua_Nhacungcap',
                'dulieu'=>$this->dsnhacungcap-> nhacungcap_sel_del($maNCC),
                'maNCC' =>$maNCC
            ]);
        }

        function suadl(){
            if(isset($_POST['btnLuu'])){
                $maNCC = $_POST['txtmaNCC'];
                $tenNCC = $_POST['txttenNCC'];
                $diachiNCC = $_POST['txtdiachiNCC'];
                $sdtNCC = $_POST['txtsdtNCC'];
                $emailNCC = $_POST['txtemailNCC'];

                $kq = $this->dsnhacungcap->nhacungcap_upd($maNCC, $tenNCC, $diachiNCC, $sdtNCC, $emailNCC);
                if($kq){
                    echo "<script> alert('Sửa thành công!')</script>";
                }else{
                    echo "<script> alert('Sửa thất bại!')</script>";
                }
                 //gọi lại giao diện
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhacungcap',
                    'dulieu'=>$this->dsnhacungcap->nhacungcap_find('', '')
                ]);
            }
            if(isset($_POST['btnHuy'])){
                $this->view('MasterLayout',[
                    'page'=>'Danhsach_Nhacungcap',
                    'dulieu'=>$this->dsnhacungcap->nhacungcap_find('', '')
                ]);
            }
        }
    }
?>