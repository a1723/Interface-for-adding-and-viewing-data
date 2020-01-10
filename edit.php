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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Country</h1>
            <form action="update.php?id=<?= $country['id'];?>" method="post">

                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="<?= $country['name'];?>">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control"><?= $country['description'];?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>