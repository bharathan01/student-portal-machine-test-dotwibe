<?php

trait GetApplications
{
    use ConnectDB;
    public function fetchAllNewApplications()
    {
        $query = 'SELECT * FROM admission WHERE admission_status = "new";';
        try {
            $PDO = $this->DBconnect();
            $statement = $PDO->prepare($query);

            if ($statement->execute()) {
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                $statement->closeCursor(); 
                return $rows;
            } else {
                $statement->closeCursor();
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
