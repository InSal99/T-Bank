<?php
session_start();
$WasteId = $_GET['id'];

if(isset($_SESSION['cart'][$WasteId])) {
    $_SESSION['cart'][$WasteId] += 1;
} else {
    $_SESSION['cart'][$WasteId] = 1;
}

echo "<script>alert('Sampah berhasil masuk ke dalam keranjang.';</script>";
echo "<script>location='cart/cart.php'</script>";

?>