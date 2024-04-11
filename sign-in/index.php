<?php
ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $email = input($_POST["email"]);
        $password = input($_POST["password"]);

        $checkUser = $conn->prepare("SELECT name FROM user WHERE email=:e AND password=:p");
        $checkUser->bindParam(':e', $email);
        $checkUser->bindParam(':p', $password);
        $checkUser->execute();

        $showUser = $checkUser->fetch();

        if (is_array($showUser)) {

            if (isset($showUser['name'])) {

                $name = $showUser['name'];

                if (isset($_POST["remember"])) {
                    setcookie("munch-name", $name, time() + (24 * 60 * 60) * 365, "/");
                    setcookie("munch-email", $email, time() + (24 * 60 * 60) * 365, "/");
                    setcookie("munch-password", $password, time() + (24 * 60 * 60) * 365, "/");
                } else {
                    setcookie("munch-name", $name, time() + (24 * 60 * 60), "/");
                    setcookie("munch-email", $email, time() + (24 * 60 * 60), "/");
                    setcookie("munch-password", $password, time() + (24 * 60 * 60), "/");
                }

                header('Location: /projects/blog/?success=sign-in');

            }
        } else {
            $checkUser = $conn->prepare("SELECT name FROM user WHERE email=:e");
            $checkUser->bindParam(':e', $email);
            $checkUser->execute();

            if ($showUser) {
                $error = "<p>the password is not valid</p>";
            } else {
                $error = "<p>you don't have an account, <br><a href='/projects/blog/sign-up'>create one</a> or try again</p>";
            }
        }

    } catch (PDOException $e) {

        $error = '<p>error! try again.</p>';

    }
}

$checkUser = null;

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

        <p>welcome back, Sign in or <br><a href="/projects/blog/sign-up">create an account</a></p>

        <form method="POST">
            <label for="email">your email</label>
            <input type="email" name="email" required id="email">

            <label for="password">your password <a href="/projects/blog/reset-password/">forgot?</a></label>
            <input type="password" name="password" required id="password">

            <?=$error?>

            <label><input type="checkbox" name="remember" value="on"> remember me</label>

            <input type="submit" value="Submit">
        </form>


    </main>

    <?php
if (isset($_GET['message'])) {

    if (input($_GET['message']) == 'required') {
        echo '<p class="alert-success">you need to sign in first!</p>';
    }
}
?>

</body>

</html>