<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sender = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "";
    $mailFrom = "From: ".$sender;
    $content = "You have an email from ".$name.".\n".$subject.".\n\n".$message;

    mail($mailTo, $mailFrom, $content);
    header("Location: index.php?mailsend");
}