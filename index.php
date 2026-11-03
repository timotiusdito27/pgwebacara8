<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";      
$dbname = "acara8";     

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);

// Tambahkan tautan menuju form input di sini (Latihan 8b Langkah 2)[span_4](start_span)[span_4](end_span)
echo "<a href='input/index.html'>Input</a><br><br>";

if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
    <th>Kecamatan</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Luas</th>
    <th>Jumlah Penduduk</th>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["kecamatan"]."</td>
            <td>".$row["longitude"]."</td>
            <td>".$row["latitude"]."</td>
            <td>".$row["luas"]."</td>
            <td align='right'>".$row["jumlah_penduduk"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>