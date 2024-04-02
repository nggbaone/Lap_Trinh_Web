<?php

if (!isset($_POST["btn-log"])) {
    exit;
}

require("connectOOP.php");

$databse = new Database();

$conn = $databse->getConnection();

try {

    $sql = "SELECT * FROM user;";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $i) {
        if ($i["taikhoan"] == $_POST["taikhoan"] && $i["matkhau"] == $_POST["matkhau"]) {
            header("Location: home.php");
            session_start();
            $_SESSION["hovaten"] = $i["hovaten"];
            exit;
        }
    }
    echo "Sai tài khoản hoặc mật khẩu!";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}