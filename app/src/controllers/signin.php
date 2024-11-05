<?php
require "../app/src/models/signin.model.php";
class Signin extends Controller
{

    use SignInModel;
    public $username = '';
    public $password = '';
    public $error = [];
    public function validateForm()
    {
        if (isset($_POST['signin'])) {
            if (!empty($_POST['username'])) {
                $this->username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
            } else {
                $this->error['errUserName'] = "Username is required.";
            }
            if (!empty($_POST['password'])) {
                $this->password = trim($_POST['password']);
            } else {
                $this->error['errPassword'] = "Password is required.";
            }
        }

        return empty($this->error);
    }

    public function signInWithUserInfo()
    {
        if ($this->validateForm()) {
            $userInfo = [
                "username" => $this->username,
                "password" => $this->password
            ];
            $success = $this->fetchUserInfo($userInfo);
            if ($success) {
                $_SESSION['userId'] = $success['userId'];
                header("location:home");
            }
        }
    }

    public function index()
    {
        $this->validateForm();
        $this->view('signin', $this->error);
    }
}

$signIn = new Signin();
$signIn->signInWithUserInfo();
