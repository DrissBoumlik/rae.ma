<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Contact')
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "contact";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("contact", "التواصل", "contact");
    }
    feature_txt($txt, "contact");
?>
    <div class="contact-us">
        <div class="">
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
                            <div class="hours">
                                <h3>heures de travail:</h3>
                                <label><i class="fas fa-clock"></i>Lundi-vendredi: 9h à 18h</label><br>
                                <label><i class="fas fa-at"></i>7 RUE BENZERTE, 3 EME ETAGE, HASSAN RABAT, MAROC</label>
                            </div>
                            <hr>
                            <div class="contact">
                                <h3>contactez Nous:</h3>
                                <label><i class="fas fa-phone"></i>+212-700 175 747 | +212-680 201 404</label><br>
                                <label><i class="fas fa-envelope"></i>studyabroad@rae.ma</label>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php //include $path.'/layouts/sidebar.php'; ?> -->
<?php include $path.'/layouts/footer.php' ?>
<?php
if(isset($_POST['email'])){
    $to         = "boumlik.t@gmail.com";
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    $headers    = 'From: ' . $_POST['name'] . ' : ' . $_POST['email'] . "\r\n" .
        'Reply-To: boumlik.t@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)){
        include 'layouts/modal.php';
        modal_message('Votre message à bien été envoyé');
    }       

}