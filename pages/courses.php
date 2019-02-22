<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page("Cours")
?>

<?php include $path.'/layouts/feature.php';
    $txt = "Cours";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Cours", "الدورات", "Courses");
    }
    feature_txt($txt, "courses");
?>

<div class="section courses diplomas">
    <div class="row">
        <h2>Cours :</h2>
    </div>
    <div class="row">
        <h3>DOMAINE MÉDICAL</h3>
    </div>
    <div class="row">
        <div class="_container">
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">Médecine générale</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">6 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">MD (Doctor of
                                            Medicine / MBBS)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">Dentisterie</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">5 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">MD (Doctor of
                                            Medicine / MBBS)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">Pédiatrie</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">6 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">MD (Doctor of
                                            Medicine / MBBS)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">Pharmacie</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">5 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">MD (Doctor of
                                            Medicine / MBBS)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">INFIRMERIE</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">5 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">MD (Doctor of
                                            Medicine / MBBS)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">Formation postdoctorale / résidence clinique</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Durée</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">2-3 ans</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Diplôme délivré</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">Études
                                            postdoctorales / Résidence en clinique dans le domaine requis</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">Langue d'enseignement</div>
                                        <div class="col-md-7 col-xs-7 col-md-offset-1 col-xs-offset-1">anglais / russe /
                                            ukrainien</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>DOMAINE TECHNIQUE</h3>
    </div>
    <div class="row">
        <div class="_container">
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">AVIATION / AERONAUTIQUE</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">Ingénierie aéronautique</li>
                                        <li class="list-group-item">Ingénierie des fusées</li>
                                        <li class="list-group-item">Avionique</li>
                                        <li class="list-group-item">Gestion d'aéroport</li>
                                        <li class="list-group-item">Gestion aérospatiale</li>
                                        <li class="list-group-item">Gestion des aéroports et des commandes de vol</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">ORDINATEUR / IT / TELECOM:</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">Ingénierie informatique</li>
                                        <li class="list-group-item">Sciences informatiques</li>
                                        <li class="list-group-item">Systèmes informatiques et réseaux</li>
                                        <li class="list-group-item">Informatique</li>
                                        <li class="list-group-item">Ingénierie des technologies de l'information</li>
                                        <li class="list-group-item">Ingénierie du matériel informatique et des logiciels
                                        </li>
                                        <li class="list-group-item">Télécommunication</li>
                                        <li class="list-group-item">L'ingénierie des télécommunications</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">DOMAINES D'INGÉNIERIE:</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">Ingénierie électrique</li>
                                        <li class="list-group-item">Génie électronique</li>
                                        <li class="list-group-item">Génie Electromécanique</li>
                                        <li class="list-group-item">Génie Mécatronique</li>
                                        <li class="list-group-item">Ingénierie mécanique</li>
                                        <li class="list-group-item">Génie civil</li>
                                        <li class="list-group-item">Ingénieur architecte</li>
                                        <li class="list-group-item">Ingénierie pétrolière et gazière</li>
                                        <li class="list-group-item">Ingénierie pétrolière</li>
                                        <li class="list-group-item">Biotechnologie</li>
                                        <li class="list-group-item">Biomédical</li>
                                        <li class="list-group-item">Génie biomédical</li>
                                        <li class="list-group-item">Ingénierie minière</li>
                                        <li class="list-group-item">Géologie</li>
                                        <li class="list-group-item">La géodésie</li>
                                        <li class="list-group-item">Planification et gestion des terres</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool-container">
                <div class="tool-header fa-plus">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="capitalize">ZONES ÉCONOMIQUES:</h3>
                        </div>
                    </div>
                </div>
                <div class="tool-category">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tool-txt">
                                <div class="tool-descr">
                                    <ul class="list-group">
                                        <li class="list-group-item">Économie</li>
                                        <li class="list-group-item">L'économie internationale</li>
                                        <li class="list-group-item">Administration des affaires</li>
                                        <li class="list-group-item">La gestion</li>
                                        <li class="list-group-item">Comptabilité et audits</li>
                                        <li class="list-group-item">Banque et Finance</li>
                                        <li class="list-group-item">Relations économiques internationales</li>
                                        <li class="list-group-item">Gestion hôtelière et touristique</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>L’Enseignement aux universités ukrainiennes est disponible en anglais et en russe. Si vous choisissez une filière
        en russe, une année préparatoire d’enseignement de la langue sera nécessaire ils apprennent les matières
        relatives à leur option d’études. Ainsi pour les étudiants de médecine, ils apprennent la biologie, la chimie,
        biophysique, etc. </p>
    <p><span class="btn btn-danger">NB :</span> La formation en anglais prévoit les cours obligatoires de la langue
        russe ce qui nécessaire pour la bonne communication, pour le séjour confortable et pour la vie quotidienne
        pendant toute la durée des études aussi que pour la maitrise des ressources éducatives.</p>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>