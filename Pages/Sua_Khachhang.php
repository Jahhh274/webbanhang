<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formsuakh {
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
    <form class="formsuakh" method="post" action="http://localhost:81/BaiTapLon/Khachhang_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin khách hàng</span>
        </div>
        <?php
                if(isset($data['dulieu']) && $data['dulieu']){
                    while ($row=mysqli_fetch_array($data['dulieu'])){
                        
            ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaKH">Mã khách hàng</label>
                <input type="text" class="form-control" name="txtmaKH" id="txtmaKH" placeholder="Nhập mã khách hàng" value="<?php if(isset($row['maKH'])) echo $row['maKH'] ?>" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenKH">Tên khách hàng</label>
                <input type="text" class="form-control" name="txttenKH" id="txttenKH" placeholder="Nhập tên khách hàng" value="<?php if(isset($row['tenKH'])) echo $row['tenKH'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtsdtKH">Số điện thoại</label>
                <input type="number" class="form-control" name="txtsdtKH" id="txtsdtKH" placeholder="Nhập số điện thoại" value="<?php if(isset($row['sdtKH'])) echo $row['sdtKH'] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="chkgioiTinhKH">Giới tính</label>
                <br>
                <input type="radio" name="chkgioiTinhKH" value="Nam" <?php if (isset($row['gioiTinhKH']) && $row['gioiTinhKH'] == 'Nam') echo 'checked'; ?>> Nam &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="radio" name="chkgioiTinhKH" value="Nữ" <?php if (isset($row['gioiTinhKH']) && $row['gioiTinhKH'] == 'Nữ') echo 'checked'; ?>> Nữ &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="radio" name="chkgioiTinhKH" value="Khác" <?php if (isset($row['gioiTinhKH']) && $row['gioiTinhKH'] == 'Khác') echo 'checked'; ?>> Khác
            </div>
            <div class="col-md-4 mb-3">
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