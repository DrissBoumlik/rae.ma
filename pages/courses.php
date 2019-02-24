<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text( "الدورات", "Courses", "Cours");
    title_page($title)
?>

<?php include $path.'/layouts/feature.php';
    $txt = "Cours";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Cours", "الدورات", "Courses");
    }
    feature_txt($txt, "courses");
?>

<div class="section courses diplomas">
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "الدروس :" : (($lang == 'en') ? "Course:" : "Cours :")); ?></h2>
    </div>
    <div class="row">
        <h3 class="section-title"><?php echo (($lang == 'ar') ? "مجال طبي" : (($lang == 'en') ? "MEDICAL DOMAIN" : "DOMAINE MÉDICAL")); ?></h3>
    </div>
    <div class="row">
        <div class="_container">
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "طب عام" : (($lang == 'en') ? "General medicine" : "Médecine générale")); ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "6 سنوات" : (($lang == 'en') ? "6 years" : "6 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "دكتوراه في الطب (دكتور في الطب / بكالوريوس طب وجراحة)" : (($lang == 'en') ? "MD (Doctor of Medicine / MBBS)" : "MD (Doctor of Medicine / MBBS)")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "طب الأسنان" : (($lang == 'en') ? "Dentistry" : "Dentisterie")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "5 سنوات" : (($lang == 'en') ? "5 years" : "5 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "دكتوراه في الطب (دكتور في الطب / بكالوريوس طب وجراحة)" : (($lang == 'en') ? "MD (Doctor of Medicine / MBBS)" : "MD (Doctor of Medicine / MBBS)")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "طب الأطفال" : (($lang == 'en') ? "pediatrics" : "Pédiatrie")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "6 سنوات" : (($lang == 'en') ? "6 years" : "6 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "دكتوراه في الطب (دكتور في الطب / بكالوريوس طب وجراحة)" : (($lang == 'en') ? "MD (Doctor of Medicine / MBBS)" : "MD (Doctor of Medicine / MBBS)")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "صيدلية" : (($lang == 'en') ? "Pharmacy" : "Pharmacie")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "5 سنوات" : (($lang == 'en') ? "5 years" : "5 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "دكتوراه في الطب (دكتور في الطب / بكالوريوس طب وجراحة)" : (($lang == 'en') ? "MD (Doctor of Medicine / MBBS)" : "MD (Doctor of Medicine / MBBS)")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "التمريض" : (($lang == 'en') ? "INFIRMARY" : "INFIRMERIE")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "5 سنوات" : (($lang == 'en') ? "5 years" : "5 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "دكتوراه في الطب (دكتور في الطب / بكالوريوس طب وجراحة)" : (($lang == 'en') ? "MD (Doctor of Medicine / MBBS)" : "MD (Doctor of Medicine / MBBS)")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "تدريب ما بعد الدكتوراه / الإقامة السريرية" : (($lang == 'en') ? "Postdoctoral Training / Clinical Residence" : "Formation postdoctorale / résidence clinique")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "مدة" : (($lang == 'en') ? "Duration" : "Durée")); ?>
                                        </div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "2-3 سنوات" : (($lang == 'en') ? "2-3 years" : "2-3 ans")); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "دبلوم الصادر" : (($lang == 'en') ? "Diploma issued" : "Diplôme délivré")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الدراسات ما بعد الدكتوراه / عيادة العيادة في المجال المطلوب" : (($lang == 'en') ? "Postdoctoral Studies / Clinic Residency in the Required Field" : "Études postdoctorales / Résidence en clinique dans le domaine requis")); ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-5">
                                            <?php echo (($lang == 'ar') ? "لغة التعليم" : (($lang == 'en') ? "Education language" : "Langue d'enseignement")); ?></div>
                                        <div class="col-md-7 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                            <?php echo (($lang == 'ar') ? "الإنجليزية / الروسية / الأوكرانية" : (($lang == 'en') ? "English / Russian / Ukrainian" : "anglais / russe / ukrainien")); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3 class="section-title"><?php echo (($lang == 'ar') ? "المجال التقني" : (($lang == 'en') ? "TECHNICAL AREA" : "DOMAINE TECHNIQUE")); ?></h3>
    </div>
    <div class="row">
        <div class="_container">
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize"><?php echo (($lang == 'ar') ? "الطيران / الملاحة الجوية" : (($lang == 'en') ? "AVIATION / AERONAUTICS" : "AVIATION / AERONAUTIQUE")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة الطيران" : (($lang == 'en') ? "Aeronautical engineering" : "Ingénierie aéronautique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة الصواريخ" : (($lang == 'en') ? "Rocket engineering" : "Ingénierie des fusées")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الكترونيات الطيران" : (($lang == 'en') ? "Avionics" : "Avionique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة المطار" : (($lang == 'en') ? "Airport Management" : "Gestion d'aéroport")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة الفضاء الجوي" : (($lang == 'en') ? "Aerospace management" : "Gestion aérospatiale")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة المطار وأوامر الطيران" : (($lang == 'en') ? "Airport Management and Flight Orders" : "Gestion des aéroports et des commandes de vol")); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "الكمبيوتر / تكنولوجيا المعلومات / الاتصالات:" : (($lang == 'en') ? "COMPUTER / IT / TELECOM:" : "ORDINATEUR / IT / TELECOM:")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة الكمبيوتر" : (($lang == 'en') ? "Engineering computer Science" : "Ingénierie informatique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "علوم الكمبيوتر" : (($lang == 'en') ? "Computer Sciences" : "Sciences informatiques")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "نظم الكمبيوتر والشبكات" : (($lang == 'en') ? "Computer systems and networks" : "Systèmes informatiques et réseaux")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "معالجة المعلومات" : (($lang == 'en') ? "data processing" : "Informatique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة تكنولوجيا المعلومات" : (($lang == 'en') ? "Information Technology Engineering" : "Ingénierie des technologies de l'information")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة أجهزة الكمبيوتر والبرمجيات" : (($lang == 'en') ? "Computer hardware and software engineering" : "Ingénierie du matériel informatique et des logiciels")); ?>
                                        </li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "اتصالات" : (($lang == 'en') ? "Telecommunication" : "Télécommunication")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة الاتصالات" : (($lang == 'en') ? "Telecommunications engineering" : "L'ingénierie des télécommunications")); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "مجالات الهندسة:" : (($lang == 'en') ? "FIELDS OF ENGINEERING:" : "DOMAINES D'INGÉNIERIE:")); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة الكهربائية" : (($lang == 'en') ? "Electrical engineering" : "Ingénierie électrique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة الالكترونية" : (($lang == 'en') ? "Electronic Engineering" : "Génie électronique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة الكهروميكانيكية" : (($lang == 'en') ? "Electromechanical Engineering" : "Génie Electromécanique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة الميكاترونكس" : (($lang == 'en') ? "Mechatronics Engineering" : "Génie Mécatronique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة الميكانيكية" : (($lang == 'en') ? "Mechanical engineering" : "Ingénierie mécanique")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة المدنية" : (($lang == 'en') ? "Civil Engineering" : "Génie civil")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "مهندس معماري" : (($lang == 'en') ? "Architect Engineer" : "Ingénieur architecte")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة النفط والغاز" : (($lang == 'en') ? "Oil and gas engineering" : "Ingénierie pétrolière et gazière")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة البترول" : (($lang == 'en') ? "Petroleum Engineering" : "Ingénierie pétrolière")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "التكنولوجيا الحيوية" : (($lang == 'en') ? "Biotechnology" : "Biotechnologie")); ?>
                                        </li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الطب الحيوي" : (($lang == 'en') ? "biomedical" : "Biomédical")); ?>
                                        </li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الهندسة الطبية الحيوية" : (($lang == 'en') ? "Biomedical genius" : "Génie biomédical")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "هندسة التعدين" : (($lang == 'en') ? "Mining Engineering" : "Ingénierie minière")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "جيولوجيا" : (($lang == 'en') ? "Geology" : "Géologie")); ?> </li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الجوديسيا فرع من الرياضات" : (($lang == 'en') ? "Geodesy" : "La géodésie")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "تخطيط الأراضي وإدارتها" : (($lang == 'en') ? "Land planning and management" : "Planification et gestion des terres")); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">
                                <?php echo (($lang == 'ar') ? "المناطق الاقتصادية:" : (($lang == 'en') ? "ECONOMIC AREAS:" : "ZONES ÉCONOMIQUES:")); ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "اقتصاد" : (($lang == 'en') ? "Economy" : "Économie")); ?>
                                        </li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الاقتصاد الدولي" : (($lang == 'en') ? "The international economy" : "L'économie internationale")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة الأعمال" : (($lang == 'en') ? "Business Administration" : "Administration des affaires")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة" : (($lang == 'en') ? "Management" : "La gestion")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "المحاسبة والتدقيق" : (($lang == 'en') ? "Accounting and audits" : "Comptabilité et audits")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "الأعمال المصرفية والمالية" : (($lang == 'en') ? "Bank and finance" : "Banque et Finance")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "العلاقات الاقتصادية الدولية" : (($lang == 'en') ? "International economic relations" : "Relations économiques internationales")); ?></li>
                                        <li class="list-group-item">
                                            <?php echo (($lang == 'ar') ? "إدارة الفنادق والسياحة" : (($lang == 'en') ? "Hotel and Tourism Management" : "Gestion hôtelière et touristique")); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <p class="course-txt"><?php echo (($lang == 'ar') ? "يتوفر التعليم في الجامعات الأوكرانية باللغتين الإنجليزية والروسية. إذا اخترت دورة في اللغة الروسية ، فستكون هناك حاجة إلى سنة تحضيرية لتدريس اللغة ، حيث يتعلمون الموضوعات المتعلقة بخيارهم في الدراسة. لذا ، بالنسبة لطلاب الطب ، يتعلمون علم الأحياء والكيمياء والفيزياء الحيوية وما إلى ذلك." : (($lang == 'en') ? "Education at Ukrainian universities is available in English and Russian. If you choose a course in Russian, a preparatory year of teaching the language will be necessary they learn the subjects related to their option of studies. So for medical students, they learn biology, chemistry, biophysics, and so on." : "L’Enseignement aux universités ukrainiennes est disponible en anglais et en russe. Si vous choisissez une filière en russe, une année préparatoire d’enseignement de la langue sera nécessaire ils apprennent les matières relatives à leur option d’études. Ainsi pour les étudiants de médecine, ils apprennent la biologie, la chimie, biophysique, etc. ")); ?></p>
    <p class="course-txt"><?php echo (($lang == 'ar') ? "<span class='btn btn-danger'>NB :</span>  تقدم دورة اللغة الإنجليزية دورات إلزامية في اللغة الروسية وهي ضرورية للتواصل الجيد ، والمعيشة المريحة والحياة اليومية في جميع مراحل الدراسة بالإضافة إلى إتقان الموارد التعليمية." : (($lang == 'en') ? "<span class='btn btn-danger'>NB :</span> The English language course provides compulsory courses in the Russian language which is necessary for good communication, comfortable living and daily life throughout the course of study as well as for the mastery of educational resources." : "<span class='btn btn-danger'>NB :</span> La formation en anglais prévoit les cours obligatoires de la langue russe ce qui nécessaire pour la bonne communication, pour le séjour confortable et pour la vie quotidienne pendant toute la durée des études aussi que pour la maitrise des ressources éducatives.")); ?></p>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>