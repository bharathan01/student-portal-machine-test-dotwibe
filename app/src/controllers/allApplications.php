<?php

require "../app/src/models/allApplications.model.php";
class AllApplications extends Controller
{
    use GetApplications;

    private $admissionId;


    public function getAllNewApplication()
    {
        return $this->fetchAllNewApplications();
    }
    public function index()
    {
        if (isset($_POST['admissionId'])) {
            $this->admissionId = $_POST['admissionId'];
            echo $this->admissionId;
        }
        $this->view('allApplications', $this->getAllNewApplication());
    }
}
