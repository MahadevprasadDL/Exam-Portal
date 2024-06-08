<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hlogin'])) {
    require_once('db_connect.php'); // Include your database connection script

    $hemail = $_POST['hemail'];
    $hpassword = $_POST['hpassword'];

    $sql = "SELECT * FROM users WHERE email = '$hemail'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($hpassword, $user['password'])) {
            $_SESSION['hid'] = $user['id'];
            header("location: compexam.php");
            exit;
        } else {
            // Incorrect password
            echo "Invalid password. Please try again.";
        }
    } else {
        // User not found
        echo "User with this email does not exist.";
    }

    mysqli_close($connection);
}
?>
