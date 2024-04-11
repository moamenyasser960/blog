<?php

ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$allTags = '';
$search = '';
$showArticles = '';
$searchQuery = "";
if (isset($_GET['tag'])) {

    $tag = input($_GET['tag']);
    $searchQuery = "WHERE tags REGEXP '$tag'";

} elseif (isset($_GET['search'])) {

    $search = input($_GET['search']);
    $allTags .= "<h1>search for \"$search\"</h1>";
    $searchQuery = "WHERE main REGEXP '$search' OR tags REGEXP '$search' OR title REGEXP '$search'";
}

$offset = 40;

if (isset($_GET['page'])) {
    $offset = input($_GET['page']) * $offset;
}

// Numbers

$fetchArticlesNum = $conn->prepare("SELECT COUNT(id) FROM article $searchQuery");
$fetchArticlesNum->execute();

$articlesNum = $fetchArticlesNum->fetch()['COUNT(id)'];

// Articles

$articles = $conn->prepare("SELECT id, main, tags, created FROM article $searchQuery ORDER BY created DESC LIMIT 40 OFFSET $offset");
$articles->execute();

$fetchArticles = $articles->fetchAll();

// favorites

$fetchSaved = $GLOBALS['conn']->prepare("SELECT favorites FROM user WHERE email=:email AND password=:password");
$fetchSaved->bindParam(':email', $GLOBALS['userEmail']);
$fetchSaved->bindParam(':password', $GLOBALS['userPassword']);
$fetchSaved->execute();

$fetchSaved = $fetchSaved->fetch();

$saved = isset($fetchSaved['favorites']) ? $fetchSaved['favorites'] : '';

//

$tags = [];

if ($fetchArticles) {

    foreach ($fetchArticles as $result) {

        array_push($tags, explode(' -,- ', $result['tags']));

        $main = $result['main'];

        $title = substr($main, strpos($main, '>') + 1, strpos($main, '</h1>') - 4);

        $imgStart = substr($main, strpos($main, '<img'));
        $img = substr($imgStart, 0, strpos($imgStart, '>') + 1);

        $descriptionStart = substr($imgStart, strpos($imgStart, '>') + 1);
        $description = substr($descriptionStart, 0, strpos($descriptionStart, '</p>'));

        $fixTitle = fixTitle($title);

        $isSaved = strpos($saved, "$result[id] -,- ") ? 'class="active" name="remove"' : 'name="save"';

        $showArticles .= "
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
                            <button $isSaved id='$result[id]' $isSaved ></button>
                        </article>

                        ";
    }

// Tags

    function array_duplicate($ary)
    {
        $lst = array();
        foreach (array_keys($ary) as $k) {
            $v = $ary[$k];
            if (is_scalar($v)) {
                $lst[] = $v;
            } elseif (is_array($v)) {
                $lst = array_merge($lst,
                    array_duplicate($v)
                );
            }
        }
        return $lst;
    }

    $tags = array_duplicate($tags);
    $tags = array_unique($tags);
    $tags = array_slice($tags, 0, 20);

    foreach ($tags as $tag) {
        $allTags .= $tag ? "<a href='/projects/blog/articles/?tag=$tag'>$tag</a>" : '';
    }

} else {
    $showArticles = "
    <div id='not-found'>
    <img src='../icons/ban.svg' alt=''>

    There seem to be no articles about this yet.

    <p>
        <a id='go-back'>go back</a>
        ·
        <a href='/projects/blog'>home page</a>
    </p>
    </div>

    ";
}

$fetchArticlesNum = null;
$articles = null;
$fetchSaved = null;

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

    <main class="cards" id="articles">

        <div>
            <?=$allTags?>
        </div>

        <?=$showArticles?>

        <section class="toggle-pages">
            <a><?=$articlesNum?></a>
        </section>

    </main>

    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>

</body>

</html>