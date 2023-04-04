<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $phone = trim($_POST['phone']);
    $org = trim($_POST['org']);
    $iban = trim($_POST['iban']);
    $nationality = trim($_POST['country']);

    $path = 'uploads/ ' . time() . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path);

    $_SESSION['image'] = './' . $path;
    $_SESSION['phone'] = $phone;
    $_SESSION['org'] = $org;
    $_SESSION['iban'] = $iban;
    $_SESSION['nationality'] = $nationality;

    $data = array($phone, $org, $iban, $nationality);
    $filename = "../data/comp.csv";
    $delimeter = ",";
    $handle = fopen($filename, 'a');
    fputcsv($handle, $data, $delimeter = ",");
    fclose($handle);
    header("Location: ../account.php");
    exit();

}
?>