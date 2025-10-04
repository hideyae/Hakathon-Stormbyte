<?php
include 'connect.php';

$sql = "SELECT * FROM locations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Locations</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Latitude</th><th>Longitude</th><th>Country</th><th>Coast Type</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['latitude']."</td>
                <td>".$row['longitude']."</td>
                <td>".$row['country']."</td>
                <td>".$row['coast_type']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No locations found.";
}

$conn->close();
?>

