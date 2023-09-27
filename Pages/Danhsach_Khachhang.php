<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .formdskh {
            margin-left: 200px;
            border: 1px solid #17a2b8;
            margin-right: 10px;
        }

        .tieude {
            background-color: #17a2b8;
            height: 45px;
            padding: 7.5px 0px;
        }
        .formtkkh{
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
    <form class="formtkkh" method="post" action="http://localhost:81/BaiTapLon/Khachhang_Danhsach/timkiem">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Tìm kiếm khách hàng</span>
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
            </div>
        </div>

        <div style="margin: 10px; text-align: center;">
            <td>
                <a href=""><input class="btn btn-outline-info" type="submit" name="btnTimkiem" value="Tìm kiếm" style="width: 95px; font-weight: bold"></a>
            </td>
        </div>
    </form>
    <form class="formdskh" method="post" action="http://localhost:81/BaiTapLon/Khachhang_Danhsach">
        <div>
            <div class="tieude">
                <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Danh sách khách hàng</span>
            </div>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Giới tính</th>
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
                            <td scope="row"><?php echo $row['maKH'] ?></td>
                            <td scope="row"><?php echo $row['tenKH'] ?></td>
                            <td scope="row"><?php echo $row['sdtKH'] ?></td>
                            <td scope="row"><?php echo $row['gioiTinhKH'] ?></td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Khachhang_Danhsach/sua/<?php echo $row['maKH'] ?>"><i class="fas fa-edit fa-lg" style="color: black;"></i></a>
                            </td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Khachhang_Danhsach/xoa/<?php echo $row['maKH'] ?>"><i class="fas fa-solid fa-trash" style="color: black;"></i></a>
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