<?php

ob_start();

include dirname(__FILE__) . "/components/head.php";

$fetchSaved = $GLOBALS['conn']->prepare("SELECT favorites FROM user WHERE email=:email AND password=:password");
$fetchSaved->bindParam(':email', $GLOBALS['userEmail']);
$fetchSaved->bindParam(':password', $GLOBALS['userPassword']);
$fetchSaved->execute();

$fetchSaved = $fetchSaved->fetch();

$saved = isset($fetchSaved['favorites']) ? $fetchSaved['favorites'] : '';

function showArticles($subject)
{
    $isSaved = '';

    $subject = $subject == 'latest' ? "SELECT id, main FROM article ORDER BY created DESC LIMIT 4" : "SELECT id, main FROM article WHERE tags REGEXP '$subject -,- ' ORDER BY views DESC, favorites DESC LIMIT 4";

    $articles = $GLOBALS['conn']->prepare($subject);
    $articles->execute();

    $fetchArticles = $articles->fetchAll();

    if ($fetchArticles) {

        foreach ($fetchArticles as $result) {

            $main = $result['main'];

            $title = substr($main, strpos($main, '>') + 1, strpos($main, '</h1>') - 4);

            $imgStart = substr($main, strpos($main, '<img'));
            $img = substr($imgStart, 0, strpos($imgStart, '>') + 1);

            $descriptionStart = substr($imgStart, strpos($imgStart, '>') + 1);
            $description = substr($descriptionStart, 0, strpos($descriptionStart, '</p>'));

            $readingTime = read($main);

            $fixTitle = fixTitle($title);

            if ($GLOBALS['saved']) {
                $isSaved = strpos($GLOBALS['saved'], $result['id'] . " -,- ") !== null ? 'class="active" name="remove"' : 'name="save"';
            }

            echo <<<t
                <article>
                        <a href="/projects/blog/article/?title=$fixTitle">
                        $img
                            <div>
                                <small>$readingTime reading</small>
                                <p>
                                $title
                                </p>

                                $description
                            </div>
                        </a>
                        <button id="$result[id]" $isSaved></button>
                    </article>

            t;
        }
    }

}

$articles = null;
$fetchSaved = null;

ob_end_flush();
?>

<!DOCTYPE html>



<html <?=$htmlTag?>>

<head>

    <?php include dirname(__FILE__) . "/components/head.html"?>
    <title>Document</title>
</head>

<body id="home">


    <?php include dirname(__FILE__) . "/components/header.php"?>


    <!-- <article>
                <a href="">
                    <img src="./images/6.jpg" alt="">
                    <div>
                        <small>8 min read</small>
                        <p>
                            lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <p>facere cumque id rem aliquam! obcaecati ipsum eos officiis sunt iure commodi doloribus
                            dolor
                            enim,quam autem reprehenderit culpa accusamus facere dolores?</p>
                    </div>
                </a>
                <button id="1354"></button>
            </article> -->


    <main class="cards">

        <div id="latest">
            <h2>latest</h2>
            <a href="/projects/blog/articles/">show all</a>
        </div>

        <section>
            <?=showArticles('latest')?>


        </section>

        <div id="life">
            <h2>life</h2>
            <a href="/projects/blog/articles/?tag=life">show all</a>
        </div>

        <section>
            <?=showArticles('life')?>
        </section>

        <div id="self-improvement">
            <h2>self improvement</h2>
            <a href="/projects/blog/articles/?tag=self improvement">show all</a>
        </div>

        <section>
            <?=showArticles('self-improvement')?>
        </section>

        <div id="work">
            <h2>work</h2>
            <a href="/projects/blog/articles/?tag=work">show all</a>
        </div>

        <section>
            <?=showArticles('work')?>
        </section>

        <div id="technology">
            <h2>technology</h2>
            <a href="/projects/blog/articles/?tag=technology">show all</a>
        </div>

        <section>
            <?=showArticles('technology')?>
        </section>

        <div id="software-development">
            <h2>software development</h2>
            <a href="/projects/blog/articles/?tag=software development">show all</a>
        </div>

        <section>
            <?=showArticles('software-development')?>


        </section>

        <div id="media">
            <h2>media</h2>
            <a href="/projects/blog/articles/?tag=media">show all</a>
        </div>

        <section>
            <?=showArticles('media')?>
        </section>

        <div id="society">
            <h2>society</h2>
            <a href="/projects/blog/articles/?tag=society">show all</a>
        </div>

        <section>
            <?=showArticles('society')?>
        </section>

        <div id="culture">
            <h2>culture</h2>
            <a href="/projects/blog/articles/?tag=culture">show all</a>
        </div>

        <section>
            <?=showArticles('culture')?>
        </section>

        <div id="world">
            <h2>world</h2>
            <a href="/projects/blog/articles/?tag=world">show all</a>
        </div>

        <section>
            <?=showArticles('world')?>
        </section>

    </main>


    <?php

if (isset($_GET['success'])) {

    $success = $_GET['success'];

    if ($success == 'receive-message') {
        echo '<p class="alert-success block">thanks!<br>we receive your message.</p>';
    } elseif ($success == 'settings') {
        echo '<p class="alert-success block">your profile settings has been changed.</p>';
    } elseif ($success == 'sign-in') {
        echo '<p class="alert-success block">welcome back!</p>';
    } elseif ($success == 'sign-up') {
        echo '<p class="alert-success block">welcome!</p>';
    }
}
include dirname(__FILE__) . "/components/footer.html";
?>
    <!--
    moamenyasser960%40gmail.com
    Moamen%20yasser
    123456
 -->

</body>

</html>