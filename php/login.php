<?php
session_start();
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = array_map('str_getcsv', file('../data/users.csv'));
    $found = false;
    foreach ($users as $user) {
        if ($user[1] == $email && $user[2] == md5($password . 'VIDCLICK')) {
            $_SESSION['username'] = $user[0];
            $found = true;
            break;
        }
    }
    if ($found) {
        header("Location: ../account.php");
        exit();
    } else {
        $_SESSION['message'] = "Invalid email or password.";
          header('Location: ../log-in.php');
    }
}
?>
