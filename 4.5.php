<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Select Data
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h2>Student Records</h2>";

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No records found";
}

$conn->close();
?>