<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center" style="max-width: 800px;">
        <h1 class="h3">Login</h1>
        <?php if (isset($_GET['register'])) : ?>
            <div class="alert alert-info">
                Account created, please login
            </div>
        <?php endif ?>
        <form action="_actions/login.php" method="post" class="mt-3">
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button class="btn btn-primary w-100" type="submit">Login</button> 

        </form>
        <a href="register.php">Register</a>
    </div>
</body>
</html>