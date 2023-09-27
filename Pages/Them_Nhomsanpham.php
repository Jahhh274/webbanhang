<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formthemnsp {
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
    <form class="formthemnsp" method="post" action="http://localhost:81/BaiTapLon/Nhomsanpham_Them/themmoi">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Cập nhật nhóm sản phẩm</span>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txttenNSP">Tên nhóm sản phẩm</label>
                <input type="text" class="form-control" name="txttenNSP" id="txttenNSP" placeholder="Nhập tên nhóm sản phẩm" value="<?php if(isset($data['maKhuyenMai'])) echo $data['maKhuyenMai'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtmoTa">Mô tả</label>
                <textarea type="text" name="txtmoTa" cols="80" size="40" placeholder="Nhập mô tả" rows="4"><?php echo $data['moTa']; ?></textarea></div>
        </div>

        <div style="margin: 10px; text-align: center;">
            <td>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnLuu" value="Tạo mới" style="width: 85px; font-weight: bold"></a>
            </td>
        </div>
    </form>
</body>

</html>