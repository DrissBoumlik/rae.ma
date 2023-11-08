<?php $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text( "تواصل معنا", "Contact","Contact");
    title_page($title,7)
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
            <div class="contact-form col-md-12 col-sm-12">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title">
                        <?php echo (($lang == 'ar') ? 'تواصل معنا' : (($lang == 'en') ? 'contact' : 'contact')); ?>
                    </h2>
                </div>
                <div class="form-container">
                    <form class="form" action="/pages/contact.php?lang=<?php echo $lang ?>" method="POST">
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
        </div>
        <hr>
        <div class="row">
            <div class="contact-infos col-md-12 col-sm-12">
                <div class="infos">
                        <div class="hours">
                            <h3><?php echo (($lang == 'ar') ? 'ساعات العمل' : (($lang == 'en') ? 'Working Hours' : 'Heures de travail')); ?></h3>
                            <label><i class="fas fa-clock"></i><span><?php echo (($lang == 'ar') ? '18h - 9h : الاثنين - الجمعة' : (($lang == 'en') ? 'Monday-Friday: 9h - 18h' : 'Lundi-vendredi: 9h - 18h')); ?></span></label><br>
                            <label><i class="fas fa-at"></i><span><?php echo (($lang == 'ar') ? '7 شارع بينزيرتي ، الطابق الثالث ، حسان الرباط ، المغرب' : (($lang == 'en') ? '7 BENZERTE STREET, 3RD FLOOR, HASSAN RABAT, MOROCCO' : '7 RUE BENZERTE, 3 EME ETAGE, HASSAN RABAT, MAROC')); ?></span></label>
                        </div>
                        <hr>
                        <div class="contact">
                            <h3><?php echo (($lang == 'ar') ? 'اتصل بنا' : (($lang == 'en') ? 'Contact us' : 'Contactez Nous')); ?></h3>
                            <label><i class="fas fa-phone"></i><span>212-666-030-081 | 212-662-187-074</span></label><br>
                            <label><i class="fas fa-envelope"></i><span>studyabroad@rae.ma</span></label>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
<?php

    if(isset($_POST['email'])){
        $to         = "studyabroad@rae.ma";
        $subject    = $_POST['subject'];
        $message = '<p>'.$_POST['message'].'</p>';
        $headers    = "";
        $headers    .= 'From: Contact - ' . $_POST['name'] . ' : ' . $_POST['email'] . "\r\n";
        $headers    .= 'Reply-To: studyabroad@rae.ma' . "\r\n";
        $headers    .= "Return-Path: " . $_POST['name'] . ' : ' . $_POST['email'] . "\r\n";
        $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers    .= "MIME-Version: 1.0\r\n";
        $headers    .= 'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers)){
            include $path.'/layouts/modal.php';
            $message = $lang == 'ar' ? 'لقد تم إرسال رسالتك' : (($lang == 'en') ? 'Your message has been sent' : 'Votre message à bien été envoyé');
            modal_message($message, true);
        } else {
            include $path.'/layouts/modal.php';
            $message =  $lang == 'ar' ? 'لم يتم إرسال رسالتك' : (($lang == 'en') ? 'Your message has not been sent' : 'Votre message n\'a pas été envoyé');
            modal_message($message, false);
        }
    }