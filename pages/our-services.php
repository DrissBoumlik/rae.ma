<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('NOS SERVICES', 2)
?>


<?php include $path.'/layouts/feature.php';
        $txt = "NOS SERVICES";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("NOS SERVICES", "خدماتنا", "our services");
        }
        feature_txt($txt, "");
?>
    
    <div class="section our-services">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title">NOS SERVICES</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="service-items list-group">
                        <li class="list-group-item">Orientation professionnelle des candidats et consultations sur les études en Ukraine/Russie, le système éducatif, les formations disponibles, les modalités des inscriptions aux universités Ukrainiennes/Russes, les conditions d’hébergement et la vie quotidienne des étudiants;</li>
                        <li class="list-group-item">La demande d’invitation à l’université ;</li>
                        <li class="list-group-item">Consultation et assistance en préparation du dossier pour l’obtention du visa étudiant ;</li>
                        <li class="list-group-item nb">Accueil des étudiants à l’aéroport d’arrivée, l’organisation du transfert jusqu’à la ville où se trouve l’université ;<br>
                            <p class="">N B : Informez-nous de votre date de voyage, votre heure d’arrivée, votre point d’arrivée ainsi que les autres informations concernant votre vol.  Nous vous accueillerons à l’aéroport.  C’est pourquoi, vous devez nous informer de vos plans de voyage au moins une semaine avant votre départ.  Vous pouvez vous faire refuser l’entrée en Ukraine/Russie si personne ne vous y attend.  C’est une des conditions de votre billet ouvert d’un an, alors n’essayez pas de jouer avec les règles !!!!</p>
                        </li>
                        <li class="list-group-item">Garantie de l’hébergement à campus universitaire (2 à 3 étudiants au max.) pour toute la période des études ; </li>
                        <li class="list-group-item">L’assurance médicale et l’assurance contre l’immigration illégale;</li>
                        <li class="list-group-item">Consultation et assistance en préparation du dossier pour le suivi académique;</li>
                        <li class="list-group-item">Communication avec des parents et leur information à la demande;</li>
                        <li class="list-group-item">Suivi, assistance, services des intérêts, aide de toute sorte pendant les études en Ukraine/Russie.</li>
                        <li class="list-group-item">La délivrance des certificats de scolarité annuellement aux parents des étudiants en vue de faciliter les modalités de transfert d’argent.</li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>