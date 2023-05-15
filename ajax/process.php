<?php
header('content-type: application/json');

// Mengambil data dari request POST
$numberInput = $_POST['numberInput'];
$textInput = $_POST['textInput'];

// Membuat array dan mengisi dengan teks yang diberikan
$array = array();
for ($i = 0; $i < $numberInput; $i++) {
    $array[] = $textInput . ' ' . ($i+1);
}

// Mengembalikan array sebagai JSON
echo json_encode($array);
