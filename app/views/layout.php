<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo '/app/assets/css/style.css' ?>">

</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/posts">Posts</a>
        </nav>

    </header>

    <main>
        <div class="container">
            <?php echo $content; ?>
        </div>
    </main>

    <footer>
        &copy; 2023 - monsite.com
    </footer>
</body>

</html>