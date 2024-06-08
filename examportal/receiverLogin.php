<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rlogin'])) {
    require_once('db_connect.php'); // Include your database connection script

    $remail = $_POST['remail'];
    $rpassword = $_POST['rpassword'];

    $sql = "SELECT * FROM users WHERE email = '$remail'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($rpassword, $user['password'])) {
            $_SESSION['rid'] = $user['id'];
            header("location: sentrequest.php");
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
