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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
    rel="stylesheet" />
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
                <form class="form" action="/pages/apply.php" method="POST">
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
<?php include $path.'/layouts/footer.php' ?>

<?php
if(isset($_POST['email'])){
    $to         = "drissboumlik.test@gmail.com";
    $subject    = "Application";
    $headers    = "";
    $headers    .= 'From: Application - ' . $_POST['fullname'] . ' : ' . $_POST['email'] . "\r\n";
    $headers    .= 'Reply-To: drissboumlik.test@gmail.com' . "\r\n";
    $headers    .= "Return-Path: " . $_POST['fullname'] . ' : ' . $_POST['email'] . "\r\n";
    $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers    .= "MIME-Version: 1.0\r\n";
    $headers    .= 'X-Mailer: PHP/' . phpversion();
    
    $message    ='<table class="table">
            <thead></thead>
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
        </table>';
    
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
        include 'layouts/modal.php';
        modal_message('Votre Application à bien été envoyé');
    }       

}