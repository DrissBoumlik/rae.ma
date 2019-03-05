<?php
    function footer($page = false, $_lang = null)
    {
        $lang = $_lang != null ? $_lang : (isset($_GET['lang']) ? $_GET['lang'] : 'fr');
        if($page) echo '</div></div>';
            echo '</div> <!-- container --></div> <!-- main-content --></div> <!-- main-page -->
                <div class="section footer"' . (($lang == 'ar') ? 'dir="rtl"' : '') .'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 about">
                                <!-- <div class="row">
                                    <h2 class="uppercase v-hidden">à propos</h2>
                                </div> -->
                                <div class="row">
                                    <p>' . (($lang == 'ar') ? 'أليانس التعليمية هي شركة أوكرانية روسية مغربية تقدم أفضل خدمة دعم للطلاب لجميع عمليات التسجيل في الجامعات الأوكرانية والروسية من الألف إلى الياء' : (($lang == 'en') ? 'Alliance Educative is an Ukrainian-Russian-Moroccan company that offers the best student support service for all registration processes at Ukrainian and Russian universities from A to Z.' : 'Alliance Educative est une société Ukrai-Russ-Marocaine qui offre le bon service d’accompagnement des étudiants pour toutes les démarches d’inscription aux universités ukraniennes et Russes de A a Z.')).'</p>
                                </div>
                            </div>
                            <div class="col-md-4 location">
                                <!-- <div class="row">
                                    <h2>Localisation</h2>
                                </div> -->
                                <div class="row">
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.5447653323022!2d-6.834120330911588!3d34.01591274888014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDAwJzU3LjMiTiA2wrA0OSc1OS43Ilc!5e0!3m2!1sfr!2sma!4v1549236246157" height="300" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4 infos">
                                <!-- <div class="row">
                                    <h2>Infos</h2>
                                </div> -->
                                <div class="row">
                                    <div class="">
                                        <h3>'. (($lang == 'ar') ? 'ساعات العمل' : (($lang == 'en') ? 'Working hours' : 'Heures de travail')).'</h3>
                                        <label><i class="fas fa-clock"></i><span>'. (($lang == 'ar') ? '18h - 9h : الاثنين - الجمعة' : (($lang == 'en') ? 'Monday-Friday: 9h - 18h' : 'Lundi-vendredi: 9h - 18h')).'</span></label><br>
                                        <label><i class="fas fa-at"></i><span>'. (($lang == 'ar') ? '7 شارع بنزرت ، الطابق الثالث ، حسان الرباط ، المغرب' : (($lang == 'en') ? '7 BENZERTE STREET, 3RD FLOOR, HASSAN RABAT, MOROCCO' : '7 RUE BENZERTE, 3 EME ETAGE, HASSAN RABAT, MAROC')) .'</span></label>
                                        <hr/>
                                        <h3>'. (($lang == 'ar') ? 'اتصل بنا' : (($lang == 'en') ? 'Contact Us' : 'Contactez Nous')).'</h3>
                                        <label><i class="fas fa-phone"></i>212-666-030-081 | 212-662-187-074</label><br>
                                        <label><i class="fas fa-envelope"></i>studyabroad@rae.ma</label><br>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>';
    
        include 'addons.php';
        echo '</body></html>';
    }
            