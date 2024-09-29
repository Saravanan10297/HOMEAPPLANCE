<?php
session_start();
?>

<html>
<head>
    <title>Send mail</title>
    <body>
        <form class="" action="mail.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" value=""><br>
                <label>Subject:</label>
                <input type="text" name="subject" value=""><br>
                 Message:   <input type="text" name="message" value=""><br>
                    <button type="submit" name="send">SEND</button>
                    

        </form>
    </body>
</head>