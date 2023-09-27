<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formthemsp {
            margin-left: 200px;
            border: 1px solid #17a2b8;
            margin-right: 10px;
        }

        .tieude {
            background-color: #17a2b8;
            height: 45px;
            padding: 7.5px 0px;
        }

        .form-row {
            margin: 10px 10px;
        }
    </style>
</head>

<body>
    <form class="formthemsp" method="post" action="http://localhost:81/BaiTapLon/Sanpham_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin sản phẩm</span>
        </div>
        <?php
        if (isset($data['dulieu']) && $data['dulieu']) {
            while ($row = mysqli_fetch_array($data['dulieu'])) {
        ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaSP">Mã sản phẩm</label>
                <input type="text" class="form-control" name="txtmaSP" id="txtmaSP" placeholder="Nhập mã sản phẩm" value="<?php if (isset($row['maSP'])) echo $row['maSP'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenSP">Tên sản phẩm</label>
                <input type="text" class="form-control" name="txttenSP" id="txttenSP" placeholder="Nhập tên sản phẩm" value="<?php if (isset($row['tenSP'])) echo $row['tenSP'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtgianhapSP">Giá nhập sản phẩm</label>
                <input type="text" class="form-control" name="txtgianhapSP" id="txtgianhapSP" placeholder="Nhập giá nhập sản phẩm" value="<?php if (isset($row['gianhapSP'])) echo $row['gianhapSP'] ?>">
            </div>
        </div>

        <div class="form-row">
        
            <div class="col-md-4 mb-3">
                <label for="txtgiabanSP">Giá bán sản phẩm</label>
                <input type="text" class="form-control" name="txtgiabanSP" id="txtgiabanSP" placeholder="Nhập giá bán sản phẩm" value="<?php if (isset($row['giabanSP'])) echo $row['giabanSP'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtsoLuong">Số lượng</label>
                <input type="number" class="form-control" name="txtsoLuong" id="txtsoLuong" placeholder="Nhập số lượng" value="<?php if (isset($row['soLuong'])) echo $row['soLuong'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtmaNCC">Mã nhà cung cấp</label>
                <select class="form-control" name="txtmaNCC" id="txtmaNCC">
                    <option disabled selected>Chọn mã nhà cung cấp</option>
                    <?php
                   $db_connection = mysqli_connect("localhost", "root", "", "baitaplonchuan");

                   if (!$db_connection) {
                       die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                   }
                   $query = "SELECT maNCC FROM qlnhacungcap";
                   $result = mysqli_query($db_connection, $query);

                   if ($result) {
                       // Lặp qua kết quả và tạo tùy chọn cho mỗi giá trị maNCC
                       while ($row = mysqli_fetch_assoc($result)) {
                           $maNCC = $row['maNCC'];
                           echo "<option selected value='$maNCC'>$maNCC</option>";
                       }
                   } else {
                       echo "<script> alert('Không thành công!'); </script>";
                   }

                   mysqli_close($db_connection);
                    ?>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaNV">Mã nhân viên</label>
                <select class="form-control" name="txtmaNV" id="txtmaNV">
                    <option disabled selected>Chọn mã nhân viên</option>
                    <?php
                    $db_connection = mysqli_connect("localhost", "root", "", "baitaplonchuan");

                    if (!$db_connection) {
                        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                    }
                    $query = "SELECT maNV FROM qlnhanvien";
                    $result = mysqli_query($db_connection, $query);

                    if ($result) {
                        // Lặp qua kết quả và tạo tùy chọn cho mỗi giá trị maNCC
                        while ($row = mysqli_fetch_assoc($result)) {
                            $maNV = $row['maNV'];
                            echo "<option selected value='$maNV'>$maNV</option>";
                        }
                    } else {
                        echo "<script> alert('Không thành công!'); </script>";
                    }

                    mysqli_close($db_connection);
                    ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenNSP">Mã nhóm sản phẩm</label>
                <select class="form-control" name="txttenNSP" id="txttenNSP">
                    <option disabled selected>Chọn mã nhóm sản phẩm</option>
                    <?php
                    $db_connection = mysqli_connect("localhost", "root", "", "baitaplonchuan");

                    if (!$db_connection) {
                        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                    }
                    $query = "SELECT tenNSP FROM qlnhomsp";
                    $result = mysqli_query($db_connection, $query);

                    if ($result) {
                        // Lặp qua kết quả và tạo tùy chọn cho mỗi giá trị maNCC
                        while ($row = mysqli_fetch_assoc($result)) {
                            $tenNSP = $row['tenNSP'];
                            echo "<option selected value='$tenNSP'>$tenNSP</option>";
                        }
                    } else {
                        echo "<script> alert('Không thành công!'); </script>";
                    }

                    mysqli_close($db_connection);
                    ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
            </div>
        </div>
        <?php
            }
        }
        ?>
        <div style="margin: 10px; text-align: center;">
            <td>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnHuy" value="Hủy" style="width: 85px; font-weight: bold"></a>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnLuu" value="Cập nhật" style="width: 95px; font-weight: bold"></a>
            </td>
        </div>
    </form>
</body>

</html>