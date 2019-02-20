<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Postuler en ligne')
?>

<?php include $path.'/layouts/feature.php';
    $txt = "Postuler en ligne";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Postuler en ligne", "تقديم الطلب", "Apply online");
    }
    feature_txt($txt, "apply online");
?>

<div class="apply">
    <div class="">
        <div class="row">
            <div class="form-container">
                <form class="form" action="/contact.php" method="POST">
                    <div class="form-group">
                        <input name="fullname" required="" type="text" class="form-control" id="fullname" placeholder="Nom Complet">
                    </div>
                    <div class="form-group">
                        <input name="birth" required="" type="date" class="form-control" id="birth" placeholder="Date de naissance">
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
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>