
<?php
if(isset($_POST['email'])){
    $to         = "boumlik.t@gmail.com";
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    $headers    = 'From: ' . $_POST['name'] . ' : ' . $_POST['email'] . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    wp_mail($to, $subject, $message, $headers);
    //mail($to, $subject, $message, $headers);
}