<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formthemncc {
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
    <form class="formthemncc" method="post" action="http://localhost:81/BaiTapLon/Nhacungcap_Them/themmoi">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Cập nhật nhà cung cấp</span>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaNCC">Mã nhà cung cấp</label>
                <input type="text" class="form-control" name="txtmaNCC" id="txtmaNCC" placeholder="Nhập mã nhà cung cấp" value="<?php if (isset($data['maNCC'])) echo $data['maNCC'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenNCC">Tên nhà cung cấp</label>
                <input type="text" class="form-control" name="txttenNCC" id="txttenNCC" placeholder="Nhập tên nhà cung cấp" value="<?php if (isset($data['tenNCC'])) echo $data['tenNCC'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtdiachiNCC">Địa chỉ</label>
                <input type="text" class="form-control" name="txtdiachiNCC" id="txtdiachiNCC" placeholder="Nhập địa chỉ" value="<?php if (isset($data['diachiNCC'])) echo $data['diachiNCC'] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtsdtNCC">Số điện thoại</label>
                <input type="number" class="form-control" name="txtsdtNCC" id="txtsdtNCC" placeholder="Nhập số điện thoại" value="<?php if (isset($data['sdtNCC'])) echo $data['sdtNCC'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtemailNCC">Email</label>
                <input type="text" class="form-control" name="txtemailNCC" id="txtemailNCC" placeholder="Nhập email" value="<?php if (isset($data['emailNCC'])) echo $data['emailNCC'] ?>">
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