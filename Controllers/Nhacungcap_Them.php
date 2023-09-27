<?php
    class Nhacungcap_Them extends controllers{
        protected $nhacungcap;
        function __construct()
        {
            $this->nhacungcap = $this->model('qlnhacungcap');
        }

        function Get_data(){
            $this->view('MasterLayout', [
                'page' => 'Them_Nhacungcap',
                'maNCC' => '',
                'tenNCC' => '',
                'diachiNCC' => '',
                'sdtNCC' => '',
                'emailNCC' => '',
            ]);
        }

        function themmoi(){
            if(isset($_POST['btnLuu'])){
                //Lấy dữ liệu trên các control của form
                $maNCC = $_POST['txtmaNCC'];
                $tenNCC = $_POST['txttenNCC'];
                $diachiNCC = $_POST['txtdiachiNCC'];
                $sdtNCC = $_POST['txtsdtNCC'];
                $emailNCC = $_POST['txtemailNCC'];

                if ($maNCC == '' || $tenNCC == '' || $diachiNCC == '' || $sdtNCC=='' || $emailNCC == '') {
                    echo "<script> alert('Vui lòng nhập thông tin!')</script>";
                }else{
                    //Kiểm tra trùng mã
                    $cktm = $this->nhacungcap->checktrungmancc($maNCC);
                    if ($cktm) {
                        echo "<script> alert('Trùng mã nhân viên!')</script>";
                    } else {
                        $kq = $this->nhacungcap->nhacungcap_ins($maNCC, $tenNCC, $diachiNCC, $sdtNCC, $emailNCC);
                        if ($kq) {
                            echo "<script> alert('Thêm thành công!')</script>";
                            echo "<script> window.location.href= ' http://localhost:81/BaiTapLon/Nhacungcap_Danhsach'</script>";
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
                'page' => 'Them_Nhacungcap',
                'maNCC' => $maNCC,
                'tenNCC' => $tenNCC,
                'diachiNCC' => $diachiNCC,
                'sdtNCC' => $sdtNCC,
                'emailNCC' => $emailNCC
            ]);
        }
    }
?>