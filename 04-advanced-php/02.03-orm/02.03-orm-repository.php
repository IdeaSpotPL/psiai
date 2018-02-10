<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.03-orm-repository.php
require_once __DIR__ . '/02.03-orm-entity.php';

class UserRepository
{
    /**
     * @param $id
     * @return null|User
     * @throws Exception
     */
    public function findById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $pdo = new PDO('mysql:dbname=defaultdb; host=127.0.0.1', 'defaultuser', '12345678');
        $statement = $pdo->prepare($sql);
        $result = $statement->execute(array('id' => $id));
        if (! $result) {
            error_log("Failed to fetch data. " . print_r($statement->errorInfo(), true));
            throw new \Exception("Failed to fetch data.");
        }
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if (! $row) {
            return null;
        }

        $user = new User();
        $user
            ->setId($row['id'])
            ->setUsername($row['username'])
            ->setFirstName($row['firstName'])
            ->setLastName($row['lastName']);

        return $user;
    }
}
