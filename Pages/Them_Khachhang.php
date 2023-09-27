<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formthemkh {
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
    <form class="formthemkh" method="post" action="http://localhost:81/BaiTapLon/Khachhang_Them/themmoi">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Cập nhật khách hàng</span>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaKH">Mã khách hàng</label>
                <input type="text" class="form-control" name="txtmaKH" id="txtmaKH" placeholder="Nhập mã khách hàng" value="<?php if(isset($data['maKH'])) echo $data['maKH'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenKH">Tên khách hàng</label>
                <input type="text" class="form-control" name="txttenKH" id="txttenKH" placeholder="Nhập tên khách hàng" value="<?php if(isset($data['tenKH'])) echo $data['tenKH'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtsdtKH">Số điện thoại</label>
                <input type="number" class="form-control" name="txtsdtKH" id="txtsdtKH" placeholder="Nhập số điện thoại " value="<?php if(isset($data['sdtKH'])) echo $data['sdtKH'] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="chkgioiTinhKH">Giới tính</label>
                <br>
                <input type="radio" name="chkgioiTinhKH" value="Nam" <?php if (isset($data['gioiTinhKH']) && $data['gioiTinhKH'] == 'Nam') echo 'checked'; ?>> Nam &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="radio" name="chkgioiTinhKH" value="Nữ" <?php if (isset($data['gioiTinhKH']) && $data['gioiTinhKH'] == 'Nữ') echo 'checked'; ?>> Nữ &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="radio" name="chkgioiTinhKH" value="Khác" <?php if (isset($data['gioiTinhKH']) && $data['gioiTinhKH'] == 'Khác') echo 'checked'; ?>> Khác
            </div>
            <div class="col-md-4 mb-3">
            </div>
            <div class="col-md-4 mb-3">
            </div>
        </div>

        <div style="margin: 10px; text-align: center;">
            <td>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnLuu" value="Tạo mới" style="width: 85px; font-weight: bold"></a>
            </td>
        </div>
    </form>
</body>

</html>