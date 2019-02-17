<?php
    function feature_txt($headline, $class)
    {
        echo '<div class="container-fluid feature not ' . $class . '">
        <div class="_container">
            <!--  -->
            <div class="carousel-container">
                <div class="row">
                    <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel" data-interval="false">'.
                    
                        // '<ol class="carousel-indicators not-home-page">
                        //     <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        //     <li data-target="#quote-carousel" data-slide-to="1"></li>
                        //     <li data-target="#quote-carousel" data-slide-to="2"></li>
                        // </ol>'.
                        '<!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                <span class="uppercase">Universitiés</span>
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1" class="">
                                <span class="uppercase">Frais d\'études</span>
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2">
                                <span class="uppercase">Courses</span>
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="3">
                                <span class="uppercase">infos supplémentaire</span>
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="4">
                                <span class="uppercase">gallery</span>
                            </li>
                        </ol>'.
                        
                        '<!-- Carousel Slides / Quotes -->
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
                                        <li>Niveau d\'éducation avancé</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Voir plus </a>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <div class="row">
                                <div class="carousel-txt col-sm-12 col-md-12">
                                    <h2 class="uppercase">frais d\'études</h2>
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
                                        <li>Meilleur rapport entre le prix et la qualité d\'enseignement</li>
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
                                    <a href="/gallery.php" class="btn btn-primary">Voir plus </a>
                                </div>
                            </div>
                        </div>
                            
                            <div class="row static-txt">
                                <div class="col-md-12 col-sm-12 height-100">
                                    <div class="feature-txt body-txt">
                                        <h1 class="bg-dark-lighter uppercase">' . $headline .'</h1><br/>
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
    <div class="main-content"><div class="container"><div class="row">'.
    (($headline != 'contact') ? '<div class="col-sm-8 col-md-8">' : '<div class="col-sm-12 col-md-12">');
    }

    
