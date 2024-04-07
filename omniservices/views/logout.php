<?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNISERVICES | LOGOUT</title>
    <link rel="stylesheet" href="/omniservices/static/styles.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/header.php";?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/logic_nav.php";?>

    <main>
    <h2>Are you sure you want to log out?</h2>
    
    <form action="/omniservices/logic/logic_logout.php" method="post">
        <div>
            <button type="submit">Logout</button>
        </div>
    </form>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/footer.php";?>

</body>
</html>