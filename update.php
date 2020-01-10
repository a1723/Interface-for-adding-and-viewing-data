<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
    "id"    =>  $_GET['id'],
    "name" =>  $_POST['name'],
    "description"   =>  $_POST['description']
];


$db->update("countries", $data);

header("Location: /work_task_countries/index.php"); exit;