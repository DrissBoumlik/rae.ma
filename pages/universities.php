<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("الجامعات", "Universities","Universities");
    title_page($title)
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "Universités";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Universités", "الجامعات", "universities");
    }
    feature_txt($txt, "universities");
?>

    <div class="posts">
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/Donetsk-National-Medical-University-4.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'الجامعة الوطنية للطب' : (($lang == 'en') ? 'National University of Medicine' : 'Université Nationale de Médecine')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'دونيتسك' : 'Donetsk') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/donetsk-national-medical-university.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/kntu_01.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'الجامعة الوطنية المركزية التقنية' : (($lang == 'en') ? 'National Central Technical University' : 'Université Nationale Central Technique')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'كيروفوهراد' : 'Kirovohrad') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/central-ukrainian-national-technical-university.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/20180215151923.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'الجامعة الوطنية للطيران' : (($lang == 'en') ? 'National University of Aerospace' : "Université nationale de l'aérospatiale")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'خاركيف' : 'Kharkiv') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/kharkiv-national-aerospace-university-kharkiv-aviation-institute-nau-khai.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/21.png" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'الأكاديمية الوطنية لتكنولوجيات الغذاء' : (($lang == 'en') ? 'National Academy of Food Technologies' : 'Académie Nationale Des Technologies Alimentaires')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'أوديسا' : 'Odessa') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/national-academy-food-technology.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/24.png" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'أكاديمية خيرسون البحرية' : (($lang == 'en') ? 'Kherson State Maritime Academy' : "Académie Maritime d'État de Kherson")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'خيرسون' : 'Kherson') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/kherson-state-maritime-academy.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/ukraine/25.png" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'أكاديمية الدولة للهندسة المدنية والهندسة المعمارية' : (($lang == 'en') ? 'State Academy of Civil Engineering and Architecture' : "Académie d'état de génie civil et d'architecture")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'أوديسا' : 'Odessa') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/ukraine/universities/state-academy-civil-engineering-architecture.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/55.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'جامعة الولاية الأولى للطب' : (($lang == 'en') ? 'First State University of Medicine' : "Première Université d'État de Médecine")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/first-moscow-state-medical-university-named-m-sechenova.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/95.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'جامعة روسيا الوطنية للبحوث الطبية' : (($lang == 'en') ? 'Russia National University of Medical Research' : 'Université Nationale de la Recherche Médicale')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/russian-national-research-medical-university-named-ni-pirogov.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/1.png" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'معهد الفيزياء والتكنولوجيا' : (($lang == 'en') ? 'Institute of Physics and Technology' : 'Institut de Physique et de Technologie')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'موسكو' : 'Moscou') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/Polytechnic-University-Tomsk.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/40.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'الجامعة التقنية الحكومية للطيران' : (($lang == 'en') ? 'State University of Aviation Engineering' : "Université d'État Technique de l'Aviation")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'رايبنسك' : 'Rybinsk') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/rybinsk-state-aviation-technical-university.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/edugain_chesu.jpg" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'جامعة ولاية الشيشان' : (($lang == 'en') ? 'Chechen State University' : "Université d'État Tchétchéne")); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'غروزني' : 'Grozny') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/chechen-state-university.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-img">
                        <img src="/images/universities/russia/3.png" alt="">
                    </div>
                    <div class="post-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 txt-header">
                                <h3><?php echo (($lang == 'ar') ? 'جامعة البوليتكنيك' : (($lang == 'en') ? 'Polytechnic University' : 'Université Polytechnique')); ?></h3>
                                <h4>- <?php echo (($lang == 'ar') ? 'تومسك' : 'Tomsk') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 read-more">
                            <a href="/pages/russia/universities/moscow-institute-physics-technology.php?lang=<?php echo $lang;?>" class="btn btn-lg btn-block btn-default"><?php echo (($lang == 'en') ? 'See more ...' : (($lang == 'ar') ? 'شاهد المزيد ...' : 'Voir plus ...'))?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section universities">
        <h3><?php echo (($lang == 'ar') ? "الإقامة في أوكرانيا وروسيا" : (($lang == 'en') ? "Accommodation in Ukraine and Russia" : "Hébergement en Ukraine et en Russie ")); ?></h3>
        <p><?php echo (($lang == 'ar') ? "هي أرخص وفقا لدول أوروبية أخرى ، الأسعار تختلف وفقا لأولوياتك الخاصة ، الأمر متروك تماما لاختيارك والمطالبة بما تحبه وما يجعلك مرتاحا. عادة ، نوصي بالعيش في بيت الشباب للطلاب الجدد." : (($lang == 'en') ? "are cheaper according to other European states, prices vary according to your own priorities, it is totally up to your choice and demand what you like and what makes you comfortable. Normally, we recommend living in the hostel for new students to come." : "sont moins cher selon les autres États européens, les prix varient en fonction de vos propres priorités, il est totalement à votre choix et la demande ce que vous aimez et ce qui vous rend le confort. Normalement, nous recommandons de vivre dans l’auberge pour les nouveaux étudiants à venir.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "لأن" : (($lang == 'en') ? "Because;" : "Parce que;")); ?></p>
        <p><?php echo (($lang == 'ar') ? "انهم لا يعرفون لغة التواصل مع السكان" : (($lang == 'en') ? "They do not know the language of communication with the inhabitants" : "Ils ne savent pas la langue de communication avec les habitants")); ?></p>
        <p><?php echo (($lang == 'ar') ? "انهم لا يعرفون جذور الحافلة في المدينة خارج حرم الجامعة" : (($lang == 'en') ? "They do not know the city's bus roots outside the university campus" : "Ils ne savent pas les racines de bus de la ville à l’extérieur du campus universitaire")); ?></p>
        <p><?php echo (($lang == 'ar') ? "نساعد الطالب طوال الوقت ، ولكن إذا كانوا يعيشون خارج حرم الجامعة ، لا يمكننا الاقتراب منهم ، لذلك من الصعب مساعدتهم." : (($lang == 'en') ? "We help the student throughout, but if they live outside the university campus we can not approach them, so it is difficult to help them." : "Nous aidons l’étudiant tout au long mais si ils vivent en dehors du campus universitaire nous ne pouvons pas les approcher, il est donc difficile de les aider.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "حرم الجامعة هو أفضل مكان للقاء أشخاص جدد واكتساب خبرات جديدة وتكوين صداقات جديدة تعيش مدى الحياة." : (($lang == 'en') ? "The university campus is the best place to meet new people, gain new experiences and make new friends who live for life." : "Le campus universitaire est le meilleur endroit pour rencontrer de nouvelles personnes, acquérir de nouvelles expériences et faire de nouveaux amis qui vit pour la vie.")); ?></p>
        <h3><?php echo (($lang == 'ar') ? "السكن الجامعي" : (($lang == 'en') ? "UNIVERSITY ACCOMMODATION" : "HÉBERGEMENT UNIVERSITAIRE")); ?></h3>
        <p><?php echo (($lang == 'ar') ? "خيار رخيص وجيد للطلاب الجدد القادمين ، مقدم من الجامعة." : (($lang == 'en') ? "Cheap and good option for new upcoming students, provided by the University." : "Option pas cher et bon pour les nouveaux étudiants à venir, fournies par l’Université.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "الغرفة من شخصين إلى ثلاثة أشخاص: رسوم مكان واحد - 1000 دولار - 1200 دولار مع تجديد ممتاز (يشمل جميع المعدات اللازمة للعيش في سهولة)." : (($lang == 'en') ? "The room of two to three people: one place charges - $ 1000- $ 1200 with excellent renovation (includes all the necessary equipment to live at ease)." : "La chambre de deux à trois personnes: charges d’une place – 1000 $-1200 $ avec une excellent rénovation (comprend tous les équipements nécessaires pour vivre à l’aise).")); ?></p>
        <p><?php echo (($lang == 'ar') ? "يتم تصنيف تكاليف الشقة وفقا لمساحتها ، وحالتها ومكانها." : (($lang == 'en') ? "The costs of the apartment are classified according to their space, their state and their place." : "Les frais de l’appartement sont classés selon leur espace, leur état et leur lieu.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "<span class='btn btn-danger'>ملاحظة :</span>  يمكن استيعاب الطلاب الأجانب في منازل الطلاب ، ولكن يمكنك أيضًا العثور على شقق للإيجار." : (($lang == 'en') ? "<span class='btn btn-danger'>NB :</span> Foreign students can be accommodated in student homes, but you can also find apartments for rent." : "<span class='btn btn-danger'>NB :</span> Les étudiants étrangers peuvent être logés dans des foyers d’étudiants, mais vous pouvez également, trouver des appartements à louer.")); ?></p>
    </div>
<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>