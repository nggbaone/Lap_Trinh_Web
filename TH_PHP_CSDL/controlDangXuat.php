<?php

if (isset($_POST["btn-out"])) {
    session_start();
    session_unset();
    header("Location: index.php");
}