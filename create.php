<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create Country</h1>
            <form action="store.php" method="post">
                <div class="form-group">
                    <p>Name</p>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <p>Description</p>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>