<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        .section-one .login .item {
            margin: 20px 0px;
        }
    </style>
</head>

<body>
    <div class="section-one">
        <div class="title">
            <h1>Đăng nhập</h1>
        </div>
        <div class="login">
            <form action="controlDangNhap.php" method="post">
                <div class="item">
                    <p>Tài khoản:</p>
                    <input type="text" name="taikhoan" require>
                </div>
                <div class="item">
                    <p>Mật khẩu:</p>
                    <input type="password" name="matkhau" require>
                </div>
                <div class="item">
                    <button type="submit" name="btn-log">Đăng nhập</button>
                    <a href="dangky.php">Bạn chưa có tài khoản?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>