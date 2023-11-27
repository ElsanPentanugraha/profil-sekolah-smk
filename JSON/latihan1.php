<?php

// $mahasiswa = [
//     [
//         'nama' => 'Elsan Pentanugraha',
//         'umur' => 22,
//         'nim' => '19303050347',
//     ],
//     [
//         'nama' => 'Elsan Pentanugraha',
//         'umur' => 22,
//         'nim' => '19303050347',
//     ],
// ];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'belajar-laravel';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform the query
$query = mysqli_query($conn, "SELECT * FROM students LIMIT 4");

// Check if the query was successful
if (!$query) {
    die("Query failed: " . mysqli_error($conn));
}

// Fetch data using a loop
while ($mahasiswa = mysqli_fetch_array($query)) {
    // Do something with $mahasiswa, e.g., print or process the data
    $data = json_encode($mahasiswa);
    echo $data;
}




