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
    
<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>