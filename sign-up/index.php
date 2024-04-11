<?php
ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $name = input($_POST['name']);
        $email = input($_POST['email']);
        $password = input($_POST['password']);

        $addUser = $conn->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
        $addUser->bindValue(':name', $name);
        $addUser->bindValue(':email', $email);
        $addUser->bindValue(':password', $password);
        $addUser->execute();

        setcookie("munch-email", $email, time() + (24 * 60 * 60), "/");
        setcookie("munch-password", $password, time() + (24 * 60 * 60), "/");

        setcookie("munch-name", $name, time() + (24 * 60 * 60), "/");

        header('Location: /projects/blog/?success=sign-up');

    } catch (PDOException $e) {
        $createErr = 'flex';
        if (preg_match('/Duplicate/i', $e->getMessage())) {
            $error = '<p>you have an account <a href="/projects/blog/sign-in">sign in</a> or <a href="/projects/blog/reset-password">reset your password</a></p>';
        } else {
            $error = '<p>error! try again.</p>';
        }
    }
}

$addUser = null;

ob_end_flush();

?>

<!DOCTYPE html>

<html <?=$htmlTag?>>

<head>

    <?php include dirname(dirname(__FILE__)) . "/components/head.html"?>
    <title>Document</title>
</head>

<body id="sign-in">

    <main class="form">

        <a href="/projects/blog"><img src="/projects/all-icons/apple.svg" alt="Home"></a>

        <p>Hello, Sign up to save what you like</p>


        <form method="POST">

            <label for="name">your name</label>
            <input type="text" required name="name" maxlength="24" minlength="2" id="name">

            <label for="email">your email</label>
            <input type="email" required name="email" id="email">

            <label for="password">your password</label>
            <input type="password" required name="password" maxlength="52" minlength="6" id="password">

            <?=$error?>

            <input type="submit" value="Sign Up">
        </form>


        <a href="/projects/blog/sign-in">have an account?</a>
    </main>

</body>

</html>