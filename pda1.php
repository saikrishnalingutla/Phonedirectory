<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$query = "
INSERT INTO tbl_sample 
(name, phone) 
VALUES (:name, :phone)
";

for($count = 0; $count<count($_POST['hidden_name']); $count++)
{
 $data = array(
  ':name' => $_POST['hidden_name'][$count],
  ':phone' => $_POST['hidden_phone'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

?>