<?php

session_start();

if (!$_SESSION['IsActive']) {
    return header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <h1>
        Welcome ! <?= $_SESSION['username']; ?>
    </h1>
</body>

</html>