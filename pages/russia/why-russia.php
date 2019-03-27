<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("روسيا","Russia","Russie");
    title_page($title,4)
?>


<?php include $path.'/layouts/feature.php';
    $txt = "Pourquoi la Russie ?";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Pourquoi la Russie ?", "لماذا روسيا ؟", "why russia ?");
    }
    feature_txt($txt, "russia");
?>
    
    <div class="section why">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title">Pourquoi la Russie?</h2>
            </div>
            <div class="row">
                <p>Depuis l'ère du développement technologique et industriel, l'enseignement supérieur russe est très réputé pour sa supériorité dans les domaines de la recherche scientifique. Les titulaires de diplômes russes sont très demandés par les entreprises internationales et obtiennent très facilement de bons emplois dans différents pays. Les universités russes ont un assez bon réseau avec les universités du monde entier.</p>
            </div>
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title">PRINCIPAUX AVANTAGES POURQUOI CHOISIR LA RUSSIE?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="reason-items list-group">
                        <li class="list-group-item">Education de qualité avec un personnel enseignant composé à plus de 90% de professeurs et de candidats en sciences;</li>
                        <li class="list-group-item">La langue d'enseignement est l'anglais pendant toute la période d'étude;</li>
                        <li class="list-group-item">Processus d'admission facile;</li>
                        <li class="list-group-item">Aucun examen d'entrée;</li>
                        <li class="list-group-item">Accès aux laboratoires, centres techniques et de recherche les plus modernes</li>
                        <li class="list-group-item">Cours reconnus dans le monde entier (Europe, Royaume-Uni, États-Unis, Asie, Afrique);</li>
                        <li class="list-group-item">Diplôme de médecine reconnu par l'OMS, l'UNESCO, le PLAB (Royaume-Uni), USMLE (États-Unis), MCI, PMDC, d'autres organisations internationales et dans l'ensemble de l'UE;</li>
                        <li class="list-group-item">Les certificats IELTS / TOEFL ou autres ne sont pas identiques;</li>
                        <li class="list-group-item">Acceptation mondiale de la méthode d'enseignement et d'apprentissage du russe;</li>
                        <li class="list-group-item">Des manuels et du matériel d'étude sont fournis aux étudiants gratuitement;</li>
                        <li class="list-group-item">Cours pratiques d'hôpital à partir de la 2e année;</li>
                        <li class="list-group-item">Formation de nos étudiants pour les préparer aux examens de licence nationaux et internationaux à partir de la 3ème année (MCI, USMLE, etc.);</li>
                        <li class="list-group-item">Stage dans les plus grands hôpitaux de Russie;</li>
                        <li class="list-group-item">Accent mis sur l'aspect pratique de l'enseignement</li>
                        <li class="list-group-item">L'un des meilleurs systèmes de transport au monde;</li>
                        <li class="list-group-item">Garantie à 100% d'obtenir une LETTRE D'ADMISSION et D'INVITATION.</li>
                        <li class="list-group-item">Visa 100% pour les étudiants méritants;</li>
                        <li class="list-group-item">Meilleures opportunités d’exposition clinique dans les hôpitaux universitaires;</li>
                        <li class="list-group-item">Toutes nos universités sont des universités publiques russes;</li>
                        <li class="list-group-item">La plus large gamme de programmes éducatifs disponibles;</li>
                        <li class="list-group-item">Grands campus et installations offertes;</li>
                        <li class="list-group-item">Une éducation qui combine les innovations traditionnelles et modernes;</li>
                        <li class="list-group-item">Offre une grande vie sociale pour les étudiants internationaux.</li>
                    </ul>
                </div>
            </div>
            <p>La Russie est un acteur économique et politique majeur dans le monde. C’est l’une des nombreuses raisons pour lesquelles la réputation des universités et des diplômes obtenus est reconnue dans le monde entier et montre au futur employeur que l’étudiant a bénéficié d’une solide formation de base et continue. connaissance du travail pratique.</p>
            <p>L’importance accordée aux projets de recherche explique également la bonne réputation des universités russes. Au cours du processus éducatif, les étudiants peuvent réaliser leurs propres projets et apprendre leur futur métier dans une situation réelle. La Russie met à votre disposition des universités et des instituts mondialement réputés avec des frais de scolarité abordables.</p>
            <p>En raison de la qualité de l'enseignement, la plupart des universités russes occupent depuis des années une place de choix dans les classements internationaux.</p>
        </div>
    </div>


    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>