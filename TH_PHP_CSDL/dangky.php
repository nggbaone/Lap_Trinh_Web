<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        .section-one .reg .item {
            margin: 20px 0px;
        }
    </style>
</head>
<body>
<div class="section-one">
        <div class="title">
            <h1>Đăng ký</h1>
        </div>
        <div class="reg">
            <form action="controlDangKy.php" method="post">
                <div class="item">
                    <p>Họ và tên:</p>
                    <input type="text" name="hovaten" require>
                </div>
                <div class="item">
                    <p>Tài khoản:</p>
                    <input type="text" name="taikhoan" require>
                </div>
                <div class="item">
                    <p>Mật khẩu:</p>
                    <input type="password" name="matkhau" require>
                </div>
                <div class="item">
                    <p>Email:</p>
                    <input type="text" name="email" require>
                </div>
                <div class="item">
                    <button type="submit" name="btn-reg">Đăng ký</button>
                    <a href="index.php">Bạn đã có tài khoản?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>