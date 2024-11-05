<?php
require "../app/src/models/newAdmission.model.php";
class NewAdmission extends Controller
{
    use uploadAdmissionDetails;

    public $name = '';
    public $email = '';
    public $age = '';
    public $address = '';
    public $gender = '';
    public $longitude = '';
    public $latitude = '';
    public $marksheetFilePath = '';
    public $tcFilePath = '';
    public $errors = [];
    public $uploadDir = '../public/uploads/';

    public function validateForm()
    {
        if (isset($_POST['newAdmission'])) {
            if (!empty($_POST['name'])) {
                $this->name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            } else {
                $this->errors['name'] = "Name is required.";
            }

            if (!empty($_POST['email'])) {
                $this->email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
                if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    $this->errors['email'] = "Invalid email format.";
                }
            } else {
                $this->errors['email'] = "Email is required.";
            }

            if (!empty($_POST['age'])) {
                $this->age = filter_var(trim($_POST['age']), FILTER_SANITIZE_NUMBER_INT);
                if (!filter_var($this->age, FILTER_VALIDATE_INT) || $this->age <= 0) {
                    $this->errors['age'] = "Please enter a valid age.";
                }
            } else {
                $this->errors['age'] = "Age is required.";
            }

            if (!empty($_POST['address'])) {
                $this->address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
            } else {
                $this->errors['address'] = "Address is required.";
            }

            if (!empty($_POST['gender']) && in_array($_POST['gender'], ['male', 'female'])) {
                $this->gender = $_POST['gender'];
            } else {
                $this->errors['gender'] = "Please select a valid gender.";
            }
            $allowedFileTypes = ["pdf", "docx", "jpg", "png"];
            if (isset($_FILES['tc']) && $_FILES['tc']['error'] == 0) {
                $tcFileType = pathinfo($_FILES['tc']['name'], PATHINFO_EXTENSION);
                if (in_array($tcFileType, $allowedFileTypes)) {
                    $moveTcFilePath = $this->uploadDir . basename($_FILES['tc']['name']);
                    $this->tcFilePath = $_FILES['tc']['name'];
                    move_uploaded_file($_FILES['tc']['tmp_name'], $moveTcFilePath);
                } else {
                    $errors[] = "Invalid TC file type. Allowed types are: " . implode(", ", $allowedFileTypes);
                }
            }
            if (isset($_FILES['marksheet']) && $_FILES['marksheet']['error'] == 0) {
                $marksheetFileType = pathinfo($_FILES['marksheet']['name'], PATHINFO_EXTENSION);
                if (in_array($marksheetFileType, $allowedFileTypes)) {
                    $moveMarkFilePath = $this->uploadDir . basename($_FILES['marksheet']['name']);
                    $this->marksheetFilePath = $_FILES['marksheet']['name'];
                    move_uploaded_file($_FILES['marksheet']['tmp_name'], $moveMarkFilePath);
                } else {
                    $errors[] = "Invalid Marksheet file type. Allowed types are: " . implode(", ", $allowedFileTypes);
                }
            }

            $this->longitude = $_POST['longitude'] ?? '';
            $this->latitude = $_POST['latitude'] ?? '';
        }
        return empty($this->errors);
    }

    public function uploadAdmissionDetails()
    {
        if ($this->validateForm()) {
            $newAdmissionDetails = [
                "name" => $this->name,
                "email" => $this->email,
                "age" => $this->age,
                "address" => $this->address,
                "gender" => $this->gender,
                "longitude" => $this->longitude,
                "latitude" => $this->latitude,
                "marksheetFilePath" => $this->marksheetFilePath,
                "tcFilePath" => $this->tcFilePath
            ];
            $this->addNewAdmissionDetails($newAdmissionDetails);
        }
    }
    public function index()
    {
        $this->validateForm();
        $this->view('newAdmission', '');
    }
}

$newAdmission = new NewAdmission();
$newAdmission->uploadAdmissionDetails();
