<?php
    
    function feature_txt($headline, $class)
    {
        echo '<div class="container-fluid feature not ' . $class . '">
        <div class="_container">
            <!--  -->
            <div class="carousel-container">
                <div class="row">
                    <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel" data-interval="false">'.
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
                                <span class="uppercase">Photos et vidéos</span>
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="4">
                                <span class="uppercase">infos supplémentaire</span>
                            </li>
                        </ol>'.
                        
                        '<!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
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

    
