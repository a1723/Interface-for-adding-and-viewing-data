<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$country = $db->all("countries");

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
            <h1>Countries</h1>
            <a href="create.php" class="btn btn-success">Add Country</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($country as $country):?>
                    <tr>
                        <td><?= $country['id'];?></td>
                        <td><?= $country['description'];?></td>
                        <td>
                            <a href="show.php?id=<?= $country['id'];?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="edit.php?id=<?= $country['id'];?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('are you sure?');" href="delete.php?id=<?= $country['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>