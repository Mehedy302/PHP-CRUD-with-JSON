<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';


if (!isset($_POST['isbn'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_POST['isbn'];
deleteUser($userId);

header("Location: index.php");
