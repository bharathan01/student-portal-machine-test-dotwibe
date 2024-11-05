<?php
require "../app/src/models/signup.model.php";
class SignUp extends Controller
{
    use SignupModel;

    public $error = [];
    public $username = "";
    public $email = "";
    public $password = "";

    public function validateForm()
    {

        if (isset($_POST['signup'])) {
            if (!empty($_POST['username'])) {
                $this->username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
            } else {
                $this->error['errUserName'] = "Username is required.";
            }

            if (!empty($_POST['email'])) {
                $this->email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
                if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    $this->error['errEmail'] = "Invalid email format.";
                }
            } else {
                $this->error['errEmail'] = "Email is required.";
            }

            if (!empty($_POST['password'])) {
                $this->password = trim($_POST['password']);
            } else {
                $this->error['errPassword'] = "Password is required.";
            }
        }

        return empty($this->error);
    }

    public function registerUserInDB()
    {
        if ($this->validateForm()) {
            $signUpData = [
                "username" => $this->username,
                "email" => $this->email,
                "password" => $this->password
            ];
            $success = $this->createUserCredentials($signUpData);
            if ($success) {
                header('location:signin');
            }
        }
    }
    public function index()
    {
        $this->validateForm();
        $this->view('signup', $this->error);
    }
}

$signup = new SignUp;
$signup->registerUserInDB();
