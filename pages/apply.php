<?php $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("تقديم الطلب عبر الإنترنت","Apply online","Postuler en ligne");
    title_page($title)
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
            <hr class="section-title-line">
            <h2 class="capitalize section-title">
                <?php echo (($lang == 'ar') ? 'تقديم الطلب' : (($lang == 'en') ? 'Apply online' : 'Postuler en ligne')); ?>
            </h2>
        </div>
        <div class="row">
            <div class="form-container">
                <form class="form" action="/pages/apply?lang=<?php echo $lang ?>" method="POST">
                    <div class="form-group">
                        <label
                            for="fullname"><?php echo (($lang == 'ar') ? "الاسم الكامل" : (($lang == 'en') ? "Full Name" : "Nom complet")); ?></label>
                        <input name="fullname" required="" type="text" class="form-control" id="fullname">
                    </div>
                    <div class="form-group">
                        <label
                            for="birth"><?php echo (($lang == 'ar') ? "تاريخ الولادة" : (($lang == 'en') ? "Date of Birth" : "Date de naissance")); ?></label>
                        <input name="birth" required="" type="date" class="form-control" id="birth">
                    </div>
                    <div class="form-group">
                        <label
                            for="nationality"><?php echo (($lang == 'ar') ? "جنسية" : (($lang == 'en') ? "Nationality" : "Nationalité")); ?></label>
                        <input name="nationality" required="" type="text" class="form-control" id="nationality">
                    </div>
                    <div class="form-group">
                        <label
                            for="address"><?php echo (($lang == 'ar') ? "عنوان" : (($lang == 'en') ? "Address" : "Adresse")); ?></label>
                        <input name="address" required="" type="text" class="form-control" id="address">
                    </div>
                    <div class="form-group">
                        <label
                            for="country"><?php echo (($lang == 'ar') ? "بلد" : (($lang == 'en') ? "Country" : "Pays")); ?></label>
                        <select class="form-control" data-live-search="true" data-show-subtext="true" name="country"
                            id="country">
                        </select>
                    </div>
                    <div class="form-group">
                        <label
                            for="email"><?php echo (($lang == 'ar') ? "البريد الإلكتروني" : (($lang == 'en') ? "Email" : "Email")); ?></label>
                        <input name="email" required="" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label
                            for="passport"><?php echo (($lang == 'ar') ? "رقم جواز السفر" : (($lang == 'en') ? "Passport number" : "Numéro de passeport")); ?></label>
                        <input name="passport" required="" type="number" class="form-control" id="passport">
                    </div>
                    <div class="form-group">
                        <label
                            for="phone"><?php echo (($lang == 'ar') ? "رقم الهاتف" : (($lang == 'en') ? "Phone number" : "Numéro de téléphone")); ?></label>
                        <input name="phone" required="" type="text" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label
                            for="university"><?php echo (($lang == 'ar') ? "جامعة من اختيارك" : (($lang == 'en') ? "University of your choice" : "Université de votre choix")); ?></label>
                        <input name="university" required="" type="text" class="form-control" id="university">
                    </div>
                    <div class="form-group">
                        <label
                            for="program"><?php echo (($lang == 'ar') ? "البرنامج الذي تنوي الدراسة" : (($lang == 'en') ? "Program you intend to study" : "Programme que vous avez l'intention d'étudier")); ?></label>
                        <input name="program" required="" type="text" class="form-control" id="program">
                    </div>
                    <div class="form-group">
                        <label
                            for="educ-bg"><?php echo (($lang == 'ar') ? "خلفية تعليمية" : (($lang == 'en') ? "Educational background" : "Formation")); ?></label>
                        <textarea name="educ-bg" required="" class="form-control" id="educ-bg" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit"
                            class="btn btn-send dark-blue btn-primary uppercase"><strong><?php echo (($lang == 'ar') ? "تقديم الطلب" : (($lang == 'en') ? "Apply online" : "Postuler en ligne")); ?></strong></button>
                    </div>
                </form>
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
    $subject    = "Application";
    $headers    = "";
    $headers    .= 'From: Application - ' . $_POST['fullname'] . ' : ' . $_POST['email'] . "\r\n";
    $headers    .= 'Reply-To: studyabroad@rae.ma' . "\r\n";
    $headers    .= "Return-Path: " . $_POST['fullname'] . ' : ' . $_POST['email'] . "\r\n";
    $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers    .= "MIME-Version: 1.0\r\n";
    $headers    .= 'X-Mailer: PHP/' . phpversion();
    
    $message    ='
    <html>
        <head>
            <style>
                table{
                    text-align: left;
                    margin: 20px auto;
                    width: 50%;
                    max-width: 100%;
                    border-collapse: collapse !important;
                    border-bottom: 1px solid #ddd;
                }
                table td,
                table th {
                    background-color: #fff !important;
                }
                table > thead > tr > th,
                table > tbody > tr > th,
                table > thead > tr > td,
                table > tbody > tr > td{
                    padding: 8px;
                    line-height: 1.42857143;
                    vertical-align: top;
                    border-top: 1px solid #ddd;
                }
            </style>
        </head>
        <body>
                <table class="table">
                    <tbody>
                        <tr><td>Full name :</td><td>' . $_POST['fullname'].'</td></tr>
                        <tr><td>Email : </td><td>' . $_POST['email'].'</td></tr>
                        <tr><td>Program : </td><td>' . $_POST['program'].'</td></tr>
                        <tr><td>University : </td><td>' . $_POST['university'].'</td></tr>
                        <tr><td>Education background : </td><td>' . $_POST['educ-bg'].'</td></tr>
                        <tr><td>Passport : </td><td>' . $_POST['passport'].'</td></tr>
                        <tr><td>Phone : </td><td>' . $_POST['phone'].'</td></tr>
                        <tr><td>Address : </td><td>' . $_POST['address'].'</td></tr>
                        <tr><td>Country : </td><td>' . $_POST['country'].'</td></tr>
                        <tr><td>Nationality : </td><td>' . $_POST['nationality'].'</td></tr>
                        <tr><td>Birth : </td><td>' . $_POST['birth'].'</td></tr>
                    </tbody>
                </table>
        </body>
        </html>';
    
    // $message    = '<p>Full name : ' . $_POST['fullname'].'</p>';
    // $message    .= '<p>Email : ' . $_POST['email'].'</p>';
    // $message    .= '<p>Program : ' . $_POST['program'].'</p>';
    // $message    .= '<p>University : ' . $_POST['university'].'</p>';
    // $message    .= '<p>Education background : ' . $_POST['educ-bg'].'</p>';
    // $message    .= '<p>Passport : ' . $_POST['passport'].'</p>';
    // $message    .= '<p>Phone : ' . $_POST['phone'].'</p>';
    // $message    .= '<p>Address : ' . $_POST['address'].'</p>';
    // $message    .= '<p>Country : ' . $_POST['country'].'</p>';
    // $message    .= '<p>Nationality : ' . $_POST['nationality'].'</p>';
    // $message    .= '<p>Birth : ' . $_POST['birth'].'</p>';
    if(mail($to, $subject, $message, $headers)){
        include $path.'/layouts/modal.php';
        $message = $lang == 'ar' ? 'تم إرسال طلبك بنجاح' : (($lang == 'en') ? 'Your Application has been successfully sent' : 'Votre demande a été envoyée avec succès');
        modal_message($message, true);
    } else {
        include $path.'/layouts/modal.php';
        $message =  $lang == 'ar' ? 'لم يتم إرسال طلبك' : (($lang == 'en') ? 'Your Application has not been sent' : 'Votre demande n\'a pas été envoyé');
        modal_message($message, false);
    }

}