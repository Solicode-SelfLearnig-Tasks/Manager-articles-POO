<?php
require_once 'Database.php';
require_once 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$user->name = "Mohamed";
$user->email = "Mohamed@gmail.com";
if($user->create()){
    echo "User added successfully <br>";
}

echo "<h2>User List:</h2>";
$users = $user->read();
foreach($users as $u){
    echo "Name: " . $u['name'] . " - Email: " . $u['email'] . "<br>";
}

$user->id = 1; 
$user->name = "Moha";
$user->email = "Moha@gmail.com";
if($user->update()){
    echo "User ID 1 updated successfully <br>";
}

$user->id = 2;
?>
