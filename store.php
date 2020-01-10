<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
    "name" =>  $_POST['name'],
    "description"   =>  $_POST['description']
];

//$db->addTask($data);
$db->store("countries", $data);

header("Location: /work_task_countries/index.php"); exit;
