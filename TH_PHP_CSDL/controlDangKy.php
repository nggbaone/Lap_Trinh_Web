<?php

require("connectOOP.php");

$database = new Database();

$conn = $database->getConnection();

try {

    $sql = "INSERT INTO user VALUES(:value1,:value2,:value3,:value4);";

    $statement = $conn->prepare($sql);

    $hovaten = $_POST["hovaten"];
    $taikhoan = $_POST["taikhoan"];
    $matkhau = $_POST["matkhau"];
    $email = $_POST["email"];

    $statement->bindParam(":value1",$hovaten);
    $statement->bindParam(":value2",$taikhoan);
    $statement->bindParam(":value3",$matkhau);
    $statement->bindParam(":value4",$email);

    $check = $statement->execute();

    $database->closeConnection();

    if ($check) {
        session_start();
        $_SESSION["hovaten"] = $hovaten;
        header("Location: home.php");
        exit;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}