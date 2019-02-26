<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("إستقبال","Home","Accueil");
    title_page($title, 1)
?>

<?php 
    $lang = null;
    if(isset($_GET['lang'])) $lang = $_GET['lang'];
?>

<?php include $path.'/layouts/feature.php';
    $txt = "home";
    feature_txt($txt, "home");
?>

<div class="main-content">
    <div class="container">
        <div class="welcome-rae">
            <div class="">
                <div class="row">
                    <h2 class="section-title">
                        <?php echo (($lang == 'ar') ? 'مرحبا بكم في أليانس التعليمية' : (($lang == 'en') ? 'Welcome to <span class="uppercase">rae</span>' : 'Bienvenue à <span class="uppercase">rae</span>')); ?>
                    </h2>
                </div>
                <div class="row welcome-msg">
                    <div class="col-md-7 col-xs-12 welcome-txt">
                        <?php echo (($lang == 'ar') ? '<p>الحياة الطلابية في أوكرانيا <img src="/images/flags/ukraine.png" alt=""> وروسيا <img src="/images/flags/russia.png" alt=""> أرخص بشكل ملحوظ من الدول الأوروبية الأخرى <img src="/images/flags/eu.png" alt=""><br>
                            إنه مكان للدراسة يتجاوز الصفوف الدراسية.
                            استمتع بحياة متعددة الثقافات واحصل على تجارب جديدة كل يوم! تعلم من أفضل المتخصصين والازدهار كمحترف معترف به عالميا.
                            <img src="/images/graduate.png" alt="">
                            <img src="/images/graduate.png" alt="">.<br>
                            تعطيك أوكرانيا وروسيا تلك الفرصة.</p>'
                            : (($lang == 'en') ? '<p>Student life in Ukraine <img src="/images/flags/ukraine.png" alt=""> and Russia <img src="/images/flags/russia.png" alt=""> is noticeably cheaper than in other European countries <img src="/images/flags/eu.png" alt=""><br>
                            It\'s a place to study that goes beyond classrooms.
                            Enjoy your multicultural life and get new experiences every day! Learn from the best specialists and prosper as a globally recognized professional.
                            <img src="/images/graduate.png" alt="">
                            <img src="/images/graduate.png" alt="">.<br>
                            Ukraine and Russia give you that chance.</p>' 
                            : '<p>La vie étudiante en Ukraine <img src="/images/flags/ukraine.png" alt=""> et en Russie <img src="/images/flags/russia.png" alt=""> est visiblement moins chère que celle d’autres pays européens <img src="/images/flags/eu.png" alt=""><br>
                            C\'est un endroit où étudier va au-delà des salles de classe.<br>
                            Profitez de votre vie multiculturelle et obtenez de nouvelles expériences 
                            chaque jour! Apprenez des meilleurs spécialistes et prospérez en 
                            tant que professionnel mondialement reconnu 
                            <img src="/images/graduate.png" alt="">
                            <img src="/images/graduate.png" alt="">.<br>
                            L\'Ukraine et la Russie vous donne cette chance.</p>')); ?>
                    </div>
                    <div class="col-md-5 col-xs-12 welcome-img">
                        <img src="/images/headline/graduates.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="apply-now">
            <div class="">
                <a href="/pages/apply.php?lang=<?php echo $lang;?>">
                    <div class="row">
                        <!-- <div class="col-md-12">
                        <img src="/images/headline/apply-now.png" alt="">
                        </div> -->
                        <img src="/images/headline/apply-now<?php echo (($lang == 'ar') ? '-ar' : (($lang == 'en') ? '-en' : '')); ?>.png"
                            alt="">
                    </div>
                </a>
            </div>
        </div>

        <div class="section universities">
            <div class="">
                <div class="univ-ukrain">
                    <div class="row">
                        <h2 class="section-title uppercase">
                            <?php echo (($lang == 'ar') ? 'جامعات أوكرانيا' : (($lang == 'en') ? 'ukraine universities' : 'universités d\'ukraine')); ?>
                        </h2>
                    </div>
                    <div class="univ-block">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/pages/ukraine/universities/donetsk-national-medical-university.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/Donetsk-National-Medical-University-4.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'الجامعة الوطنية للطب' : (($lang == 'en') ? 'National University of Medicine' : 'Université Nationale de Médecine')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'دونيتسك' : 'Donetsk') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/ukraine/universities/central-ukrainian-national-technical-university.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/kntu_01.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'الجامعة الوطنية المركزية التقنية' : (($lang == 'en') ? 'National Central Technical University' : 'Université Nationale Central Technique')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'كيروفوهراد' : 'Kirovohrad') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/ukraine/universities/kharkiv-national-aerospace-university-kharkiv-aviation-institute-nau-khai.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/20180215151923.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'الجامعة الوطنية للطيران' : (($lang == 'en') ? 'National University of Aerospace' : "Université nationale de l'aérospatiale")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'خاركيف' : 'Kharkiv') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/pages/ukraine/universities/national-academy-food-technology.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/21.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'الأكاديمية الوطنية لتكنولوجيات الغذاء' : (($lang == 'en') ? 'National Academy of Food Technologies' : 'Académie Nationale Des Technologies Alimentaires')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'أوديسا' : 'Odessa') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/ukraine/universities/kherson-state-maritime-academy.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/24.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'أكاديمية خيرسون البحرية' : (($lang == 'en') ? 'Kherson State Maritime Academy' : "Académie Maritime d'État de Kherson")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'خيرسون' : 'Kherson') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href='/pages/ukraine/universities/state-academy-civil-engineering-architecture.php?lang=<?php echo $lang;?>'>
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/25.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'أكاديمية الدولة للهندسة المدنية والهندسة المعمارية' : (($lang == 'en') ? 'State Academy of Civil Engineering and Architecture' : "Académie d'état de génie civil et d'architecture")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'أوديسا' : 'Odessa') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row more"><a href="/pages/ukraine/universities.php?lang=<?php echo $lang;?>"
                            class="btn btn-primary"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                    </div>
                </div>
                <hr>
                <div class="univ-russia">
                    <div class="row">
                        <h2 class="section-title uppercase">
                            <?php echo (($lang == 'ar') ? 'جامعات روسيا' : (($lang == 'en') ? 'UNIVERSITIES OF RUSSIA' : 'universités de russie')); ?>
                        </h2>
                    </div>
                    <div class="univ-block">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/first-moscow-state-medical-university-named-m-sechenova.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/55.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'جامعة الولاية الأولى للطب' : (($lang == 'en') ? 'First State University of Medicine' : "Première Université d'État de Médecine")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/russian-national-research-medical-university-named-ni-pirogov.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/95.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'جامعة روسيا الوطنية للبحوث الطبية' : (($lang == 'en') ? 'Russia National University of Medical Research' : 'Le Russie Université Nationale de la Recherche Médicale')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/Polytechnic-University-Tomsk.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/3.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'جامعة البوليتكنيك' : (($lang == 'en') ? 'Polytechnic University' : 'Université Polytechnique')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'تومسك' : 'Tomsk') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/rybinsk-state-aviation-technical-university.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/40.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'الجامعة التقنية الحكومية للطيران' : (($lang == 'en') ? 'State University of Aviation Engineering' : "Université d'État Technique de l'Aviation")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'رايبنسك' : 'Rybinsk') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/chechen-state-university.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/russia/edugain_chesu.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'جامعة ولاية الشيشان' : (($lang == 'en') ? 'Chechen State University' : "Université d'État Tchétchéne")); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'غروزني' : 'Grozny') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/moscow-institute-physics-technology.php?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/1.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? 'معهد الفيزياء والتكنولوجيا' : (($lang == 'en') ? 'Institute of Physics and Technology' : 'Institut de Physique et de Technologie')); ?></span>
                                            <span>-</span>
                                            <span><?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row more"><a href="/pages/russia/universities.php?lang=<?php echo $lang;?>"
                            class="btn btn-primary"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section feature-offer">
            <div class="">
                <div class="row">
                    <h2 class="section-title">
                        <?php echo (($lang == 'ar') ? 'لماذا دراسة الطب في روسيا أو أوكرانيا؟' : (($lang == 'en') ? 'Why study medicine in Russia or Ukraine ?' : 'Pourquoi étudier la médecine en Russie ou en Ukraine ?')); ?>
                    </h2>
                </div>
                <div class="row offer-detail">
                    <div class="col-md-3 col-xs-12"><img src="images/headline/medecine.jpeg" alt=""></div>
                    <div class="col-md-9 col-xs-12">
                        <?php echo (($lang == 'ar') ? '<p>إن الشهادات الطبية الروسية والأوكرانية معترف بها دوليا ومدرجة من قبل المنظمات الدولية مثل منظمة الصحة العالمية ، الاتحاد الأوروبي ، الكتاب السنوي الدولي للتعليم الطبي ، ECFMG ، الولايات المتحدة ، المجلس الطبي العام تعتبر تكلفة دراسة MBBS في روسيا أو أوكرانيا منخفضة للغاية مقارنة بالدول الأوروبية الأخرى. هناك أيضًا عملية قبول سهلة للغاية مع قبول ناجح بنسبة 100٪</p>
                            <a href="#">- MBBS في روسيا</a><br>
                            <a href="#">- MBBS في أوكرانيا</a>' : 
                            (($lang == 'en') ? '<p>The Russian and Ukrainian medical degrees are internationally recognized and listed by international organizations such as the World Health Organization, the European Union, the International Yearbook of Medical Education, ECFMG, United States, the General Medical Council , the UK and others.The cost to study MBBS in Russia or Ukraine is very low compared to other European countries.There is also a very easy admission process with 100% successful admission</p>
                            <a href="#">- MBBS IN RUSSIA</a><br>
                            <a href="#">- MBBS IN UKRAINE</a>' 
                            : '<p>Les diplômes médicaux russes et ukrainiens sont mondialement reconnus et répertoriés par des organismes internationaux tels que l’Organisation mondiale de la santé, l’Union européenne, l’Annuaire international de l’éducation médicale, ECFMG, États-Unis, le General Medical Council, le Royaume-Uni et autres.Le coût pour étudier MBBS en Russie ou en Ukraine est très faible par rapport aux autres pays européens.Il y a aussi un processus d\'admission très facile avec 100% d\'admission réussie</p>
                            <a href="#">- MBBS en Russie</a><br>
                            <a href="#">- MBBS en Ukraine</a>')); ?>


                    </div>
                </div>
            </div>
        </div>

        <div class="section procedure">
            <div class="">
                <div class="row">
                    <h2 class="section-title uppercase">
                        <?php echo (($lang == 'ar') ? 'ما هي الخطوات اللازمة للدراسة في أوكرانيا / روسيا ؟' 
                        : (($lang == 'en') ? 'What steps are needed to study in Ukraine / Russia ?' 
                        : 'Quelles démarche sont nécessaire pour etudier en Ukraine/Russie ?')); ?>
                    </h2>
                </div>
                <div class="row steps">
                    <div class="col-md-4 col-xs-12 procedure-step">
                        <a href="/pages/register.php?lang=<?php echo $lang;?>">
                            <div class="row"><i class="fas fa-envelope"></i></div>
                            <div class="row">
                                <h4><?php echo (($lang == 'en') ? 'The invitation' : (($lang == 'ar') ? 'الدعوة' : 'L\'invitation')); ?>
                                </h4>
                                <p><?php echo (($lang == 'en') ? 'Admission to our partners in Ukraine / Russia and invitation request Visa' : (($lang == 'ar') ? 'قبول لشركائنا في أوكرانيا / روسيا وطلب الدعوة' : 'Admission auprès de nos partenaire en Ukraine/Russie et demande de l\'invitation')); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 procedure-step">
                        <a href="/pages/visa.php?lang=<?php echo $lang;?>">
                            <div class="row"><i class="fas fa-globe-americas"></i></div>
                            <div class="row">
                                <h4><?php echo (($lang == 'en') ? 'Visa' : (($lang == 'ar') ? 'تأشيرة' : 'visa')); ?>
                                </h4>
                                <p><?php echo (($lang == 'en') ? 'Documents needed for study visa Ukraine / Russia' : (($lang == 'ar') ? 'المستندات المطلوبة لتأشيرة الدراسة أوكرانيا / روسيا' : 'Documents nécessaires pour visa d\'étude Ukraine/Russie')); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 procedure-step">
                        <a href="/pages/transfert.php?lang=<?php echo $lang;?>">
                            <div class="row"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="row">
                                <h4><?php echo (($lang == 'en') ? 'Arrival and reception in Ukraine / Russia' : (($lang == 'ar') ? 'وصول واستقبال في أوكرانيا / روسيا' : 'Arrivée et accueil en Ukraine/Russie')); ?>
                                </h4>
                                <p><?php echo (($lang == 'en') ? 'Royal Alliance Educative accompanies you on your arrival in Ukraine / Russia' 
                                    : (($lang == 'ar') ? 'أليانس التعليمية ترافقك عند وصولك إلى أوكرانيا / روسيا' 
                                    : 'La société Royal Alliance Educative vous accompagne à votre arrivée en Ukraine/Russie')); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include $path.'/layouts/footer.php' ?>