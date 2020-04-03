<?php
    include 'koneksi.php';
    $sql = "SELECT id, nama, kelas, usia FROM siswa";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "<td>" . $row["kelas"] . "</td>";
    echo "<td>" . $row["usia"] . "</td>";
    echo "</tr>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>
<!DOCTYPE html>
<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
        <div class="w3-container">
            <h2>Colored Table Heading</h2>
            <p>Use any of the w3-<em>color</em> classes to display a colored row:</p>
            <table class="w3-table-all">
                <thead>
                    <tr class="w3-red">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Usia</th>
                    </tr>
                </thead>
                <tr>
                    <td>Contoh</td>
                    <td>Contoh</td>
                    <td>Contoh</td>
                    <td>Contoh</td>
                </tr>
            </table>
        </div>
    </body>
</html>