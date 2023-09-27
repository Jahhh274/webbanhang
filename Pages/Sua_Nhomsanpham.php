<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formsuansp {
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
    <form class="formsuansp" method="post" action="http://localhost:81/BaiTapLon/Nhomsanpham_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin nhóm sản phẩm</span>
        </div>
        <?php
                if(isset($data['dulieu']) && $data['dulieu']){
                    while ($row=mysqli_fetch_array($data['dulieu'])){
                        
            ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txttenNSP">Tên nhóm sản phẩm</label>
                <input type="text" class="form-control" name="txttenNSP" id="txttenNSP" placeholder="Nhập tên nhóm sản phẩm" value="<?php if(isset($row['tenNSP'])) echo $row['tenNSP'] ?>" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="txtmoTa">Mô tả</label>
                <textarea type="text" name="txtmoTa" cols="80" size="40" placeholder="Nhập mô tả" rows="4"><?php echo $row['moTa']; ?></textarea></div>
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