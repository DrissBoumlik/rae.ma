<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Contact',7)
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "contact";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("contact", "تواصل معنا", "contact");
    }
    feature_txt($txt, "contact");
?>
    <div class="contact-us">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-container">
                        <form class="form" action="/pages/contact.php" method="POST">
                            <div class="form-group">
                                <input name="name" required="" type="text" class="form-control" id="contact-name" placeholder="<?php echo (($lang == 'ar') ? 'الإسم' : (($lang == 'en') ? 'Name' : 'Nom')); ?>">
                            </div>
                            <div class="form-group">
                                <input name="email" required="" type="email" class="form-control" id="contact-email" placeholder="<?php echo (($lang == 'ar') ? 'البريد الإلكتروني' : (($lang == 'en') ? 'Email' : 'Email')); ?>">
                            </div>
                            <div class="form-group">
                                <input name="subject" required="" type="text" class="form-control" id="contact-subject" placeholder="<?php echo (($lang == 'ar') ? 'موضوع' : (($lang == 'en') ? 'Subject' : 'Sujet')); ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="" class="form-control" id="contact-message" placeholder="<?php echo (($lang == 'ar') ? 'رسالة' : (($lang == 'en') ? 'Message' : 'Message')); ?>" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-send dark-blue btn-primary uppercase"><strong><?php echo (($lang == 'ar') ? 'أرسل' : (($lang == 'en') ? 'Send' : 'Envoyer')); ?></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="infos">
                            <div class="hours">
                                <h3><?php echo (($lang == 'ar') ? 'ساعات العمل' : (($lang == 'en') ? 'Working Hours' : 'Heures de travail')); ?></h3>
                                <label><i class="fas fa-clock"></i><span><?php echo (($lang == 'ar') ? '18h - 9h : الاثنين - الجمعة' : (($lang == 'en') ? 'Monday-Friday: 9h - 18h' : 'Lundi-vendredi: 9h - 18h')); ?></span></label><br>
                                <label><i class="fas fa-at"></i><span><?php echo (($lang == 'ar') ? '7 شارع بينزيرتي ، الطابق الثالث ، هاسان الرباط ، المغرب' : (($lang == 'en') ? '7 BENZERTE STREET, 3RD FLOOR, HASSAN RABAT, MOROCCO' : '7 RUE BENZERTE, 3 EME ETAGE, HASSAN RABAT, MAROC')); ?></span></label>
                            </div>
                            <hr>
                            <div class="contact">
                                <h3><?php echo (($lang == 'ar') ? 'اتصل بنا' : (($lang == 'en') ? 'Contact us' : 'Contactez Nous')); ?></h3>
                                <label><i class="fas fa-phone"></i><span>212-700-175-747 | 212-680-201-404</span></label><br>
                                <label><i class="fas fa-envelope"></i><span>studyabroad@rae.ma</span></label>
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