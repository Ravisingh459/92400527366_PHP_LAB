<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$message = "";

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    /* =========================
       UPDATE USING MYSQLI
       ========================= */

    $conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "UPDATE students 
            SET name='$name', email='$email' 
            WHERE id='$id'";

    if($conn->query($sql) === TRUE)
    {
        $message = "Record updated successfully using MySQLi";
    }
    else
    {
        $message = "Error: " . $conn->error;
    }

    $conn->close();


    /* =========================
       UPDATE USING PDO
       Uncomment to use PDO
       ========================= */

    /*
    try
    {
        $conn = new PDO("mysql:host=$host;dbname=$dbname",
                        $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE students
                SET name='$name', email='$email'
                WHERE id='$id'";

        $conn->exec($sql);

        $message = "Record updated successfully using PDO";
    }
    catch(PDOException $e)
    {
        $message = "Error: " . $e->getMessage();
    }

    $conn = null;
    */
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Record</title>
</head>
<body>

<h2>Update Student Record</h2>

<form method="post">
    Student ID:
    <input type="number" name="id" required><br><br>

    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    <input type="submit" name="update" value="Update Record">
</form>

<br>

<?php
if(!empty($message))
{
    echo $message;
}
?>

</body>
</html>