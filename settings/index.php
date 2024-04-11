<?php
ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$error = '';

try {

    if ($isLog) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = input($_POST['name']);
            $email = input($_POST['email']);
            $password = input($_POST['password']);

            $showUser = $conn->prepare("SELECT id FROM user WHERE email=:email AND email!=:prevEmail");
            $showUser->bindValue(':email', $email);
            $showUser->bindValue(':prevEmail', $userEmail);
            $showUser->execute();

            if (isset($showUser->fetch()['id'])) {
                $error = '<p>you cannot use this email! try again.</p>';
            } else {
                $editUser = $conn->prepare("UPDATE user SET name=:name , email=:email , password=:password WHERE email=:prevEmail AND password=:prevPassword");

                $editUser->bindValue(':name', $name);
                $editUser->bindValue(':email', $email);
                $editUser->bindValue(':password', $password);

                $editUser->bindValue(':prevEmail', $userEmail);
                $editUser->bindValue(':prevPassword', $userPassword);

                $editUser->execute();

                $editUser = null;

                setcookie("munch-email", $email, time() + (24 * 60 * 60) * 365, "/");
                setcookie("munch-password", $password, time() + (24 * 60 * 60) * 365, "/");
                setcookie("munch-name", $name, time() + (24 * 60 * 60) * 365, "/");

                header('Location: /projects/blog/?success=settings');

            }
        }

        $showUser = $conn->prepare("SELECT name, email, password FROM user WHERE email=:email AND password=:password");
        $showUser->bindValue(':email', $userEmail);
        $showUser->bindValue(':password', $userPassword);
        $showUser->execute();
        $showedUser = $showUser->fetch();

    } else {
        echo 'no';
        header('Location: /projects/blog/sign-in/?message=required');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    $error = '<p>error! try again.</p>';

}
$showUser = null;
$editUser = null;

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

    <main id="settings" class="form">

        <h1>settings</h1>

        <form method="POST">

            <label for="name">your name</label>
            <input type="text" required value="<?=$showedUser['name']?>" maxlength="24" minlength="2" name="name"
                id="name">

            <label for="email">your email</label>
            <input type="email" required value="<?=$showedUser['email']?>" minlength='16' name="email" id="email">

            <label for="password">your password</label>
            <input type="password" required value="<?=$showedUser['password']?>" maxlength="52" minlength="6"
                name="password" id="password">

            <?=$error?>

            <input type="submit" value="Submit">
        </form>



        <!--
            name
            email
            password
            notifications

            submit
         -->


    </main>

    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>

</body>

</html>