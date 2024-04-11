<?php include dirname(dirname(__FILE__)) . "/components/head.php"?>

<!DOCTYPE html>

<html <?=$htmlTag?>>

<head>
    <?php include dirname(dirname(__FILE__)) . "/components/head.html"?>
    <title>Document</title>
</head>

<body>
    <?php include dirname(dirname(__FILE__)) . "/components/header.php"?>


    <main id="not-found">
        <img src="../icons/ban.svg" alt="">
        sorry, it seems that this page isn't available

        <p>
            <a id='go-back'>go back</a>
            ·
            <a href="/projects/blog">home page</a>
        </p>
    </main>


    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>

</body>

</html>