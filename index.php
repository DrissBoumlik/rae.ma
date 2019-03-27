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
                        استمتع بحياة متعددة الثقافات واحصل على تجارب جديدة كل يوم! تعلم من أفضل المتخصصين والازدهار كمحترف معترف به عالميا.<img src="/images/graduate.png" alt=""><img src="/images/graduate.png" alt="">.<br>تعطيك أوكرانيا وروسيا تلك الفرصة.</p>' : (($lang == 'en') ? '<p>Student life in Ukraine <img src="/images/flags/ukraine.png" alt=""> and Russia <img src="/images/flags/russia.png" alt=""> is noticeably cheaper than in other European countries <img src="/images/flags/eu.png" alt=""><br>It\'s a place to study that goes beyond classrooms.Enjoy your multicultural life and get new experiences every day! Learn from the best specialists and prosper as a globally recognized professional.<img src="/images/graduate.png" alt=""><img src="/images/graduate.png" alt="">.<br>Ukraine and Russia give you that chance.</p>' : '<p>La vie étudiante en Ukraine <img src="/images/flags/ukraine.png" alt=""> et en Russie <img src="/images/flags/russia.png" alt=""> est visiblement moins chère que celle d’autres pays européens <img src="/images/flags/eu.png" alt=""><br>C\'est un endroit où étudier va au-delà des salles de classe.<br>Profitez de votre vie multiculturelle et obtenez de nouvelles expériences chaque jour! Apprenez des meilleurs spécialistes et prospérez en tant que professionnel mondialement reconnu <img src="/images/graduate.png" alt=""><img src="/images/graduate.png" alt="">.<br>L\'Ukraine et la Russie vous donne cette chance.</p>')); ?>
                    </div>
                    <div class="col-md-5 col-xs-12 welcome-img">
                        <img src="/images/headline/graduates.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- <hr class="section-title-line w-50">
        <div class="section forum">
            <div>
                <p>ALLIANCE ÉDUCATIVE viendra à la rencontre des étudiants marocains et non marocain par ses participations aux forums_Régionaux_Etudiant_2019 suivants : </p>
                <ul class="list-group">
                    <li class="list-group-item">Fés (Marriott Hôtel Jnan Palace): jeudi 21 au samedi 23 Mars de 09H30 à 19H00 </li>
                    <li class="list-group-item">Tanger ( Centre Culturel Ahmed boukmakh ): jeudi 28 au samedi 30 Mars de 09H30 à 19H00</li>
                    <li class="list-group-item">Casablanca( à la Foire Internationale ) : Jeudi 18 au Dimanche 21 Avril, de 9h30 à 19h30,</li>                    
                </ul>
                <p>nous nous réjouissons si vous soyez venus si nombreux à cet important rendez-vous 😍😃, Merci !!!</p>
            </div>
        </div>
        <hr class="section-title-line w-50"> -->
        <div class="apply-now">
            <div class="">
                <a href="/pages/apply?lang=<?php echo $lang;?>">
                    <div class="row">
                        <!-- <div class="col-md-12">
                        <img src="/images/headline/apply-now.png" alt="">
                        </div> -->
                        <img src="/images/headline/apply-now<?php echo (($lang == 'ar') ? '-ar' : (($lang == 'en') ? '-en' : '-fr')); ?>.png" alt="">
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
                                <a
                                    href="/pages/ukraine/universities/donetsk-national-medical-university?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/Donetsk-National-Medical-University-4.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة دونيتسك الطبية الوطنية ، كروبيفنيتسكي (كيروفوهراد)" : (($lang == 'en') ? "Donetsk National Medical University, Kropyvnytsky (Kirovohrad)" : "Université Nationale de Médecine de Donetsk, <span class='italic'>ville Kropyvnytsky (Kirovohrad)</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/ukraine/universities/central-ukrainian-national-technical-university?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/kntu_01.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "الجامعة الوطنية التقنية الأوكرانية المركزية ، مدينة كروبيفنيتسكي (كيروفوهراد)" : (($lang == 'en') ? "Ukrainian Central Technical National University, Kropyvnytsky city (Kirovohrad)" : "Université Nationale Central Technique Ukrainienne, <span class='italic'>ville Kropyvnytsky (Kirovohrad)</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/ukraine/universities/kharkiv-national-aerospace-university-kharkiv-aviation-institute-nau-khai?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/ukraine/20180215151923.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة الطيران الوطنية N.E. جوكوفسكي 'معهد خاركيف للطيران'" : (($lang == 'en') ? "National Aerospace University N.E. Zhukovsky 'Kharkiv Aviation Institute'" : "Université Nationale Aérospatiale N.E. Joukovski \"Institut d'Aviation de Kharkiv\"")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a
                                    href="/pages/ukraine/universities/national-academy-food-technology?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/21.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "الأكاديمية الوطنية لتكنولوجيات الأغذية أوديسا" : (($lang == 'en') ? "National Academy of Food Technologies Odessa" : "Académie Nationale Des Technologies Alimentaires D’Odessa")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/ukraine/universities/kherson-state-maritime-academy?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/24.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "أكاديمية خيرسون البحرية، <span class='italic'>مدينة خيرسون</span>" : (($lang == 'en') ? "Kherson State Maritime Academy, <span class='italic'>Kherson City</span>" : "Académie Maritime d'État de Kherson, <span class='italic'>ville de Kherson</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href='/pages/ukraine/universities/state-academy-civil-engineering-architecture?lang=<?php echo $lang;?>'>
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/ukraine/25.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا" : (($lang == 'en') ? "State Academy of Civil Engineering and Architecture of Odessa" : "Académie d'État de Génie Civil et d’Architecture d’Odessa")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row more"><a href="/pages/ukraine/ukrainian-universities.php?lang=<?php echo $lang;?>"
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
                                <a
                                    href="/pages/russia/universities/first-moscow-state-medical-university-named-m-sechenova?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/55.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "أول جامعة موسكو الطبية الحكومية ، <span class='italic'>مدينة موسكو</span>" : (($lang == 'en') ? "First Moscow State Medical University, <span class='italic'>Moscow City</span>" : "Première Université d'État de Médecine de Moscou, <span class='italic'>ville Moscou</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/russia/universities/russian-national-research-medical-university-named-ni-pirogov?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/95.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة روسيا الوطنية للبحوث الطبية ، <span class='italic'>مدينة موسكو</span>" : (($lang == 'en') ? "Russia National University of Medical Research, <span class='italic'>Moscow City</span>" : "Le Russie Université Nationale de la Recherche Médicale, <span class='italic'>ville Moscou</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/russia/universities/Polytechnic-University-Tomsk?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/3.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة البوليتكنيك في تومسك ،<span class='italic'>مدينة تومسك</span>" : (($lang == 'en') ? "Polytechnic University of Tomsk, <span class='italic'>Tomsk City</span>" : "Université Polytechnique de Tomsk, <span class='italic'>ville Tomsk</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a
                                    href="/pages/russia/universities/rybinsk-state-aviation-technical-university?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/40.jpg"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة التقنية التقنية في Rybinsk Aviation <span class='italic'>بمدينة Rybinsk</span>" : (($lang == 'en') ? "State Technical University of Rybinsk Aviation, <span class='italic'>Rybinsk City</span>" : "Université d'État Technique de l'Aviation de Rybinsk, <span class='italic'>ville Rybinsk</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="/pages/russia/universities/chechen-state-university?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img
                                                src="/images/universities/russia/edugain_chesu.jpg" alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "جامعة ولاية الشيشان ، <span class='italic'>مدينة غروزني</span>" : (($lang == 'en') ? "Chechen State University, <span class='italic'>Grozny city</span>" : "Université d'État Tchétchéne, <span class='italic'>ville Grozny</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a
                                    href="/pages/russia/universities/moscow-institute-physics-technology?lang=<?php echo $lang;?>">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="/images/universities/russia/1.png"
                                                alt=""></div>
                                        <div class="col-md-7 col-xs-7">
                                            <span><?php echo (($lang == 'ar') ? "معهد موسكو للفيزياء والتكنولوجيا ، <span class='italic'>مدينة موسكو</span>" : (($lang == 'en') ? "Moscow Institute of Physics and Technology, <span class='italic'>Moscow City</span>" : "Institut de Physique et de Technologie de Moscou, <span class='italic'>ville Moscou</span>")); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row more"><a href="/pages/russia/russian-universities.php?lang=<?php echo $lang;?>"
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
                        <?php echo (($lang == 'ar') ? '<p>إن الشهادات الطبية الروسية والأوكرانية معترف بها دوليا ومدرجة من قبل المنظمات الدولية مثل منظمة الصحة العالمية ، الاتحاد الأوروبي ، الكتاب السنوي الدولي للتعليم الطبي ، ECFMG ، الولايات المتحدة ، المجلس الطبي العام تعتبر تكلفة دراسة MBBS في روسيا أو أوكرانيا منخفضة للغاية مقارنة بالدول الأوروبية الأخرى. هناك أيضًا عملية قبول سهلة للغاية مع قبول ناجح بنسبة 100٪</p><a href="#">- MBBS في روسيا</a><br><a href="#">- MBBS في أوكرانيا</a>' : (($lang == 'en') ? '<p>The Russian and Ukrainian medical degrees are internationally recognized and listed by international organizations such as the World Health Organization, the European Union, the International Yearbook of Medical Education, ECFMG, United States, the General Medical Council , the UK and others.The cost to study MBBS in Russia or Ukraine is very low compared to other European countries.There is also a very easy admission process with 100% successful admission</p><a href="#">- MBBS IN RUSSIA</a><br><a href="#">- MBBS IN UKRAINE</a>' : '<p>Les diplômes médicaux russes et ukrainiens sont mondialement reconnus et répertoriés par des organismes internationaux tels que l’Organisation mondiale de la santé, l’Union européenne, l’Annuaire international de l’éducation médicale, ECFMG, États-Unis, le General Medical Council, le Royaume-Uni et autres.Le coût pour étudier MBBS en Russie ou en Ukraine est très faible par rapport aux autres pays européens.Il y a aussi un processus d\'admission très facile avec 100% d\'admission réussie</p><a href="#">- MBBS en Russie</a><br><a href="#">- MBBS en Ukraine</a>')); ?>


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
                        <a href="/pages/register?lang=<?php echo $lang;?>">
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
                        <a href="/pages/visa?lang=<?php echo $lang;?>">
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
                        <a href="/pages/transfert?lang=<?php echo $lang;?>">
                            <div class="row"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="row">
                                <h4><?php echo (($lang == 'en') ? 'Arrival and reception in Ukraine / Russia' : (($lang == 'ar') ? 'وصول واستقبال في أوكرانيا / روسيا' : 'Arrivée et accueil en Ukraine/Russie')); ?>
                                </h4>
                                <p><?php echo (($lang == 'en') ? 'Royal Alliance Educative accompanies you on your arrival in Ukraine / Russia' : (($lang == 'ar') ? 'أليانس التعليمية ترافقك عند وصولك إلى أوكرانيا / روسيا' : 'La société Royal Alliance Educative vous accompagne à votre arrivée en Ukraine/Russie')); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include $path.'/layouts/footer.php';
    footer(); ?>