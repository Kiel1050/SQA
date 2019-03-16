<?php
class Model
{
    public function getlogin()
    {
        session_start();
        if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
            if ($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin') {
                $_SESSION['loginState'] = 'success';
            } else {
                $_SESSION['loginState'] = 'failed';
            }
        }
    }
}
