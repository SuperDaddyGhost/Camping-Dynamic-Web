<?php

$allowedAttempts = 3;
$lockoutTime = 600; 
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if (!isset($_SESSION['lockout_time'])) {
    $_SESSION['lockout_time'] = 0;
}

$currentTimestamp = time();

if ($_SESSION['lockout_time'] > $currentTimestamp) {
 
    $remainingTime = $_SESSION['lockout_time'] - $currentTimestamp;
    echo "Login is locked. Try again in " . gmdate("i:s", $remainingTime) . " minutes.";
    exit();
}

if (isset($_POST['submit'])) {
    include 'config.php';
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user WHERE email = '$email' AND password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');
            exit();
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location: user_page.php');
            exit();
        }
    } else {

        $_SESSION['login_attempts']++;

        if ($_SESSION['login_attempts'] >= $allowedAttempts) {
 
            $_SESSION['lockout_time'] = $currentTimestamp + $lockoutTime;
            $_SESSION['login_attempts'] = 0;
            echo "Login is locked. Try again in 10 minutes.";
            exit();
        } else {
      
            $error = 'Incorrect email or password!';
        }
    }
}
?>
