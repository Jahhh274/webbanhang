<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formsuakm {
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
    <form class="formsuakm" method="post" action="http://localhost:81/BaiTapLon/Khuyenmai_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin khuyến mãi</span>
        </div>
        <?php
                if(isset($data['dulieu']) && $data['dulieu']){
                    while ($row=mysqli_fetch_array($data['dulieu'])){
                        
            ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaKhuyenMai">Mã khuyến mãi</label>
                <input type="text" class="form-control" name="txtmaKhuyenMai" id="txtmaKhuyenMai" placeholder="Nhập mã khuyến mãi" value="<?php if(isset($row['maKhuyenMai'])) echo $row['maKhuyenMai'] ?>" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenKhuyenMai">Tên khuyến mãi</label>
                <input type="text" class="form-control" name="txttenKhuyenMai" id="txttenKhuyenMai" placeholder="Nhập tên khuyến mãi" value="<?php if(isset($row['tenKhuyenMai'])) echo $row['tenKhuyenMai'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtmucUuDai">Mức ưu đãi</label>
                <input type="number" class="form-control" name="txtmucUuDai" id="txtmucUuDai" placeholder="Nhập mức ưu đãi" value="<?php if(isset($row['mucUuDai'])) echo $row['mucUuDai'] ?>">
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