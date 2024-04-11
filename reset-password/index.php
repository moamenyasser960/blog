
    <?php include dirname(dirname(__FILE__)) . "/components/head.php"?>

<!DOCTYPE html>



<html <?=$htmlTag?>>

<head>

    <?php include dirname(dirname(__FILE__)) . "/components/head.html"?>
    <title>Document</title>
</head>

<body id="sign-in">

    <main class="form">
        
        <a href="/projects/blog"><img src="/projects/all-icons/apple.svg" alt="Home"></a>

        <p>We will send you a number to your email</p>

        <form>
            <label for="email">your email</label>
            <input type="email" required id="email">

            <input type="submit" value="Submit">
        </form>

        <!-- <p>Check your email to see the number we sent you</p>

        <form>
            <label for="num">the number <a href="/projects/blog/reset-password/">send again</a></label>
            <input type="text" required id="num">

            <input type="submit" value="Submit">
        </form> -->

        
        <!-- <p>now reset your password</p>

        <form>
            <label for="password">New Password</label>
            <input type="password" required id="password">

            <input type="submit" value="Submit">
        </form> -->

    </main>

</body>

</html>