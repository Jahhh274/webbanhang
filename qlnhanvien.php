<?php
    class qlnhanvien extends connectDB{
        function qlnhanvien_ins($maNV, $tenNV, $ngaySinh, $gioiTinh, $diaChi, $chucVu, $luongNV, $sdtNV){
        $sql = "INSERT INTO qlnhanvien VALUES ('$maNV', '$tenNV', '$ngaySinh', '$gioiTinh', '$diaChi', '$chucVu', '$luongNV', '$sdtNV')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmanv($maNV){
        $sql = "SELECT * FROM qlnhanvien WHERE maNV='$maNV'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã nhân viên
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã nhân viên
        }
        return $kq;
    }

    //Tìm kiếm
    function nhanvien_find($maNV, $tenNV){
        $sql = "SELECT * FROM qlnhanvien WHERE maNV like '%$maNV%' and tenNV like '%$tenNV%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function nhanvien_del($maNV){
        $sql = "DELETE FROM qlnhanvien WHERE maNV='$maNV'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function nhanvien_sel_del($maNV){
        $sql = "SELECT * FROM qlnhanvien WHERE maNV='$maNV'";
        return mysqli_query($this->con, $sql);
    }

    function nhanvien_upd($maNV, $tenNV, $ngaySinh, $gioiTinh, $diaChi, $chucVu, $luongNV, $sdtNV){
        $sql = "UPDATE qlnhanvien SET tenNV='$tenNV', ngaySinh='$ngaySinh', gioiTinh='$gioiTinh', diaChi='$diaChi', chucVu='$chucVu', luongNV='$luongNV', sdtNV='$sdtNV' WHERE maNV='$maNV'";
        return mysqli_query($this->con, $sql);
    }
}

?>