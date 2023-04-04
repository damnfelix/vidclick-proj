<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    //Trim form input of unwanted space
    $username = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']) . 'VIDCLICK';
    $password_hash = md5($password);
    $cpassword = trim($_POST['cpassword']) . 'VIDCLICK';

    if (empty($_POST["fullName"])) {
      $_SESSION['message'] = "First name is required!"; // then got an error message
      header('Location: ../sign-up.php');
      } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^([a-zA-Z-' ]+)$/",$username)) {
          $_SESSION['message'] = "Only letters and white space allowed in the first name field.";
          header('Location: ../sign-up.php');
        }
      }

      if (empty($_POST["email"])) {
        $_SESSION['message'] = "The email field is required!"; // then got an error message
        header('Location: ../sign-up.php');
      } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $_SESSION['message'] =  "Invalid email format!"; // throw an error if email is invalid
          header('Location: ../sign-up.php');
        }
      }
      
      if (empty($_POST["password"])) {
        $_SESSION['message'] = "Password is required!"; // then got an error message
        header('Location: ../sign-up.php');
      } else {
        // check if name only contains letters and whitespace
        if (!preg_match('/^(?=.*[!@#$%^&*-_.])(?=.*[0-9])(?=.*[A-Z]).{8,50}$/', $password)) {
          $_SESSION['message'] = "Your password is too weak.";
          header('Location: ../sign-up.php');
        }
      }

      if (empty($_POST["cpassword"])) {
        $_SESSION['message'] = "Confirmed password field is required!"; // then got an error message
        header('Location: ../sign-up.php');
      }
  
    if($password == $cpassword){
      if(!$_SESSION['message']){
        $_SESSION['username'] = $username;
        $data = array($username, $email, $password_hash);
        $filename = "../data/users.csv";
        $delimeter = ",";
        $handleR = fopen($filename, 'r');
        while(($row = fgetcsv($handleR)) !== false){
            if ($row[1] === $email){
              $_SESSION['message'] = 'User already exists in the database.';
              header('Location: ../sign-up.php');
                fclose($handleR);
                exit();
            }
        }
        $handle = fopen($filename, 'a');
        fputcsv($handle, $data, $delimeter = ",");
        fclose($handle);
        header('Location: ../continue.php');
        exit();
    }
      }
    else{
      $_SESSION['message'] = 'Passwords do not match!';
      header('Location: ../sign-up.php');
    }
}