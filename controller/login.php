<?php
if (isset($_POST) && $_POST != null) {
    $data = $_POST;
    if ($data['username'] == 'admin' && $data['password'] == 'admin') {
        $_SESSION['loginState'] = 'success';
    } else {
        $_SESSION['loginState'] = 'failed';
        var_dump($_SESSION);
        //die(1);
        header('Location: ../');
        exit();
    }

} else { //redirect to login controller
    header('Location: ../');
}
