<?php

require 'connect.php';

$statement = $conn->prepare("Call DisplayAllPersons()");
$statement->execute();

$response = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "{\"persons\":".json_encode($response)."}";

?>