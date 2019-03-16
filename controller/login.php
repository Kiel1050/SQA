<?php
if (isset($_POST) && $_POST != null) {
    $data = $_POST;
    session_start();
    if ($data['username'] == 'admin' && $data['password'] == 'admin') { //right acc
        $_SESSION['loginState'] = 'success';
    } else { // wrong acc
        $_SESSION['loginState'] = 'failed';
    }
}
header('Location: /sqa');exit();
