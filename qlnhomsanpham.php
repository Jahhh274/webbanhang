<?php
    class qlnhomsanpham extends connectDB{
        function nhomsanpham_ins($tenNSP, $moTa){
        $sql = "INSERT INTO qlnhomsp VALUES ('$tenNSP', '$moTa')";
        return mysqli_query($this->con, $sql);
    }

    //Kiểm tra trùng mã
    function checktrungmansp($tenNSP){
        $sql = "SELECT * FROM qlnhomsp WHERE tenNSP='$tenNSP'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;//không trùng mã 
        if(mysqli_num_rows($dt)>0){
            $kq=true; //Trùng mã 
        }
        return $kq;
    }

    //Tìm kiếm
    function nhomsanpham_find($tenNSP){
        $sql = "SELECT * FROM qlnhomsp WHERE tenNSP like '%$tenNSP%'";
        return mysqli_query($this->con, $sql);
    }

    //Xóa
    function nhomsanpham_del($tenNSP){
        $sql = "DELETE FROM qlnhomsp WHERE tenNSP='$tenNSP'";
        return mysqli_query($this->con, $sql);
    }

    //Sửa
    function nhomsanpham_sel_del($tenNSP){
        $sql = "SELECT * FROM qlnhomsp WHERE tenNSP='$tenNSP'";
        return mysqli_query($this->con, $sql);
    }

    function nhomsanpham_upd($tenNSP, $moTa){
        $sql = "UPDATE qlnhomsp SET moTa='$moTa' WHERE tenNSP='$tenNSP'";
        return mysqli_query($this->con, $sql);
    }
}

?>