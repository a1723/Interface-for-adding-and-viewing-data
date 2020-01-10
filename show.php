<?php
require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];

//$task = $db->getTask($id);
$country = $db->getOne("countries", $id);

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $country['name'];?></h1>
            <p>
                <?= $country['description'];?>
            </p>
            <a href="/work_task_countries/index.php">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>