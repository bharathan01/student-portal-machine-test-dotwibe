<?php
trait  uploadAdmissionDetails
{
    use ConnectDB;

    public function addNewAdmissionDetails($newAdmissionDetails)
    {
        $sql = "INSERT INTO admission (
            userId,
            name,
            email,
            age,
            address,
            gender,
            longitude,
            latitude,
            marksheet,
            tc,
            admission_status
        ) VALUES (
            :auth_id,
            :name,
            :email,
            :age,
            :address,
            :gender,
            :longitude,
            :latitude,
            :marksheet,
            :tc,
            'new'
        )";

        try {

            $PDO = $this->DBconnect();
            $statement = $PDO->prepare($sql);
            $authId = $_SESSION['userId'];
            $statement->bindParam(':auth_id', $authId, PDO::PARAM_INT);
            $statement->bindParam(':name', $newAdmissionDetails['name'], PDO::PARAM_STR);
            $statement->bindParam(':email', $newAdmissionDetails['email'], PDO::PARAM_STR);
            $statement->bindParam(':age', $newAdmissionDetails['age'], PDO::PARAM_INT);
            $statement->bindParam(':address', $newAdmissionDetails['address'], PDO::PARAM_STR);
            $statement->bindParam(':gender', $newAdmissionDetails['gender'], PDO::PARAM_STR);
            $statement->bindParam(':longitude', $newAdmissionDetails['longitude'], PDO::PARAM_STR);
            $statement->bindParam(':latitude', $newAdmissionDetails['latitude'], PDO::PARAM_STR);
            $statement->bindParam(':marksheet', $newAdmissionDetails['marksheetFilePath'], PDO::PARAM_STR);
            $statement->bindParam(':tc', $newAdmissionDetails['tcFilePath'], PDO::PARAM_STR);

            if ($statement->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
