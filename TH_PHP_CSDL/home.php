<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION["hovaten"])) {
            echo "Xin chào {$_SESSION["hovaten"]}";
        }
        else {
            header("Location: index.php");
        }
    ?>
    <form action="controlDangXuat.php" method="post">
        <button type="submit" name="btn-out">Đăng xuất</button>
    </form>
</body>

</html>