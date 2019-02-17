<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Accueil')
?>

<?php 
    $lang = null;
    if(isset($_GET['lang'])) $lang = $_GET['lang'];
?>

    <div class="container-fluid feature not">
        <div class="_container">
            <!--  -->
            <div class="carousel-container">
                <div class="row">
                    <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel" data-interval="false">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                <span class="uppercase">Universitiés</span>
                            </li><li data-target="#quote-carousel" data-slide-to="1" class="">
                                <span class="uppercase">Frais d'études</span>
                            </li><li data-target="#quote-carousel" data-slide-to="2">
                                <span class="uppercase">Cours</span>
                            </li><li data-target="#quote-carousel" data-slide-to="3">
                                <span class="uppercase">infos supplémentaires</span>
                            </li><li data-target="#quote-carousel" data-slide-to="4">
                                <span class="uppercase">galerie</span>
                            </li>
                        </ol>
                        
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <div class="row">
                                    <div class="carousel-txt col-sm-12 col-md-12">
                                        <h2 class="uppercase">universitiés</h2>
                                        <ul class="list-items">
                                            <li>Institutions célèbres</li>
                                            <li>Reconnaissance (qui, Unesco, Conseil européen, mci, sadc)</li>
                                            <li>Médecins qualifiés</li>
                                            <li>Travail de recherche</li>
                                            <li>Hôpitaux à la technologie moderne</li>
                                            <li>Niveau d'éducation avancé</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir plus </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <div class="row">
                                    <div class="carousel-txt col-sm-12 col-md-12">
                                        <h2 class="uppercase">frais d'études</h2>
                                        <ul class="list-items">
                                            <li>Enseignement supérieur, qui coûte en général plusieurs fois moins cher ici qu’en Occident.</li>
                                            <li>La qualité de l’enseignement dans les principales universités des pays (Ukraine/ Russie)</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir plus </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <div class="row">
                                    <div class="carousel-txt col-sm-12 col-md-12">
                                        <h2 class="uppercase">cours</h2>
                                        <ul class="list-items">
                                            <li>Éducation de qualité</li>
                                            <li>Universités de haute technologie</li>
                                            <li>Laboratoires avancés</li>
                                            <li>Meilleur rapport entre le prix et la qualité d'enseignement</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir plus </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 4 -->
                            <div class="item">
                                <div class="row">
                                    <div class="carousel-txt col-sm-12 col-md-12">
                                        <h2 class="uppercase">infos supplémentaires</h2>
                                        <ul class="list-items">
                                            <li>Equivalence</li>
                                            <li>Liens importants</li>
                                            <li>FAQ</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir plus </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Quote 5 -->
                            <div class="item">
                                <div class="row">
                                    <div class="carousel-txt col-sm-12 col-md-12">
                                        <h2 class="uppercase">photos et vidéos</h2>
                                        <ul class="list-items">
                                            <li>Photos etudiants</li>
                                            <li>Hebergement </li>
                                            <li>Vidéos</li>
                                        </ul>
                                        <a href="/pages/gallery.php" class="btn btn-primary">Voir plus </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </div>
    <div class="main-content">
        <div class="container">
            <div class="welcome-rae">
                <div class="">
                    <div class="row">
                        <h2 class="section-title">Bienvenue à <span class="uppercase">rae</span></h2>
                    </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12 welcome-txt">
                        <p>La vie étudiante en Ukraine <img src="/images/flags/ukraine.png" alt=""> et en Russie <img src="/images/flags/russia.png" alt=""> est visiblement moins chère que celle d’autres pays européens <img src="/images/flags/eu.png" alt=""><br>
                        C'est un endroit où étudier va au-delà des salles de classe.<br>
                        Profitez de votre vie multiculturelle et obtenez de nouvelles expériences 
                        chaque jour! Apprenez des meilleurs spécialistes et prospérez en 
                        tant que professionnel mondialement reconnu 
                        <img src="/images/graduate.png" alt="">
                        <img src="/images/graduate.png" alt="">.<br>
                        L'Ukraine et la Russie vous donne cette chance.</p>
                    </div>
                    <div class="col-md-5 col-xs-12 welcome-img">
                        <img src="/images/headline/graduates.png" alt="">
                    </div>
                </div>
                </div>
            </div>
            
            <div class="apply-now">
                <div class="">
                    <a href="#"><div class="row">
                        <!-- <div class="col-md-12">
                        <img src="/images/headline/apply-now.png" alt="">
                        </div> -->
                        <img src="/images/headline/apply-now.png" alt="">
                    </div></a>
                </div>
            </div>
            
            <div class="section universities">
                <div class="">
                    <div class="univ-ukrain">
                        <div class="row">
                            <h2 class="section-title uppercase">universités d'ukraine</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (1).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (2).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (3).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (4).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (5).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (3).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="row more"><a href="/pages/ukraine/universities.php" class="btn btn-primary">voir plus ...</a></div>
                    </div>
                    <hr>
                    <div class="univ-russia">
                        <div class="row">
                            <h2 class="section-title uppercase">universités de russie</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (1).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (2).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#"><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (3).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (4).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (5).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href='#'><div class="row">
                                    <div class="col-md-5 col-xs-5"><img src="images/universities/univ-ukrain (3).jpg" alt=""></div>
                                    <div class="col-md-7 col-xs-7">
                                        <span>Donetsk National Medical univ-ukrain (Kirovohrad Campus)</span>
                                        <br>
                                        <span>Kirovohrad</span>
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="row more"><a href="/pages/russia/universities.php" class="btn btn-primary">voir plus ...</a></div>
                    </div>
                </div>
            </div>
            
            <div class="section feature-offer">
                <div class="">
                    <div class="row">
                        <h2 class="section-title">Pourquoi étudier la médecine en Russie ou en Ukraine ?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-12"><img src="images/headline/medecine.jpeg" alt=""></div>
                        <div class="col-md-9 col-xs-12">
                            <p>Les diplômes médicaux russes et ukrainiens sont mondialement reconnus et répertoriés par des organismes internationaux tels que l’Organisation mondiale de la santé, l’Union européenne, l’Annuaire international de l’éducation médicale, ECFMG, États-Unis, le General Medical Council, le Royaume-Uni et autres.Le coût pour étudier MBBS en Russie ou en Ukraine est très faible par rapport aux autres pays européens.Il y a aussi un processus d'admission très facile avec 100% d'admission réussie</p>
                            <a href='#'>- MBBS IN RUSSIA</a><br>
                            <a href='#'>- MBBS IN UKRAINE</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section procedure">
                <div class="">
                    <div class="row">
                        <h2 class="section-title uppercase">Quelles démarche sont nécessaire pour etudier en Ukraine/Russie ?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12 procedure-step">
                            <a href="/register.php"><div class="row"><i class="fas fa-envelope"></i></div>
                            <div class="row">
                                <h4>L'invitation</h4>
                                <p>Admission auprès de nos partenaire en Ukraine/Russie et demande de l'invitation</p>
                            </div></a>
                        </div>
                        <div class="col-md-4 col-xs-12 procedure-step">
                            <a href="/visa.php"><div class="row"><i class="fas fa-globe-americas"></i></div>
                            <div class="row">
                                <h4>Visa</h4>
                                <p>Documents nécessaires pour visa d'étude Ukraine/Russie</p>
                            </div></a>
                        </div>
                        <div class="col-md-4 col-xs-12 procedure-step">
                            <a href="/transfert.php"><div class="row"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="row">
                                <h4>Arrivée et accueil en Ukraine/Russie</h4>
                                <p>La société Royal Alliance Educative vous accompagne à votre arrivée en Ukraine/Russie</p>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>

<?php include $path.'/layouts/footer.php' ?>