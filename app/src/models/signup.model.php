<?php
trait SignupModel
{
    use ConnectDB;
    public function createUserCredentials($userData)
    {
        $username = $userData['username'];
        $email = $userData['email'];
        $password = $userData['password'];
        $Query = "INSERT INTO authinfo(username, email,password) VALUES 
       ('$username','$email','$password')";
        try {
            $PDO = $this->DBconnect();
            $statement = $PDO->prepare($Query);
            $success = $statement->execute();
            if ($success) {
                return $success;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
