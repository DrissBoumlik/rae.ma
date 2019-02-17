<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Universités Ukraniennes')
?>


<?php include $path.'/layouts/feature.php';
        $txt = "Universités Ukraniennes";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("Universités Ukraniennes", "الجامعات الأوكرانية", "Ukrainian universities");
        }
        feature_txt($txt, "ukraine");
?>


<div class="universities">
    <div class="">
        <div class="section">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="capitalize section-title">CERTAINES DE NOS UNIVERSITES Ukrainiennes PARTENAIRES </h2>
            </div>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item"><a href="universities/donetsk-national-medical-university.php" target="blank">Université Nationale de Médecine de Donetsk, ville Kropyvnytsky (Kirovohrad)</a></li>
                    <li class="list-group-item"><a href="universities/sumy-state-university.php" target="blank">Université d'État de Soumy, ville Soumy </a></li>
                    <li class="list-group-item"><a href="universities/odessa-national-medical-university.php" target="blank">Université Nationale de Médecine d'Odessa, ville Odessa</a></li>
                    <li class="list-group-item"><a href="universities/ihu.php" target="blank">Université Internationale Humanitaire, ville d'Odessa</a></li>
                    <li class="list-group-item"><a href="universities/central-ukrainian-national-technical-university.php" target="blank">Université Nationale Central Technique Ukrainienne, ville Kropyvnytsky (Kirovohrad):</a></li>
                    <li class="list-group-item"><a href="universities/state-flight-academy-ukraine-kirovograd.php" target="blank">Académie de Vol  d'État de l’Ukraine, ville Kropyvnytsky (Kirovohrad)</a></li>
                    <li class="list-group-item"><a href="universities/kharkiv-national-aerospace-university-kharkiv-aviation-institute-nau-khai.php" target="blank">Université nationale de l'aérospatiale de Kharkiv, ville de Kharkiv</a></li>
                    <li class="list-group-item"><a href="universities/bogomolets-national-medical-university.php" target="blank">Université médicale nationale OO Bogomolets de Kiev</a></li>
                    <li class="list-group-item"><a href="universities/national-academy-food-technology.php" target="blank">Académie Nationale Des Technologies Alimentaires D’Odessa</a></li>
                    <li class="list-group-item"><a href="universities/national-pedagogical-university-southern-ukraine.php" target="blank">Université pédagogique nationale d'Ukraine du Sud nommée par K.D. Ushynsky, ville d'Odessa</a></li>
                    <li class="list-group-item"><a href="universities/kherson-state-maritime-academy.php" target="blank">Académie Maritime d'État de Kherson, ville de Kherson</a></li>
                    <li class="list-group-item"><a href="universities/state-academy-civil-engineering-architecture.php" target="blank">Académie d'état de génie civil et d'architecture d’Odessa</a></li>
                </ul>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <p>L’enseignement supérieur en Ukraine pour les étrangers n’est disponible que dans les universités dotées du plus haut degré d’accréditation - IV - et d’une licence spéciale. Mais le nombre d'étudiants étrangers pouvant postuler en Ukraine n'est pas limité. Dans le même temps, les universités sont obligées d'attribuer des places aux étudiants dans les dortoirs.</p>
                </div>
            </div> -->
        </div>
    </div>
</div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>