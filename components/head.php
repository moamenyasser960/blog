<?php

ob_start();

function input($d)
{

    if (is_array($d)) {
        $st = [];
        foreach ($d as $s) {
            $sp = trim($s);
            $sp = stripslashes($s);
            $sp = htmlspecialchars($s);
            array_push($st, $sp);
        }
        return $st;
    } else {
        $d = trim($d);
        $d = stripslashes($d);
        $d = htmlspecialchars($d);
        return $d;
    }
}

$conn = new PDO("mysql:host=localhost;dbname=blog", "root");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$userName = '';
$userEmail = '';
$userPassword = '';
$isLog = '';

if (isset($_COOKIE['munch-name']) && isset($_COOKIE['munch-email']) && isset($_COOKIE['munch-password'])) {

    if (isset($_GET['log-out'])) {
        setcookie("munch-name", '', 0, "/");
        setcookie("munch-email", '', 0, "/");
        setcookie("munch-password", '', 0, "/");
    } else {
        $userName = input($_COOKIE['munch-name']);
        $userEmail = input($_COOKIE['munch-email']);
        $userPassword = input($_COOKIE['munch-password']);
    }

    $isLog = $userName && $userEmail && $userPassword;
}

function read($paragraph)
{
    $readingTime = count(explode(' ', $paragraph)) / 200;

    if ($readingTime < 1) {
        $readingTime = round($readingTime * 60) . ' sec';
    } else if ($readingTime > 60) {
        $readingTime = round($readingTime) / 60 . ' hr';
    } else {
        $readingTime = round($readingTime) . ' min';
    }

    return $readingTime;
}

function showDate($date)
{
    return substr($date, 0, strpos($date, ' '));
}

function fixTitle($query)
{
    $query = strtolower(preg_replace('/(:| |<|>|,|%|\]|\/|\||\+|\[|{|}|;|\'|\"|&|\*|=|\^|\$|#|@|\\|\)|\(|\.|!)+/', '-', $query));
    $query = strtolower(preg_replace('/--/', '-', $query));
    $query = strtolower(preg_replace('/(^-|-$)/', '', $query));
    return $query;
}

if (isset($_GET['theme'])) {
    $theme = input($_GET['theme']);
    setcookie("munch-theme", $theme, time() + (24 * 60 * 60) * 365, "/");
} else {
    $theme = isset($_COOKIE['munch-theme']) ? input($_COOKIE['munch-theme']) : 'light';
}

if (isset($_GET['lang'])) {
    $lang = input($_GET['lang']);
    setcookie("munch-lang", $lang, time() + (24 * 60 * 60) * 365, "/");
} else {
    $lang = isset($_COOKIE['munch-lang']) ? input($_COOKIE['munch-lang']) : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

$rtl = '';
if ($lang == 'ar') {
    $rtl = 'dir="rtl"';
}

$htmlTag = "lang='$lang' $rtl class='$theme'";

if ($isLog && (isset($_GET['save']) || isset($_GET['remove']))) {
    if ($isLog && isset($_GET['save'])) {

        $saved = $conn->prepare("UPDATE user SET favorites=CONCAT(COALESCE(favorites, ''), :id, ' -,- ') WHERE email=:email AND password=:password; UPDATE article SET favorites=favorites+1 WHERE id=:id");
        $saved->bindValue(':id', input($_GET['save']));

    } else if ($isLog && isset($_GET['remove'])) {

        $saved = $conn->prepare("UPDATE user SET favorites=REPLACE(favorites, CONCAT(:id, ' -,- '), '') WHERE email=:email AND password=:password; UPDATE article SET favorites=favorites-1 WHERE id=:id");
        $saved->bindValue(':id', input($_GET['remove']));

    }

    $saved->bindParam(':email', $userEmail);
    $saved->bindParam(':password', $userPassword);
    $saved->execute();
    $saved = null;
}

ob_end_flush();