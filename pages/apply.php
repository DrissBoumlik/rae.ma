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
                <form class="form" action="/pages/apply.php" method="POST">
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "الاسم الكامل" : (($lang == 'en') ? "Full Name" : "Nom complet")); ?></label>
                        <input name="fullname" required="" type="text" class="form-control" id="fullname" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "تاريخ الولادة" : (($lang == 'en') ? "Date of Birth" : "Date de naissance")); ?></label>
                        <input name="birth" required="" type="date" class="form-control" id="birth" >
                    </div> 
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "جنسية" : (($lang == 'en') ? "Nationality" : "Nationalité")); ?></label>
                        <input name="nationality" required="" type="text" class="form-control" id="nationality" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "عنوان" : (($lang == 'en') ? "Address" : "Adresse")); ?></label>
                        <input name="address" required="" type="text" class="form-control" id="address" >
                    </div>       
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "بلد" : (($lang == 'en') ? "Country" : "Pays")); ?></label>
                        <select class="form-control" name="country" id="country">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "البريد الإلكتروني" : (($lang == 'en') ? "Email" : "Email")); ?></label>
                        <input name="email" required="" type="email" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "رقم جواز السفر" : (($lang == 'en') ? "Passport number" : "Numéro de passeport")); ?></label>
                        <input name="passport" required="" type="number" class="form-control" id="passport" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "رقم الهاتف" : (($lang == 'en') ? "Phone number" : "Numéro de téléphone")); ?></label>
                        <input name="phone" required="" type="text" class="form-control" id="phone" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "جامعة من اختيارك" : (($lang == 'en') ? "University of your choice" : "Université de votre choix")); ?></label>
                        <input name="university" required="" type="text" class="form-control" id="university" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "البرنامج الذي تنوي الدراسة" : (($lang == 'en') ? "Program you intend to study" : "Programme que vous avez l'intention d'étudier")); ?></label>
                        <input name="program" required="" type="text" class="form-control" id="program" >
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo (($lang == 'ar') ? "خلفية تعليمية" : (($lang == 'en') ? "Educational background" : "Formation")); ?></label>
                        <textarea name="educ-bg" required="" class="form-control" id="educ-bg"  rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-send dark-blue btn-primary uppercase"><strong><?php echo (($lang == 'ar') ? "تقديم الطلب" : (($lang == 'en') ? "Apply online" : "Postuler en ligne")); ?></strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>