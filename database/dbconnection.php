<?php
class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=cms;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $sql = $this->connection->prepare($query);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

// $db = new Database();
// $customId = "CONCAT('P', LPAD(LAST_INSERT_ID(), 3, '0'))";
// // $db->query("INSERT INTO parents(parentId, parentName, mobileNumber, email, password, wardId) VALUES($customId, 'Derrick', '0549632604', 'rick@gmail.com', '1234', '1')");

// $parents = $db->query("SELECT * From parents");

// foreach ($parents as $parent) {
//     echo "<h1>" . $parent['parentName'] . "</h1>";
// }
// ?>