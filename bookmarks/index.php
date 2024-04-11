<?php

ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$MainFavorites = '';

if ($isLog) {
    $userFavorites = $conn->prepare("SELECT favorites FROM user WHERE email=:email AND password=:password");
    $userFavorites->bindValue(':email', $userEmail);
    $userFavorites->bindValue(':password', $userPassword);
    $userFavorites->execute();
    $favorites = $userFavorites->fetch()['favorites'];

    if ($favorites) {

        $query = implode("', '", explode(' -,- ', $favorites));

        $userFavorites = $conn->prepare("SELECT main, created, id FROM article WHERE id IN ('$query')");
        $userFavorites->execute();
        $favorites = $userFavorites->fetchAll();

        foreach ($favorites as $result) {

            $main = $result['main'];

            $title = substr($main, strpos($main, '>') + 1, strpos($main, '</h1>') - 4);

            $imgStart = substr($main, strpos($main, '<img'));
            $img = substr($imgStart, 0, strpos($imgStart, '>') + 1);

            $descriptionStart = substr($imgStart, strpos($imgStart, '>') + 1);
            $description = substr($descriptionStart, 0, strpos($descriptionStart, '</p>'));

            $fixTitle = fixTitle($title);

            $MainFavorites .= "
                    <article>
                            <a href='/projects/blog/article/?title=$fixTitle'>
                            $img
                                <div>
                                    <small>" . read($main) . " read</small>
                                    <p>
                                    $title
                                    </p>

                                    $description
                                </div>
                            </a>
                            <button id='$result[id]' class='active' name='remove'></button>
                        </article>

                        ";
        }
    } else {

        $MainFavorites = "
        <div id='not-found'>
        <img src='../icons/ban.svg' alt=''>

        you don't have Bookmarks yet, save articles to see them here.

        <p>
            <a id='go-back'>go back</a>
            ·
            <a href='/projects/blog'>home page</a>
        </p>
        </div>
";

    }
} else {
    header('Location: /projects/blog/sign-in/?message=required');
}
$userFavorites = null;

ob_end_flush();
?>

<!DOCTYPE html>



<html <?=$htmlTag?>>

<head>

    <?php include dirname(dirname(__FILE__)) . "/components/head.html"?>
    <title>Document</title>
</head>

<body>


    <?php include dirname(dirname(__FILE__)) . "/components/header.php"?>

    <main class="cards">

        <h1>your bookmarks</h1>


        <section>

            <?=$MainFavorites?>

            <!-- <article>
                <a href="">
                    <img src="../images/6.jpg" alt="">
                    <div>
                        <small>8 min read</small>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <p>Facere cumque id rem aliquam! Obcaecati ipsum eos officiis sunt iure commodi
                            doloribus
                            dolor
                            enim,quam autem reprehenderit culpa accusamus facere dolores?</p>
                    </div>
                </a>
                <button id="1354"></button>
            </article>

            <article>
                <a href="">
                    <img src="../images/6.jpg" alt="">
                    <div>
                        <small>8 min read</small>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <p>Facere cumque id rem aliquam! Obcaecati ipsum eos officiis sunt iure commodi
                            doloribus
                            dolor
                            enim,quam autem reprehenderit culpa accusamus facere dolores?</p>
                    </div>
                </a>
                <button id="1354"></button>
            </article>

            <article>
                <a href="">
                    <img src="../images/6.jpg" alt="">
                    <div>
                        <small>8 min read</small>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <p>Facere cumque id rem aliquam! Obcaecati ipsum eos officiis sunt iure commodi
                            doloribus
                            dolor
                            enim,quam autem reprehenderit culpa accusamus facere dolores?</p>
                    </div>
                </a>
                <button id="1354"></button>
            </article>

            <article>
                <a href="">
                    <img src="../images/6.jpg" alt="">
                    <div>
                        <small>8 min read</small>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <p>Facere cumque id rem aliquam! Obcaecati ipsum eos officiis sunt iure commodi
                            doloribus
                            dolor
                            enim,quam autem reprehenderit culpa accusamus facere dolores?</p>
                    </div>
                </a>
                <button id="1354"></button>
            </article> -->

        </section>




    </main>

    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>

</body>

</html>