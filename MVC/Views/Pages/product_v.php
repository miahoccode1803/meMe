<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/meMe/Public/css/admin/style.css">
    <link rel="stylesheet" href="http://localhost/meMe/Public/css/admin/progress.css">
    <script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('anhDaiDienSanPhamThem').src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</head>

<body>
    <form method="POST" action="http://localhost/meMe/product/add" enctype="multipart/form-data">
        <div id="khungThemSanPham" style="width:max-content;margin:auto">
            <div class="overlayTable table-outline table-content table-header">
                <a href="http://localhost/meMe/list_product"><span class="close">&times;</span></a>
                <table>
                    <tr>
                        <th colspan="2">Thêm Sản Phẩm</th>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm:</td>
                        <td><input type="text" id="maspThem" name="txtproduct_id"
                                value="<?php if(isset($data['product_id'])) echo $data['product_id']?>" required></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm:</td>
                        <td><input type="text" name="txtname"
                                value="<?php if(isset($data['name'])) echo $data['name']?>" required></td>
                    </tr>
                    <tr>
                        <td>Hãng:</td>
                        <td>
                            <select name="sltcompany">
                                <script>
                                var company = ["Apple", "Samsung", "Oppo", "Nokia", "Huawei", "Xiaomi", "Realme",
                                    "Vivo", "Philips", "Mobell", "Mobiistar", "Itel", "Coolpad", "HTC", "Motorola"
                                ];
                                var selectedCompany = '<?php echo isset($_POST["company"]) ? $_POST["company"] : "" ?>';
                                for (var c of company) {
                                    if (c === selectedCompany) {
                                        document.writeln(`<option value="` + c + `" selected>` + c + `</option>`);
                                    } else {
                                        document.writeln(`<option value="` + c + `">` + c + `</option>`);
                                    }
                                }
                                </script>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Hình:
                        <td>
                            <img class="hinhDaiDien" id="anhDaiDienSanPhamThem" name="product_img"
                                src="<?php echo isset($data['img']) ?"http://localhost/meMe/Public/". $data['img'] : ''; ?>"
                                required>
                            <input type="file" name="img" accept="image/*" onchange="previewImage(this);">
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Giá tiền:</td>
                        <td><input type="text" name="txtprice"
                                value="<?php if(isset($data['price'])) echo $data['price']?>" required></td>
                    </tr>
                    <tr>
                        <th colspan="2">Thông số kĩ thuật</th>
                    </tr>
                    <tr>
                        <td>Màn hình:</td>
                        <td><input type="text" name="txtscreen"
                                value="<?php if(isset($data['screen'])) echo $data['screen']?>" required></td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành:</td>
                        <td><input type="text" name="txtos" value="<?php if(isset($data['os'])) echo $data['os']?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Camara sau:</td>
                        <td><input type="text" name="txtcamera"
                                value="<?php if(isset($data['camera'])) echo $data['camera']?>" required></td>
                    </tr>
                    <tr>
                        <td>Camara trước:</td>
                        <td><input type="text" name="txtcamera_front"
                                value="<?php if(isset($data['camera_front'])) echo $data['camera_front']?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>CPU:</td>
                        <td><input type="text" name="txtcpu" value="<?php if(isset($data['cpu'])) echo $data['cpu']?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>RAM:</td>
                        <td><input type="text" name="txtram" value="<?php if(isset($data['ram'])) echo $data['ram']?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ trong:</td>
                        <td><input type="text" name="txtrom" value="<?php if(isset($data['rom'])) echo $data['rom']?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Thẻ nhớ:</td>
                        <td><input type="text" name="txtmicroUSB"
                                value="<?php if(isset($data['microUSB'])) echo $data['microUSB']?>" required></td>
                    </tr>
                    <tr>
                        <td>Dung lượng Pin:</td>
                        <td><input type="text" name="txtbattery"
                                value="<?php if(isset($data['battery'])) echo $data['battery']?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="table-footer">
                            <button name="btnAdd">THÊM</button>
                        </td>
                    </tr>
                </table>
                <?php if (!empty($data['message'])): ?>
                <script>
                alert('<?php echo $data['message']; ?>');
                </script>
                <?php endif; ?>
            </div>
        </div>

    </form>
</body>

</html>