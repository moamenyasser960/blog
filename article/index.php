<?php

ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$fetchSaved = $conn->prepare("SELECT favorites FROM user WHERE email=:email AND password=:password");
$fetchSaved->bindParam(':email', $userEmail);
$fetchSaved->bindParam(':password', $userPassword);
$fetchSaved->execute();

$fetchSaved = $fetchSaved->fetch();

$saved = isset($fetchSaved['favorites']) ? $fetchSaved['favorites'] : '';

$isSaved = '';

$article = '';

if (isset($_GET['title'])) {
    $fetchArticle = $conn->prepare("SELECT main, tags, created, id FROM article WHERE title=:title");
    $fetchArticle->bindValue(':title', input($_GET['title']));
    $fetchArticle->execute();
    $article = $fetchArticle->fetch();

    if ($article) {

        $main = $article['main'];

        $title = substr($main, strpos($main, '>') + 1, strpos($main, '</h1>') - 4);

        $imgStart = substr($main, strpos($main, '<img'));
        $img = substr($imgStart, 0, strpos($imgStart, '>') + 1);

        $mainArticle = substr($imgStart, strpos($imgStart, '>') + 1); // main article

        $tags = implode("|", explode(' -,- ', $article['tags']));
        $query = "SELECT id, main FROM article WHERE tags REGEXP '(" . substr($tags, 0, strlen($tags) - 1) . ")' ORDER BY views DESC, favorites DESC LIMIT 4";

        $articles = $conn->prepare($query);
        $articles->execute();

        $fetchArticles = $articles->fetchAll();

        $relatedArticles = '';

        if ($fetchArticles) {

            foreach ($fetchArticles as $result) {

                $main = $result['main'];

                $title = substr($main, strpos($main, '>') + 1, strpos($main, '</h1>') - 4);

                $imgStart = substr($main, strpos($main, '<img'));
                $img = substr($imgStart, 0, strpos($imgStart, '>') + 1);

                $descriptionStart = substr($imgStart, strpos($imgStart, '>') + 1);
                $description = substr($descriptionStart, 0, strpos($descriptionStart, '</p>'));

                $fixTitle = fixTitle($title);

                if ($saved) {
                    $isSaved = strpos($saved, $result['id'] . " -,- ") !== null ? 'class="active" name="remove"' : 'name="save"';
                }

                $relatedArticles .= "
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
                            <button id='$result[id]' $isSaved></button>
                        </article>

                        ";
            }
        }

        if ($saved) {
            $isSaved = strpos($saved, $article['id'] . " -,- ") !== null ? 'class="active" name="remove"' : 'name="save"';
        }
    } else {
        header('Location: /projects/blog/not-found');
    }
} else {
    header('Location: /projects/blog/not-found');
}

$fetchSaved = null;
$fetchArticle = null;
$articles = null;

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

    <main id="article">

        <article>

            <p>last update on <?=showDate($article['created'])?> · <b><?=read($article['main'])?> Read</b></p>

            <h1><?=$title?></h1>

            <div id="article-img">
                <?=$img?>

                <button <?=$isSaved . 'id="' . $article['id'] . '"';?>></button>
            </div>



            <?=$mainArticle?>





            <section class='tags'>

                <!-- <button><img src="../../all-icons/thumbs-down.svg" alt=""></button>
                <button><img src="../../all-icons/thumbs-up.svg" alt=""></button> -->

                <h3>tags: </h3>
                <div>

                    <?php

foreach (explode(' -,- ', $article['tags']) as $tag) {
    echo $tag ? "<a href='/projects/blog/articles/?tag=$tag'>$tag</a>" : '';
}
?>
                </div>
            </section>
        </article>





        <div id="share">
            <div>
                <h3>share this article</h3>
                <a href="https://www.facebook.com/sharer.php?u=http://localhost<?=$_SERVER['REQUEST_URI']?>"
                    title="Share on Facebook"><img src="../icons/Facebook-logo.svg" alt="Facebook"></a>
                <a href="https://twitter.com/intent/tweet?text=<?=$title?>&url=http://localhost<?=$_SERVER['REQUEST_URI']?>"
                    title="Share on X"><img src="../icons/twitter.svg" alt=""></a>
            </div>
        </div>
        <!--
            Share buttons
            author picture
            reading time
            date

            save & like button
            save & like & views numbers
            listen to the article (sound)

            related articles
            comments
    -->


        <section class="cards" id="related-articles">

            <div>
                <h2>related articles</h2>
                <a href="">show all</a>
            </div>

            <section>

                <?=$relatedArticles?>

            </section>



        </section>

    </main>

    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>

</body>

</html>