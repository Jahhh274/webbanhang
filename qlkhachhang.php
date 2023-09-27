<?php
    class qlkhachhang extends connectDB{
        function qlkhachhang_ins($maKH, $tenKH, $sdtNKH, $gioiTinhKH){
        $sql = "INSERT INTO qlkhachhang VALUES ('$maKH', '$tenKH', '$sdtNKH', '$gioiTinhKH')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmakh($maKH){
        $sql = "SELECT * FROM qlkhachhang WHERE maKH='$maKH'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã nhân viên
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã nhân viên
        }
        return $kq;
    }

    //Tìm kiếm
    function khachhang_find($maKH, $tenKH){
        $sql = "SELECT * FROM qlkhachhang WHERE maKH like '%$maKH%' and tenKH like '%$tenKH%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function khachhang_del($maKH){
        $sql = "DELETE FROM qlkhachhang WHERE maKH='$maKH'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function khachhang_sel_del($maKH){
        $sql = "SELECT * FROM qlkhachhang WHERE maKH='$maKH'";
        return mysqli_query($this->con, $sql);
    }

    function khachhang_upd($maKH, $tenKH, $sdtKH, $gioiTinhKH){
        $sql = "UPDATE qlkhachhang SET tenKH='$tenKH', sdtKH='$sdtKH', gioiTinhKH='$gioiTinhKH' WHERE maKH='$maKH'";
        return mysqli_query($this->con, $sql);
    }
}

?>