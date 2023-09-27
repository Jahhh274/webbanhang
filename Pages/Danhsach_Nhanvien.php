<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .formdsnv {
            margin-left: 200px;
            border: 1px solid #17a2b8;
            margin-right: 10px;
        }

        .tieude {
            background-color: #17a2b8;
            height: 45px;
            padding: 7.5px 0px;
        }
        .formtknv{
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
    <form class="formtknv" method="post" action="http://localhost:81/BaiTapLon/Nhanvien_Danhsach/timkiem">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Tìm kiếm nhân viên</span>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="txtmaNV">Mã nhân viên</label>
                <input type="text" class="form-control" name="txtmaNV" id="txtmaNV" placeholder="Nhập mã nhân viên" value="<?php if(isset($data['maNV'])) echo $data['maNV'] ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label for="txttenNV">Tên nhân viên</label>
                <input type="text" class="form-control" name="txttenNV" id="txttenNV" placeholder="Nhập tên nhân viên" value="<?php if(isset($data['tenNV'])) echo $data['tenNV'] ?>">
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
    <form class="formdsnv" method="post" action="http://localhost:81/BaiTapLon/Nhanvien_Danhsach">
        <div>
            <div class="tieude">
                <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Danh sách nhân viên</span>
            </div>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 1px" scope="col">STT</th>
                        <th style="width: 126px" scope="col">Mã nhân viên</th>
                        <th style="width: 129px" scope="col">Tên nhân viên</th>
                        <th style="width: 106px" scope="col">Ngày sinh</th>
                        <th style="width: 90px" scope="col">Giới tính</th>
                        <th style="width: 70px" scope="col">Địa chỉ</th>
                        <th style="width: 90px" scope="col">Chức vụ</th>
                        <th style="width: 95px" scope="col">Lương</th>
                        <th style="width: 130px" scope="col">Số điện thoại</th>
                        <th style="width: 1px" scope="col">Sửa</th>
                        <th style="width: 1px" scope="col">Xóa</th>
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
                            <td scope="row"><?php echo $row['maNV'] ?></td>
                            <td scope="row"><?php echo $row['tenNV'] ?></td>
                            <td scope="row"><?php echo $row['ngaySinh'] ?></td>
                            <td scope="row"><?php echo $row['gioiTinh'] ?></td>
                            <td scope="row"><?php echo $row['diaChi'] ?></td>
                            <td scope="row"><?php echo $row['chucVu'] ?></td>
                            <td scope="row"><?php echo $row['luongNV'] ?></td>
                            <td scope="row"><?php echo $row['sdtNV'] ?></td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Nhanvien_Danhsach/sua/<?php echo $row['maNV'] ?>"><i class="fas fa-edit fa-lg" style="color: black;"></i></a>
                            </td>
                            <td scope="row">
                                <a href="http://localhost:81/BaiTapLon/Nhanvien_Danhsach/xoa/<?php echo $row['maNV'] ?>"><i class="fas fa-solid fa-trash" style="color: black;"></i></a>
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