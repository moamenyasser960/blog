<?php
ob_start();

include dirname(dirname(__FILE__)) . "/components/head.php";

$error = '';

try {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $name = input($_POST['name']);
        $email = input($_POST['email']);
        $message = input($_POST['message']);

        $sendMessage = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $sendMessage->bindValue(':name', $name);
        $sendMessage->bindValue(':email', $email);
        $sendMessage->bindValue(':message', $message);
        $sendMessage->execute();
        $sendMessage = null;

        header('Location: /projects/blog/?success=receive-message');

    }
} catch (PDOException $e) {
        $error = '<p>error! try again.</p>';
    
}

ob_end_flush();

?>


<!DOCTYPE html>



<html <?=$htmlTag?>>

<head>

    <title>Document</title>
    <?php include dirname(dirname(__FILE__)) . "/components/head.html"?>
</head>

<body>


    <?php include dirname(dirname(__FILE__)) . "/components/header.php"?>

    <main class="form">


        <h1>contact us</h1>
        <p>If You Have Any Questions, Feedback, Or Suggestions, Please Don't Hesitate To Contact Us.</p>


        <form method="POST">
            <label for="name">your name</label>
            <input type="text" maxlength="24" minlength="2" name="name" id="name">

            <label for="email">your email</label>
            <input type="email" name="email" id="email">

            <label for="message">your message</label>
            <textarea name="message" id="message" required minlength='16' maxlength='4200'></textarea>

            <input type="submit" value="Send">
        </form>

        <section>
            <p>you can contact us by:</p>
            <p><a href="tel:01211451295"><img src="/projects/all-icons/phone (copy).svg" alt="Phone"> 01211451295</a>
            </p>
            <p><a href="mailto:moamenyasser960@gmail.com"><img src="/projects/all-icons/envelope.svg" alt="Email">
                    moamenyasser960@gmail.com</a></p>
            <p><a href="https://maps.app.goo.gl/KaPvDVBanRWxhwxE8"><img src="/projects/all-icons/location-dot.svg"
                        alt="Location"> Al Awayed, Alexandria, Egypt.</a></p>
        </section>


    </main>


    <?php include dirname(dirname(__FILE__)) . "/components/footer.html"?>
</body>

</html>