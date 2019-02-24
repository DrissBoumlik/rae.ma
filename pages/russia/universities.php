<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php';
    title_page('Universités Russes')
?>


<?php include $path.'/layouts/feature.php';
        $txt = "Universités Russes";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("Universités Russes", "الجامعات الروسية", "rissuan universities");
        }
        feature_txt($txt, "russia");
?>


<div class="universities">
    <div class="">
        <div class="section">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "بعض شركاء الجامعة الروس" : (($lang == 'en') ? "SOME OF OUR RUSSIAN UNIVERSITIES PARTNERS" : "CERTAINES DE NOS UNIVERSITES RUSSES  PARTENAIRES")); ?></h2>
            </div>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item"><a href="universities/rybinsk-state-aviation-technical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة التقنية التقنية في Rybinsk Aviation بمدينة Rybinsk" : (($lang == 'en') ? "State Technical University of Rybinsk Aviation, Rybinsk City" : "Université d'État Technique de l'Aviation de Rybinsk, ville Rybinsk")); ?></a></li>
                    <li class="list-group-item"><a href="universities/kalashnikov-izhevsk-state-technical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة كلاشينكوف التقنية الحكومية ، مدينة إيجيفسك" : (($lang == 'en') ? "Kalashnikov Technical State University, Izhevsk city" : "Université d'État Technique Kalachnikov, ville Izhevsk")); ?></a></li>
                    <li class="list-group-item"><a href="universities/chechen-state-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة ولاية الشيشان ، مدينة غروزني" : (($lang == 'en') ? "Chechen State University, Grozny city" : "Université d'État Tchétchéne, ville Grozny")); ?></a></li>
                    <li class="list-group-item"><a href="universities/adyghe-state-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة أديغيا الحكومية ، مدينة مايكوب" : (($lang == 'en') ? "Adygea State University, Maïkop City" : "Université d’Etat Adyguée, ville Maïkop")); ?></a></li>
                    <li class="list-group-item"><a href="universities/russian-national-research-medical-university-named-ni-pirogov.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة روسيا الوطنية للبحوث الطبية ، مدينة موسكو" : (($lang == 'en') ? "Russia National University of Medical Research, Moscow City" : "Le Russie Université Nationale de la Recherche Médicale, ville Moscou")); ?></a></li>
                    <li class="list-group-item"><a href="universities/first-moscow-state-medical-university-named-m-sechenova.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "أول جامعة موسكو الطبية الحكومية ، مدينة موسكو" : (($lang == 'en') ? "First Moscow State Medical University, Moscow City" : "Première Université d'État de Médecine de Moscou, ville Moscou")); ?></a></li>
                    <li class="list-group-item"><a href="universities/siberian-state-medical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة سيبيريا ستيت الطبية ، مدينة تومسك" : (($lang == 'en') ? "Siberian State Medical University, Tomsk City" : "Université Médicale d'État DE Sibérie, ville Tomsk")); ?></a></li>
                    <li class="list-group-item"><a href="universities/dagestan-state-medical-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة داغستان الطبية الحكومية ، مدينة ماخاتشكالا" : (($lang == 'en') ? "Dagestan State Medical University, Makhachkala City" : "Université d'État de Médecine du Daghestan, ville Makhatchkala")); ?></a></li>
                    <li class="list-group-item"><a href="universities/moscow-institute-physics-technology.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "معهد موسكو للفيزياء والتكنولوجيا ، مدينة موسكو" : (($lang == 'en') ? "Moscow Institute of Physics and Technology, Moscow City" : "Institut de Physique et de Technologie de Moscou, ville Moscou")); ?></a></li>
                    <li class="list-group-item"><a href="universities/admiral-state-university-maritime.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة ولاية البحرية الأدميرال أوشاكوف ، مدينة نوفوروسيي" : (($lang == 'en') ? "Maritime State University of Admiral Ushakov, Novorossiysh City" : "Université d’Etat Maritime de l’Admiral Ushakov, Ville Novorossiisk")); ?></a></li>
                    <li class="list-group-item"><a href="universities/Polytechnic-University-Tomsk.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة البوليتكنيك في تومسك ، تومسك سيتي" : (($lang == 'en') ? "Polytechnic University of Tomsk, Tomsk City" : "Université Polytechnique de Tomsk, ville Tomsk")); ?></a></li>
                    <!-- <li class="list-group-item"><a href="universities/belgorod-institute-art-culture.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "")); ?></a></li> -->
                    <li class="list-group-item"><a href="universities/ogarev-state-university.php?lang=<?php echo $lang;?>" target="blank"><?php echo (($lang == 'ar') ? "جامعة Mordovia State NPOgaraev ، مدينة سارانسك" : (($lang == 'en') ? "Mordovia State University NPOgaraev, Saransk city" : "Université d’Etat de Mordovie N.P.Ogaraev , ville Saransk")); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>