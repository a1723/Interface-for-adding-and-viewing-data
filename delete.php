<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];

//$db->deleteTask($id);
$db->delete("countries", $id);

header('Location: /work_task_countries/index.php');