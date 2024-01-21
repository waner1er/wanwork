<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="<?php echo MAIN_CSS ?>">
</head>

<body>
    <header>
        <h1>My Blog</h1>
        <?php include 'Views/partials/header.php' ?>
    </header>
    <?php include $view ?>
</body>

</html>