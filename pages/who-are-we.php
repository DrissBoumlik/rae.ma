<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('QUI NOUS SOMMES')
?>

    
<?php include $path.'/layouts/feature.php';
    $txt = "QUI NOUS SOMMES ?";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("QUI NOUS SOMMES ?", "من نحن ؟", "Who Are We ?");
    }
    feature_txt($txt, "");
?>
    

    <div class="section who-are-we">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title">QUI NOUS SOMMES ?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Alliance Educative (RAE) est active dans le domaine du conseil pédagogique. RAE a pour vocation d’accompagner les étudiants marocains, en particulier les bacheliers, dans leurs projets d’études à l’étranger(Ukraine/Russie). Nous apportons l’aide et les conseils pédagogiques nécessaires et adaptés pour leur permettre de faire la transition avec le moins de tracas possible. Nous nous occupons attentivement de toutes les démarches administratives en vue de promouvoir votre acceptation auprès de l’établissement souhaité.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section our-mission">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title">Notre Mission</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Notre mission est de <strong>guider et d'aider les étudiants</strong> à trouver les meilleures universités en fonction de leurs besoins financiers et académiques. Nous agissons comme un pont entre les chercheurs de haut niveau et les universités d’enseignement, en favorisant la compréhension, l’éducation et les échanges culturels.</p>
                </div>
            </div>
        </div>
    </div>
    

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>