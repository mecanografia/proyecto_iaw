<?php
session_start();

if ($_SESSION['canAccess'] == false) {
    header('Location: index.php');
    exit;
}else {
    echo "<h1>Estas en dashboard</h1>";
}
?>