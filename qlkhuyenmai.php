<?php
    class qlkhuyenmai extends connectDB{
        function qlkhuyenmai_ins($maKhuyenMai, $tenKhuyenMai, $mucUuDai){
        $sql = "INSERT INTO qlkhuyenmai VALUES ('$maKhuyenMai', '$tenKhuyenMai', '$mucUuDai')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmakm($maKhuyenMai){
        $sql = "SELECT * FROM qlkhuyenmai WHERE maKhuyenMai='$maKhuyenMai'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã khuyến mãi
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã khuyến mãi
        }
        return $kq;
    }

    //Tìm kiếm
    function khuyenmai_find($maKhuyenMai, $tenKhuyenMai){
        $sql = "SELECT * FROM qlkhuyenmai WHERE maKhuyenMai like '%$maKhuyenMai%' and tenKhuyenMai like '%$tenKhuyenMai%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function khuyenmai_del($maKhuyenMai){
        $sql = "DELETE FROM qlkhuyenmai WHERE maKhuyenMai='$maKhuyenMai'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function khuyenmai_sel_del($maKhuyenMai){
        $sql = "SELECT * FROM qlkhuyenmai WHERE maKhuyenMai='$maKhuyenMai'";
        return mysqli_query($this->con, $sql);
    }

    function khuyenmai_upd($maKhuyenMai, $tenKhuyenMai, $mucUuDai){
        $sql = "UPDATE qlkhuyenmai SET tenKhuyenMai='$tenKhuyenMai', mucUuDai='$mucUuDai' WHERE maKhuyenMai='$maKhuyenMai'";
        return mysqli_query($this->con, $sql);
    }
}

?>