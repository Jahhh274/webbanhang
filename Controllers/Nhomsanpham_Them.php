<?php
    class Nhomsanpham_Them extends controllers{
        protected $nhomsanpham;
        function __construct()
        {
            $this->nhomsanpham = $this->model('qlnhomsanpham');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Nhomsanpham',
                'tenNSP' => '',
                'moTa' => ''
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $tenNSP = $_POST['txttenNSP'];
                $moTa = $_POST['txtmoTa'];

                if ($tenNSP == '' || $moTa == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->nhomsanpham->checktrungmansp($tenNSP);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã khách hàng!')</script>";
                    } else {
                        $kq = $this->nhomsanpham->nhomsanpham_ins($tenNSP, $moTa);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Nhomsanpham_Danhsach'</script>";
                        } else {
                            echo "<script> alert('Thêm thất bại!')</script>";
                        }
                    }
                }
            }

            //Gọi lại giao diện
            $this->view('MasterLayout', [
                'page' => 'Them_Nhomsanpham',
                'tenNSP' => $tenNSP,
                'moTa' => $moTa
            ]);
        }
    }
?>