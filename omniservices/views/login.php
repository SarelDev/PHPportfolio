<?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNISERVICES | LOGIN</title>
    <link rel="stylesheet" href="/omniservices/static/styles.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/header.php";?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/logic_nav.php";?>

    <main>
    <h2>Login</h2>
        <form action="/omniservices/logic/logic_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/footer.php";?>

</body>
</html>