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
                <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "بعض من جامعاتنا الأوكرانية الشركاء" : (($lang == 'en') ? "SOME OF OUR UNIVERSITIES Ukrainian PARTNERS" : "CERTAINES DE NOS UNIVERSITES Ukrainiennes PARTENAIRES")); ?></h2>
            </div>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item"><a href="universities/donetsk-national-medical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة دونيتسك الطبية الوطنية ، كروبيفنيتسكي (كيروفوهراد)" : (($lang == 'en') ? "Donetsk National Medical University, Kropyvnytsky (Kirovohrad)" : "Université Nationale de Médecine de Donetsk, ville Kropyvnytsky (Kirovohrad)")); ?></a></li>
                    <!-- <li class="list-group-item"><a href="universities/sumy-state-university.php?lang=<?php echo $lang;?>" target="blank">Université d'État de Soumy, ville Soumy </a></li> -->
                    <li class="list-group-item"><a href="universities/odessa-national-medical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الجامعة الوطنية للطب في أوديسا ، مدينة أوديسا" : (($lang == 'en') ? "National University of Medicine of Odessa, Odessa city" : "Université Nationale de Médecine d'Odessa, ville Odessa")); ?></a></li>
                    <li class="list-group-item"><a href="universities/ihu.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الجامعة الإنسانية الدولية ، مدينة أوديسا" : (($lang == 'en') ? "International Humanitarian University, Odessa City" : "Université Internationale Humanitaire, ville d'Odessa")); ?></a></li>
                    <li class="list-group-item"><a href="universities/central-ukrainian-national-technical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الجامعة الوطنية التقنية الأوكرانية المركزية ، مدينة كروبيفنيتسكي (كيروفوهراد):" : (($lang == 'en') ? "Ukrainian Central Technical National University, Kropyvnytsky city (Kirovohrad):" : "Université Nationale Central Technique Ukrainienne, ville Kropyvnytsky (Kirovohrad):")); ?></a></li>
                    <!-- <li class="list-group-item"><a href="universities/state-flight-academy-ukraine-kirovograd.php?lang=<?php echo $lang;?>" target="blank">Académie de Vol  d'État de l’Ukraine, ville Kropyvnytsky (Kirovohrad)</a></li> -->
                    <li class="list-group-item"><a href="universities/kharkiv-national-aerospace-university-kharkiv-aviation-institute-nau-khai.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة الفضاء الوطنية في خاركيف ، مدينة خاركوف" : (($lang == 'en') ? "National Aerospace University of Kharkiv, Kharkiv City" : "Université nationale de l'aérospatiale de Kharkiv, ville de Kharkiv")); ?></a></li>
                    <li class="list-group-item"><a href="universities/bogomolets-national-medical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الجامعة الطبية الوطنية OO Bogomolets من كييف" : (($lang == 'en') ? "National Medical University OO Bogomolets of Kiev" : "Université médicale nationale OO Bogomolets de Kiev")); ?></a></li>
                    <li class="list-group-item"><a href="universities/national-academy-food-technology.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الأكاديمية الوطنية لتكنولوجيات الأغذية أوديسا" : (($lang == 'en') ? "National Academy of Food Technologies Odessa" : "Académie Nationale Des Technologies Alimentaires D’Odessa")); ?></a></li>
                    <li class="list-group-item"><a href="universities/national-pedagogical-university-southern-ukraine.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "الجامعة الوطنية التربوية في جنوب أوكرانيا التي عينتها ك. أو. Ushynsky ، مدينة أوديسا" : (($lang == 'en') ? "National Pedagogical University of Southern Ukraine appointed by K.D. Ushynsky, City of Odessa" : "Université pédagogique nationale d'Ukraine du Sud nommée par K.D. Ushynsky, ville d'Odessa")); ?></a></li>
                    <li class="list-group-item"><a href="universities/kherson-state-maritime-academy.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "أكاديمية خيرسون البحرية، مدينة خيرسون" : (($lang == 'en') ? "Kherson State Maritime Academy, Kherson City" : "Académie Maritime d'État de Kherson, ville de Kherson")); ?></a></li>
                    <li class="list-group-item"><a href="universities/state-academy-civil-engineering-architecture.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا" : (($lang == 'en') ? "State Academy of Civil Engineering and Architecture of Odessa" : "Académie d'état de génie civil et d'architecture d’Odessa")); ?></a></li>
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