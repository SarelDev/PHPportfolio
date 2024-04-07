<?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNISERVICES | REGISTER</title>
    <link rel="stylesheet" href="/omniservices/static/styles.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/header.php";?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/logic_nav.php";?>

    <main>
        <h2>Register</h2>
        <form action="/omniservices/logic/logic_register.php" method="POST">
            <label for="reg_username">Username:</label>
            <input type="text" id="reg_username" name="reg_username" required>
            <label for="reg_password">Password:</label>
            <input type="password" id="reg_password" name="reg_password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit">Register</button>
        </form>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/footer.php";?>

</body>
</html>