<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

$id = 1; // Example User ID

// Update Record
if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $update = "UPDATE users 
               SET username='$username',
                   email='$email',
                   mobile='$mobile'
               WHERE id=$id";

    if(mysqli_query($conn, $update))
    {
        echo "<h3 style='color:green;'>Profile Updated Successfully!</h3>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch Existing Details
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form method="post">
    Username:
    <input type="text" name="username"
           value="<?php echo $row['username']; ?>" required>
    <br><br>

    Email:
    <input type="email" name="email"
           value="<?php echo $row['email']; ?>" required>
    <br><br>

    Mobile:
    <input type="text" name="mobile"
           value="<?php echo $row['mobile']; ?>" required>
    <br><br>

    <input type="submit" name="update" value="Update Profile">
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>