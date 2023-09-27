<?php
    class qlnhacungcap extends connectDB{
        function nhacungcap_ins($maNCC, $tenNCC, $diachiNCC, $sdtNCC, $emailNCC){
        $sql = "INSERT INTO qlnhacungcap VALUES ('$maNCC', '$tenNCC', '$diachiNCC', '$sdtNCC', '$emailNCC')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmancc($maNCC){
        $sql = "SELECT * FROM qlnhacungcap WHERE maNCC='$maNCC'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã 
        }
        return $kq;
    }

    //Tìm kiếm
    function nhacungcap_find($maNCC, $tenNCC){
        $sql = "SELECT * FROM qlnhacungcap WHERE maNCC like '%$maNCC%' and tenNCC like '%$tenNCC%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function nhacungcap_del($maNCC){
        $sql = "DELETE FROM qlnhacungcap WHERE maNCC='$maNCC'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function nhacungcap_sel_del($maNCC){
        $sql = "SELECT * FROM qlnhacungcap WHERE maNCC='$maNCC'";
        return mysqli_query($this->con, $sql);
    }

    function nhacungcap_upd($maNCC, $tenNCC, $diachiNCC, $sdtNCC, $emailNCC){
        $sql = "UPDATE qlnhacungcap SET tenNCC='$tenNCC', diachiNCC='$diachiNCC', sdtNCC='$sdtNCC', emailNCC='$emailNCC' WHERE maNCC='$maNCC'";
        return mysqli_query($this->con, $sql);
    }
}

?>