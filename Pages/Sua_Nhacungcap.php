<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formsuancc {
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
    <form class="formsuancc" method="post" action="http://localhost:81/BaiTapLon/Nhacungcap_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin nhà cung cấp</span>
        </div>
        <?php
        if (isset($data['dulieu']) && $data['dulieu']) {
            while ($row = mysqli_fetch_array($data['dulieu'])) {

        ?>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="txtmaNCC">Mã nhà cung cấp</label>
                        <input type="text" class="form-control" name="txtmaNCC" id="txtmaNCC" placeholder="Nhập mã nhà cung cấp" value="<?php if (isset($row['maNCC'])) echo $row['maNCC'] ?>" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txttenNCC">Tên nhà cung cấp</label>
                        <input type="text" class="form-control" name="txttenNCC" id="txttenNCC" placeholder="Nhập tên nhà cung cấp" value="<?php if (isset($row['tenNCC'])) echo $row['tenNCC'] ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txtdiachiNCC">Địa chỉ</label>
                        <input type="text" class="form-control" name="txtdiachiNCC" id="txtdiachiNCC" placeholder="Nhập địa chỉ" value="<?php if (isset($row['diachiNCC'])) echo $row['diachiNCC'] ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="txtsdtNCC">Số điện thoại</label>
                        <input type="number" class="form-control" name="txtsdtNCC" id="txtsdtNCC" placeholder="Nhập số điện thoại" value="<?php if (isset($row['sdtNCC'])) echo $row['sdtNCC'] ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txtemailNCC">Email</label>
                        <input type="text" class="form-control" name="txtemailNCC" id="txtemailNCC" placeholder="Nhập email" value="<?php if (isset($row['emailNCC'])) echo $row['emailNCC'] ?>">
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