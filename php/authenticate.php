<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'riad' && $password === 'riad') {
    $_SESSION['loggedin'] = true;
    header('Location: ../php/Boomber_project/index.php');
    exit();
  } else {
    header('Location: ../index.html');
    exit();
  }
}
?>
