<?php
    class qlsanpham extends connectDB{
        function sanpham_ins($maSP, $tenSP, $maNCC, $gianhapSP, $giabanSP, $soLuong, $maNV, $tenNSP){
        $sql = "INSERT INTO qlsanpham VALUES ('$maSP', '$tenSP', '$maNCC', '$gianhapSP', '$giabanSP', '$soLuong', '$maNV', '$tenNSP')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmasp($maSP){
        $sql = "SELECT * FROM qlsanpham WHERE maSP='$maSP'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã sản phẩm
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã sản phẩm
        }
        return $kq;
    }

    //Tìm kiếm
    function sanpham_find($maSP, $tenSP){
        $sql = "SELECT * FROM qlsanpham WHERE maSP like '%$maSP%' and tenSP like '%$tenSP%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function sanpham_del($maSP){
        $sql = "DELETE FROM qlsanpham WHERE maSP='$maSP'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function sanpham_sel_del($maSP){
        $sql = "SELECT * FROM qlsanpham WHERE maSP='$maSP'";
        return mysqli_query($this->con, $sql);
    }

    function sanpham_upd($maSP, $tenSP, $maNCC, $gianhapSP, $giabanSP, $soLuong, $maNV, $tenNSP){
        $sql = "UPDATE qlsanpham SET tenSP='$tenSP', maNCC='$maNCC', gianhapSP='$gianhapSP', giabanSP='$giabanSP', soLuong='$soLuong', maNV='$maNV', tenNSP='$tenNSP' WHERE maSP='$maSP'";
        return mysqli_query($this->con, $sql);
    }
}

?>