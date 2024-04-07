<?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNISERVICES | HOME</title>
    <link rel="stylesheet" href="/omniservices/static/styles.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/header.php";?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/logic/logic_nav.php";?>

    <main>
        <h1>ID: <?php echo $_SESSION["id"];?></h1>
        <h1>Username: <?php echo $_SESSION["username"];?></h1>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/footer.php";?>

</body>
</html>