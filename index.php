<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 text-center" style="max-width:600px">
        <h1 class="h3 mb-4">Login</h1>

        <?php if(isset($_GET['register'])) : ?>
            <div class="alert alert-info">
                register success,please login
            </div>
        <?php endif ?>
        <?php if(isset($_GET['incorrect'])) : ?>
            <div class="alert alert-danger">
                login fail
            </div>
        <?php endif ?>

        <?php if(isset($_GET['suspended'])) : ?>
            <div class="alert alert-danger">
                Account Suspended
            </div>
        <?php endif ?>
        <form action="_actions/login.php" method="post">
            <input type="text" class="form-control mb-2" name="email" placeholder="Email">
            <input type="password" class="form-control mb-2" name="password" placeholder="Password">
            <button class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
