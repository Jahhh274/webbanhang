<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .formdssp {
            margin-left: 200px;
            border: 1px solid #17a2b8;
            margin-right: 10px;
        }

        .tieude {
            background-color: #17a2b8;
            height: 45px;
            padding: 7.5px 0px;
        }
        .formtksp{
            margin-left: 200px;
            border: 1px solid #17a2b8;
            margin-right: 10px;
            margin-bottom: 15px;
        }
        .form-row {
            margin: 10px 10px;
        }
    </style>
</head>

<body>
    <form class="formtksp" method="post" action="http://localhost:81/BaiTapLon/Sanpham_Danhsach/timkiem">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Tìm kiếm sản phẩm</span>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaSP">Mã sản phẩm</label>
                <input type="text" class="form-control" name="txtmaSP" id="txtmaSP" placeholder="Nhập mã sản phẩm" value="<?php if(isset($data['maSP'])) echo $data['maSP'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenSP">Tên sản phẩm</label>
                <input type="text" class="form-control" name="txttenSP" id="txttenSP" placeholder="Nhập tên sản phẩm" value="<?php if(isset($data['tenSP'])) echo $data['tenSP'] ?>">
            </div>
            <div class="col-md-4 mb-3">
            </div>
        </div>

        <div style="margin: 10px; text-align: center;">
            <td>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnTimkiem" value="Tìm kiếm" style="width: 95px; font-weight: bold"></a>
            </td>
        </div>
    </form>
    <form class="formdssp" method="post" action="http://localhost:81/BaiTapLon/Sanpham_Danhsach">
        <div>
            <div class="tieude">
                <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Danh sách sản phẩm</span>
            </div>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Mã nhà cung cấp</th>
                        <th scope="col">Giá nhập sản phẩm</th>
                        <th scope="col">Giá bán sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Tên nhóm sản phẩm</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <?php
                //B3: Xử lý kết quả truy vấn: Hiển thị lên bảng
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($data['dulieu'])) {
                ?>
                        <tr>
                            <td scope="row"><?php echo ++$i ?></td>
                            <td scope="row"><?php echo $row['maSP'] ?></td>
                            <td scope="row"><?php echo $row['tenSP'] ?></td>
                            <td scope="row"><?php echo $row['maNCC'] ?></td>
                            <td scope="row"><?php echo $row['gianhapSP'] ?></td>
                            <td scope="row"><?php echo $row['giabanSP'] ?></td>
                            <td scope="row"><?php echo $row['soLuong'] ?></td>
                            <td scope="row"><?php echo $row['maNV'] ?></td>
                            <td scope="row"><?php echo $row['tenNSP'] ?></td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Sanpham_Danhsach/sua/<?php echo $row['maSP'] ?>"><i class="fas fa-edit fa-lg" style="color: black;"></i></a>
                            </td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Sanpham_Danhsach/xoa/<?php echo $row['maSP'] ?>"><i class="fas fa-solid fa-trash" style="color: black;"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </form>
</body>

</html>