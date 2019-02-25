<?php

function main_menu($active_page)
{
    global $lang;
    $lang = $GLOBALS['lang'];
    echo ('</head>
    <body>
        <header class="header"'. (($lang == 'ar') ? 'dir="rtl"' : '') .'>
            <div class="container">
                <div class="row header-row">
                    <div class="col-md-3 languages">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="?lang=ar">
                                <img src="/images/flags/ar.png" alt="">
                            </a></li>
                            <li class="list-inline-item"><a href="?lang=fr">
                                <img src="/images/flags/fr.png" alt="">
                            </a></li>
                            <li class="list-inline-item"><a href="?lang=en">
                                <img src="/images/flags/uk.png" alt="">
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 logo">
                        <a href="/?lang=' . $lang . '"><img src="/images/logo.png" alt="RAE"></a>
                    </div>
                    <div class="col-md-4 contact">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 badge">
                                <i class="fas fa-at"></i><span>'. (($lang == 'ar') ? '7 شارع بينزيرتي ، الطابق الثالث ، حسان الرباط ، المغرب' : (($lang == 'en') ? '7 BENZERTE STREET, 3RD FLOOR, HASSAN RABAT, MOROCCO' : '7 RUE BENZERTE, 3 EME ETAGE, HASSAN RABAT, MAROC')) .'                                
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 badge">
                                <i class="fas fa-phone"></i><span>212-666-030-081 | 212-662-187-074</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 badge">
                                <i class="fas fa-envelope"></i><span>studyabroad@rae.ma</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <!-- // <div class="navbar-header">
                    //     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    //         <span class="sr-only">Toggle navigation</span>
                    //         <span class="icon-bar"></span>
                    //         <span class="icon-bar"></span>
                    //         <span class="icon-bar"></span>
                    //     </button>
                    // </div> -->
                    
                    <div id="navbar">
                    <!-- . // class="navbar-collapse collapse"> -->
                        <ul id="menu-main-menu" class="nav navbar-nav">
                            <li class="' . ($active_page == '1' ? 'active' : '') .'"><a href="/?lang='. $lang .'">'. (($lang == 'ar') ? 'إستقبال' : (($lang == 'en') ? 'Home' : 'Accueil')) .'</a></li><li class="' . ($active_page == '2' ? 'active' : '') .'"><a class="has-submenu" >'.(($lang == 'ar') ? 'في ما يخصنا' : (($lang == 'en') ? 'About us' : 'A propos de nous')).'</a>
                                <ul class="submenu">
                                    <li><a href="/pages/who-are-we.php?lang='. $lang .'">'.(($lang == 'ar') ? 'من نحن' : (($lang == 'en') ? 'Who are we' : 'Qui Somme nous')).'</a></li>
                                    <li><a href="/pages/our-services.php?lang='. $lang .'">'.(($lang == 'ar') ? 'خدماتنا' : (($lang == 'en') ? 'Our services' : 'Nos Services')).'</a></li>
                                </ul>
                            </li><li class="' . ($active_page == '3' ? 'active' : '') .'"><a class="has-submenu" >'.(($lang == 'ar') ? 'أوكرانيا' : (($lang == 'en') ? 'Ukraine' : 'Ukraine')).'</a>
                                <ul class="submenu">
                                    <li><a href="/pages/ukraine/about-ukraine.php?lang='. $lang .'">'.(($lang == 'ar') ? 'حول أوكرانيا' : (($lang == 'en') ? 'About Ukraine' : 'A propos de Ukraine')).'</a></li>
                                    <li><a href="/pages/ukraine/why-ukraine.php?lang='. $lang .'">'.(($lang == 'ar') ? 'لماذا اوكرانيا' : (($lang == 'en') ? 'Why Ukraine' : 'Pourquoi Ukraine')).'</a></li>
                                    <li><a href="/pages/ukraine/sup-ukraine.php?lang='. $lang .'">'.(($lang == 'ar') ? 'التعليم العالي في أوكرانيا' : (($lang == 'en') ? 'Higher Education in Ukraine' : 'Etudes Supérieure en Ukraine')).'</a></li>
                                </ul>
                            </li><li class="' . ($active_page == '4' ? 'active' : '') .'"><a class="has-submenu" >'.(($lang == 'ar') ? 'روسيا' : (($lang == 'en') ? 'Russia' : 'Russie')).'</a>
                                <ul class="submenu">
                                    <li><a href="/pages/russia/about-russia.php?lang='. $lang .'">'.(($lang == 'ar') ? 'حول روسيا' : (($lang == 'en') ? 'About Russia' : 'A propos de Russie')).'</a></li>
                                    <li><a href="/pages/russia/why-russia.php?lang='. $lang .'">'.(($lang == 'ar') ? 'لماذا روسيا' : (($lang == 'en') ? 'Why Russia' : 'Pourquoi Russie')).'</a></li>
                                    <li><a href="/pages/russia/sup-russia.php?lang='. $lang .'">'.(($lang == 'ar') ? 'التعليم العالي في روسيا' : (($lang == 'en') ? 'Higher Education in Russia' : 'Etudes Supérieure en Russie')).'</a></li>
                                </ul>
                            </li><li class="' . ($active_page == '5' ? 'active' : '') .'"><a href="/pages/register.php?lang='. $lang .'">'.(($lang == 'ar') ? 'كيفية التسجيل' : (($lang == 'en') ? 'How to register' : 'Comment s\'inscrire')).'</a></li><li class="' . ($active_page == '6' ? 'active' : '') .'"><a class="has-submenu" >'.(($lang == 'ar') ? 'التأشيرة والوصول' : (($lang == 'en') ? 'Visa and Arrival' : 'Visa et Arrivée')).'</a>
                                <ul class="submenu">
                                    <li><a href="/pages/visa.php?lang='. $lang .'">'.(($lang == 'ar') ? 'تأشيرة' : (($lang == 'en') ? 'Visa' : 'Visa')).'</a></li>
                                    <li><a href="/pages/briefing.php?lang='. $lang .'">'.(($lang == 'ar') ? 'إحاطة من قبل' : (($lang == 'en') ? 'Briefing before' : 'Briefing avant')).'</a></li>
                                    <li><a href="/pages/transfert.php?lang='. $lang .'">'.(($lang == 'ar') ? 'وصول ونقل' : (($lang == 'en') ? 'Arrival and transfer' : 'Arrivée et transfert')).'</a></li>
                                </ul>
                            </li><li class="' . ($active_page == '7' ? 'active' : '') .'"><a title="Resume" href="/pages/contact.php?lang='. $lang .'">'.(($lang == 'ar') ? 'اتصال' : (($lang == 'en') ? 'Contact' : 'Contact')).'</a></li>
                        </ul>                        
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
        </header>
    <div class="main-page" '. (($lang == 'ar') ? 'dir="rtl"' : '') .'>');
}