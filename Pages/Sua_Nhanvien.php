<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán hàng siêu thị</title>
    <style>
        .formsuanv {
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
    <form class="formsuanv" method="post" action="http://localhost:81/BaiTapLon/Nhanvien_Danhsach/suadl">
        <div class="tieude">
            <span style="font-size: 20px; font-weight: bold; margin-left: 14px;">Sửa thông tin nhân viên</span>
        </div>
        <?php
        if (isset($data['dulieu']) && $data['dulieu']) {
            while ($row = mysqli_fetch_array($data['dulieu'])) {

        ?>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="txtmaNV">Mã nhân viên</label>
                        <input type="text" class="form-control" name="txtmaNV" id="txtmaNV" placeholder="Nhập mã nhân viên" value="<?php if (isset($row['maNV'])) echo $row['maNV'] ?>" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txttenNV">Tên nhân viên</label>
                        <input type="text" class="form-control" name="txttenNV" id="txttenNV" placeholder="Nhập tên nhân viên" value="<?php if (isset($row['tenNV'])) echo $row['tenNV'] ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txtngaySinh">Ngày sinh</label>
                        <input type="date" class="form-control" name="txtngaySinh" id="txtngaySinh" placeholder="Nhập ngày sinh " value="<?php if (isset($row['ngaySinh'])) echo $row['ngaySinh'] ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="txtdiaChi">Địa chỉ</label>
                        <input type="text" class="form-control" name="txtdiaChi" id="txtdiaChi" placeholder="Nhập địa chỉ" value="<?php if (isset($row['diaChi'])) echo $row['diaChi'] ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txtchucVu">Chức vụ</label>
                        <select class="form-control" name="txtchucVu" id="txtchucVu">
                            <option disabled selected>Chọn chức vụ</option>
                            <option value="Nhân viên" <?php if (isset($data['chucVu']) && $data['chucVu'] == 'Nhân viên') echo 'selected' ?>>Nhân viên</option>
                            <option value="Quản lý" <?php if (isset($data['chucVu']) && $data['chucVu'] == 'Quản lý') echo 'selected' ?>>Quản lý</option>
                            <option value="Chủ siêu thị" <?php if (isset($data['chucVu']) && $data['chucVu'] == 'Chủ siêu thị') echo 'selected' ?>>Chủ siêu thị</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="txtchucVu" id="txtchucVu" placeholder="Nhập chức vụ" value="<?php if (isset($row['chucVu'])) echo $row['chucVu'] ?>"> -->
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="chkgioiTinh">Giới tính</label>
                        <br>
                        <input type="radio" name="chkgioiTinh" value="Nam" <?php if (isset($row['gioiTinh']) && $row['gioiTinh'] == 'Nam') echo 'checked'; ?>> Nam &nbsp; &nbsp; &nbsp;&nbsp;
                        <input type="radio" name="chkgioiTinh" value="Nữ" <?php if (isset($row['gioiTinh']) && $row['gioiTinh'] == 'Nữ') echo 'checked'; ?>> Nữ &nbsp; &nbsp; &nbsp;&nbsp;
                        <input type="radio" name="chkgioiTinh" value="Khác" <?php if (isset($row['gioiTinh']) && $row['gioiTinh'] == 'Khác') echo 'checked'; ?>> Khác
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="txtluongNV">Lương nhân viên</label>
                        <input type="number" class="form-control" name="txtluongNV" id="txtluongNV" placeholder="Nhập lương" value="<?php if (isset($row['luongNV'])) echo $row['luongNV'] ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="txtsdtNV">Số điện thoại</label>
                        <input type="number" class="form-control" name="txtsdtNV" id="txtsdtNV" placeholder="Nhập số điện thoại" value="<?php if (isset($row['sdtNV'])) echo $row['sdtNV'] ?>">
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