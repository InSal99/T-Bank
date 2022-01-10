<?php
session_start();

$id = $_GET["id"];
unset($_SESSION["cart"][$id]);

echo "<script>alert('Sampah berhasil dihapus dari keranjang. ');</script>";
echo "<script>location='cart.php'</script>";
?>