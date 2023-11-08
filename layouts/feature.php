<?php
    function feature_txt($headline, $class, $_lang = null)
    {
        $lang = $_lang != null ? $_lang : ((!isset($_GET['lang'])) ? 'fr' : $_GET['lang']);
        echo '<div class="container-fluid feature not ' . $class . '">
            <div class="_container">
                <!--  -->
                <div class="carousel-container">
                    <div class="row">
                        <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel" data-interval="false">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <span class="uppercase">'.
                                        (($lang == 'en') ? 'Universities' : (($lang == 'ar') ? 'الجامعات' : 'Universités')).
                                    '</span>
                                </li><li data-target="#quote-carousel" data-slide-to="1" class="">
                                    <span class="uppercase">'.
                                        (($lang == 'en') ? 'Study fees' : (($lang == 'ar') ? 'رسوم الدراسة' : 'Frais d\'études')).
                                    '</span>
                                </li><li data-target="#quote-carousel" data-slide-to="2">
                                    <span class="uppercase">'.
                                        (($lang == 'en') ? 'Courses' : (($lang == 'ar') ? 'دروس' : 'Cours')).
                                    '</span>
                                </li><li data-target="#quote-carousel" data-slide-to="3">
                                    <span class="uppercase">'.
                                        (($lang == 'en') ? 'Additionnal Infos' : (($lang == 'ar') ? 'معلومات إضافية' : 'infos supplémentaire')).
                                    '</span>
                                </li><li data-target="#quote-carousel" data-slide-to="4">
                                    <span class="uppercase">'.
                                        (($lang == 'en') ? 'gallery' : (($lang == 'ar') ? 'صور' : 'galerie')).
                                    '</span>
                                </li>
                            </ol>'.
                            
                            '<!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <div class="row">
                                        <div class="carousel-txt bg-dark-lighter col-sm-12 col-md-12" >
                                            <h2 class="uppercase">'.
                                            (($lang == 'en') ? 'Universities' : (($lang == 'ar') ? 'الجامعات' : 'Universités')).
                                            '</h2>
                                            <ul class="list-items">
                                                <li>'.(($lang == 'en') ? 'Famous institutions' : (($lang == 'ar') ? 'المؤسسات الشهيرة' : 'Universités')).'</li>
                                                <li>'.(($lang == 'en') ? 'Recognition (UNESCO, European Council, SADC ...)' : (($lang == 'ar') ? 'اعتراف (اليونسكو ,المجلس الأوروبي, SADC ...)' : 'Reconnaissance (UNESCO, Conseil européen, SADC ...)')).'</li>
                                                <li>'.(($lang == 'en') ? 'Qualified doctors' : (($lang == 'ar') ? 'أطباء مؤهلين' : 'Médecins qualifiés')).'</li>
                                                <li>'.(($lang == 'en') ? 'Research work' : (($lang == 'ar') ? 'العمل البحثي' : 'Travail de recherche')).'</li>
                                                <li>'.(($lang == 'en') ? 'Hospitals with modern technology' : (($lang == 'ar') ? 'المستشفيات ذات التكنولوجيا الحديثة' : 'Hôpitaux à la technologie moderne')).'</li>
                                                <li>'.(($lang == 'en') ? 'Advanced level of education' : (($lang == 'ar') ? 'مستوى متقدم من التعليم' : 'Niveau d\'éducation avancé')).'</li>
                                            </ul>
                                            <a href="pages/universities?lang='.$lang.'" class="btn btn-primary">'.(($lang == 'en') ? 'See more' : (($lang == 'ar') ? 'شاهد المزيد' : 'Voir plus')).'</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <div class="row">
                                        <div class="carousel-txt bg-dark-lighter col-sm-12 col-md-12">
                                            <h2 class="uppercase">'.(($lang == 'en') ? 'Study fees' : (($lang == 'ar') ? 'رسوم الدراسة' : 'Frais d\'études')).'</h2>
                                            <ul class="list-items">
                                                <li>'.(($lang == 'en') ? 'Higher education that usually costs several times cheaper here than in the West' : (($lang == 'ar') ? 'التعليم العالي الذي عادة ما يكلف هنا عدة مرات أرخص مما هو عليه في الغرب' : 'Enseignement supérieur qui coûte en général plusieurs fois moins cher ici qu’en Occident.')).'</li>
                                                <!-- <li>La qualité de l’enseignement dans les principales universités des pays (Ukraine/ Russie)</li> -->
                                            </ul>
                                            <a href="pages/study-fees?lang='.$lang.'" class="btn btn-primary">'.(($lang == 'en') ? 'See more' : (($lang == 'ar') ? 'شاهد المزيد' : 'Voir plus')).'</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <div class="row">
                                        <div class="carousel-txt bg-dark-lighter col-sm-12 col-md-12">
                                            <h2 class="uppercase">'.(($lang == 'en') ? 'Courses' : (($lang == 'ar') ? 'دروس' : 'Cours')).'</h2>
                                            <ul class="list-items">
                                                <!-- <li>Éducation de qualité</li> -->
                                                <li>'.(($lang == 'en') ? 'Universities of high technology' : (($lang == 'ar') ? 'جامعات التكنولوجيا العالية' : 'Universités de haute technologie')).'</li>
                                                <li>'.(($lang == 'en') ? 'Advanced laboratories ' : (($lang == 'ar') ? 'معامل متقدمة' : 'Laboratoires avancés')).'</li>
                                                <li>'.(($lang == 'en') ? 'Better relationship between price and quality of education' : (($lang == 'ar') ? 'علاقة أفضل بين السعر وجودة التعليم' : 'Meilleur rapport entre le prix et la qualité d\'enseignement')).'</li>
                                            </ul>
                                            <a href="pages/courses?lang='.$lang.'" class="btn btn-primary">'.(($lang == 'en') ? 'See more' : (($lang == 'ar') ? 'شاهد المزيد' : 'Voir plus')).'</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 4 -->
                                <div class="item">
                                    <div class="row">
                                        <div class="carousel-txt bg-dark-lighter col-sm-12 col-md-12">
                                            <h2 class="uppercase">'.(($lang == 'en') ? 'Additionnal Infos' : (($lang == 'ar') ? 'معلومات إضافية' : 'infos supplémentaire')).'</h2>
                                            <ul class="list-items">
                                                <li>'.(($lang == 'en') ? 'Accommodation' : (($lang == 'ar') ? 'الإقامة' : 'Hébérgement')).'</li>
                                                <li>'.(($lang == 'en') ? 'Equivalence ' : (($lang == 'ar') ? 'مساواة' : 'Equivalence')).'</li>
                                                <li>'.(($lang == 'en') ? 'Important links' : (($lang == 'ar') ? 'روابط مهمة' : 'Liens importants')).'</li>
                                                <li>'.(($lang == 'en') ? 'FAQ' : (($lang == 'ar') ? 'التعليمات' : 'FAQ')).'</li>
                                            </ul>
                                            <a href="pages/additional-infos?lang='.$lang.'" class="btn btn-primary">'.(($lang == 'en') ? 'See more' : (($lang == 'ar') ? 'شاهد المزيد' : 'Voir plus')).'</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Quote 5 -->
                                <div class="item">
                                    <div class="row">
                                        <div class="carousel-txt bg-dark-lighter col-sm-12 col-md-12">
                                            <h2 class="uppercase">'.(($lang == 'en') ? 'gallery' : (($lang == 'ar') ? 'صور' : 'galerie')).'</h2>
                                            <ul class="list-items">
                                                <li>'.(($lang == 'en') ? 'Student Photos' : (($lang == 'ar') ? 'صور الطلاب' : 'Photos etudiants')).'</li>
                                                <li>'.(($lang == 'en') ? 'Accommodation' : (($lang == 'ar') ? 'الإقامة' : 'Hebergement')).' </li>
                                                <li>'.(($lang == 'en') ? 'Videos ' : (($lang == 'ar') ? 'فيديو' : 'Vidéos')).'</li>
                                            </ul>
                                            <a href="pages/gallery?lang='.$lang.'" class="btn btn-primary">'.(($lang == 'en') ? 'See more' : (($lang == 'ar') ? 'شاهد المزيد' : 'Voir plus')).'</a>
                                        </div>
                                    </div>
                                </div>'.
                                (($class != 'home') ?
                                '<div class="row static-txt">
                                    <div class="col-md-12 col-sm-12 height-100">
                                        <div class="feature-txt body-txt">
                                            <h1 class="bg-dark-lighter-4 uppercase">' . $headline .'</h1><br/>
                                        </div>                                
                                    </div>
                                </div>' : '').
                            '</div>
                            <!-- Carousel Buttons Next/Prev -->
                            <div class="left carousel-control">
                                <a data-slide="prev" href="#quote-carousel" class=""><i class="fa fa-chevron-left"></i></a>
                            </div>
                            <div class="right carousel-control">
                                <a data-slide="next" href="#quote-carousel" class=""><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>'.
        (($class != 'home') ?
        ('<div class="main-content post-container"><div class="container"><div class="row">'.
        (($class != 'gallery') ? 
        '<div class="col-sm-8 col-md-8 content">' : '<div class="col-sm-12 col-md-12 content">')) : '');
    }
    
    function translate_feature_txt($fr, $ar, $en, $_lang = null)
    {
        $lang = $_lang != null ? $_lang : $_GET['lang'];
        return ($lang == 'ar') ? $ar
            : ( ($lang == 'en') ? $en : $fr);
    }
    
