<?php
trait SignInModel
{
    use ConnectDB;
    public function fetchUserInfo($userInfo)
    {
        $username = $userInfo['username'];
        $password = $userInfo['password'];

        $query = "SELECT * FROM `authinfo` WHERE username = :username AND password = :password";
        try {
            $PDO = $this->DBconnect();
            $statement = $PDO->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':password', $password);

            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                unset($result['password']);
                return $result;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
