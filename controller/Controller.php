
<?php
include_once 'model/Model.php';
class Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function invoke()
    {
        $this->model->getlogin();
        if (isset($_SESSION)) {
            if ($_SESSION['loginState'] == 'success') {
                include 'view/dashboard.php';
            } else {
                include 'view/login.php';
            }
        }
    }
}
?>
