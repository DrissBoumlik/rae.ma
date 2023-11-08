<?php $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("خدماتنا", "our services","NOS SERVICES");
    title_page($title, 2)
?>


<?php include $path.'/layouts/feature.php';
        $txt = "NOS SERVICES";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("NOS SERVICES", "خدماتنا", "our services");
        }
        feature_txt($txt, "");
?>
    
    <div class="section our-services">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title"><?php echo (($lang == 'ar') ? 'خدماتنا' : (($lang == 'en') ? 'our services' : 'NOS SERVICES')); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="service-items list-group">
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التوجيه المهني للمرشحين والمشاورات حول الدراسات في أوكرانيا / روسيا ، النظام التعليمي ، الدورات التدريبية المتاحة ، طرق التسجيل في الجامعات الأوكرانية / الروسية ، ظروف الإقامة والحياة اليومية للطلاب' : (($lang == 'en') ? 'Professional orientation of candidates and consultants of student associations in Ukraine / Russia, educational systems, available capacities, registration procedures, names of universities and associations, condolences of candidates.' : 'Orientation professionnelle des candidats et consultations sur les études en Ukraine/Russie, le système éducatif, les formations disponibles, les modalités des inscriptions aux universités Ukrainiennes/Russes, les conditions d’hébergement et la vie quotidienne des étudiants;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'طلب الدعوة إلى الجامعة' : (($lang == 'en') ? 'The invitation request to the university' : 'La demande d’invitation à l’université;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التشاور والمساعدة في إعداد الملف لتأشيرة الطلاب' : (($lang == 'en') ? 'Consultation and assistance in preparing the file for the student visa;' : 'Consultation et assistance en préparation du dossier pour l’obtention du visa étudiant;')); ?></li>
                        <li class="list-group-item nb"><?php echo (($lang == 'ar') ? 'استقبال الطلاب في مطار الوصول ، وتنظيم النقل إلى المدينة التي تقع فيها الجامعة ؛<br><p class=""><span class="alert alert-danger">ملحوظة :</span> دعنا نعرف تاريخ سفرك ووقت وصولك ونقطة وصولك ومعلومات أخرى حول رحلتك. سوف نرحب بك في المطار. لذلك ، يجب عليك إبلاغنا بخطط سفرك قبل أسبوع واحد على الأقل من مغادرتك. يمكنك أن تمنع دخول أوكرانيا / روسيا إذا لم يكن أحد يتوقع منك. هذه واحدة من شروط التذكرة المفتوحة لسنة واحدة ، لذا لا تحاول اللعب مع القواعد !!!!' : (($lang == 'en') ? 'Reception of students at the airport of arrival, the organization of the transfer to the city where the university is located;<br><p class=""><span class="alert alert-danger">NB :</span> Let us know your date of travel, your arrival time, your arrival point and other information about your flight. We will welcome you at the airport. Therefore, you must inform us of your travel plans at least one week before your departure. You can be denied entry into Ukraine / Russia if no one is expecting you. This is one of the conditions of your open ticket of one year, so do not try to play with the rules !!!!' : 'Accueil des étudiants à l’aéroport d’arrivée, l’organisation du transfert jusqu’à la ville où se trouve l’université;<br><p class=""><span class="alert alert-danger">NB :</span> Informez-nous de votre date de voyage, votre heure d’arrivée, votre point d’arrivée ainsi que les autres informations concernant votre vol.  Nous vous accueillerons à l’aéroport.  C’est pourquoi, vous devez nous informer de vos plans de voyage au moins une semaine avant votre départ.  Vous pouvez vous faire refuser l’entrée en Ukraine/Russie si personne ne vous y attend.  C’est une des conditions de votre billet ouvert d’un an, alors n’essayez pas de jouer avec les règles !!!!</p>')); ?>
                        
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'ضمان الإقامة في الحرم الجامعي (من 2 إلى 3 طلاب كحد أقصى) طوال فترة الدراسة ؛' : (($lang == 'en') ? 'Guarantee of accommodation on university campus (2 to 3 students max.) For the entire period of study;' : 'Garantie de l’hébergement à campus universitaire (2 à 3 étudiants au max.) pour toute la période des études;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التأمين الطبي والتأمين ضد الهجرة غير الشرعية ؛' : (($lang == 'en') ? 'Medical insurance and insurance against illegal immigration;' : 'L’assurance médicale et l’assurance contre l’immigration illégale;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التشاور والمساعدة في إعداد ملف المتابعة الأكاديمية ؛' : (($lang == 'en') ? 'Consultation and assistance in the preparation of the file for the academic follow-up;' : 'Consultation et assistance en préparation du dossier pour le suivi académique;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التواصل مع أولياء الأمور ومعلوماتهم حسب الطلب ؛' : (($lang == 'en') ? 'Communication with parents and their information on demand;' : 'Communication avec les parents et leur donner des informations à la demande;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'متابعة ، مساعدة ، خدمات مصالح ، مساعدة من أي نوع أثناء الدراسات في أوكرانيا / روسيا.' : (($lang == 'en') ? 'Follow-up, assistance, services of interests, help of any kind during studies in Ukraine / Russia.' : 'Suivi, assistance, services des intérêts, aide de toute sorte pendant les études en Ukraine/Russie;')); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'إصدار شهادات مدرسية سنوية لآباء الطلاب لتسهيل تحويل النقود.' : (($lang == 'en') ? 'The issuance of school certificates annually to students\'s parents to facilitate the transfer of money.' : 'La délivrance des certificats de scolarité annuellement aux parents des étudiants en vue de faciliter les modalités de transfert d’argent;')); ?></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>