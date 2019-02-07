<?php include 'layouts/header.php' ?>
    
<?php include 'layouts/feature.php';
    feature_txt("contact");
?>
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-container">
                        <form class="form" action="/contact.php" method="POST">
                            <div class="form-group">
                                <input name="name" required="" type="text" class="form-control" id="contact-name" placeholder="name">
                            </div>
                            <div class="form-group">
                                <input name="email" required="" type="email" class="form-control" id="contact-email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input name="subject" required="" type="text" class="form-control" id="contact-subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="" class="form-control" id="contact-message" placeholder="Message" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-send dark-blue btn-primary uppercase"><strong>Send</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="infos">
                        <div class="">
                            <label>RUSSIAN OFFICE</label><br>
                            <label>Edugain Overseas</label><br>
                            <label>Obolenskiy lane, 10, Moscow, Russia</label><br>
                            <label>Ph: +7 910 7416141.</label><br>
                            <label>Email: edugain@edugainoverseas.com</label><br>
                            <label>Web-site: www.edugainoverseas.com</label><br>
                        </div>
                        <hr>
                        <div class="">
                            <label>UKRAINIAN OFFICE</label><br>
                            <label>Edugain Overseas</label><br>
                            <label>Mahnitohorska St, 1, Kyiv, Ukraine</label><br>
                            <label>Ph: +380 63 5738997.</label><br>
                            <label>Email: edugain@edugainoverseas.com</label><br>
                            <label>Web-site: www.edugainoverseas.com</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layouts/footer.php' ?>
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