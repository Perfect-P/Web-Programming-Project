<?php
    require_once('controllers/base_controller.php');
    require_once('models/account.php');

    class AccountController extends BaseController {
        function __contruct() {
            $this->folder = 'accounts';
        }
        function index() {
            $this->render('account_register.php');
        }
        function registerController() {
            $result = Account::register($_POST['username'], $_POST['passwd']);
            if($result){
                $this->folder = 'staffs';
                $_SESSION['username'] = $result['username'];
                $this->render('index.php');
            }
        }
    }
?>