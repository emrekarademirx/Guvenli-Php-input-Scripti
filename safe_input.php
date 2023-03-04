<?php

$input = $_GET['input'];

// XSS açıklarını önlemek için girdiyi temizleyin
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// SQL enjeksiyonu açıklarını önlemek için girdiyi temizleyin
$input = mysqli_real_escape_string($conn, $input);

// Sonuçları veritabanına kaydedin
mysqli_query($conn, "INSERT INTO table_name (input) VALUES ('$input')");

?>





