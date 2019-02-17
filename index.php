<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Accueil')
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