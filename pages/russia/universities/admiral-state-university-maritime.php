
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    // title_page("Université Maritime d'État Admiral Ushakov, ville de Novorossiysk")
    // $lang = 'fr';
    ?>
    <?php
    $title = get_lang_text("جامعة ولاية البحرية الأدميرال أوشاكوف ، مدينة نوفوروسيي","Maritime State University of Admiral Ushakov, Novorossiysh City","Université Maritime d'État Admiral Ushakov, ville de Novorossiysk");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الروسية", "russian universities", "Universités Russes");
    feature_txt($txt, "russia");
?>
<?php echo $lang; ?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "جامعة ولاية البحرية الأدميرال أوشاكوف ، مدينة نوفوروسيي" : (($lang == 'en') ? "Maritime State University of Admiral Ushakov, Novorossiysh City" : "Université Maritime d'État Admiral Ushakov, ville de Novorossiysk")); ?></h2>
    </div></div>
    <div class="post-img"><img src="images/universities/russia/2.png" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p>الأكاديمية البحرية للدولة التي تحمل اسم الأدميرال أوشاكوف هي أكبر مؤسسة لنقل المياه ومؤسسة التعليم العالي الوحيدة في جنوب روسيا. تأسست الأكاديمية البحرية للدولة في عام 1975 في نوفوروسيسك. تعد الأكاديمية البحرية بالولاية أخصائيين للأسطول المدني والتجاري. أكاديمية الولاية البحرية لديها حاليا 7 كليات ، 36 إدارة. تضم هيئة التدريس بالأكاديمية البحرية الحكومية أكثر من 300 معلم. من بينها 29 طبيبا وأستاذة و 198 مرشحا للعلوم وأساتذة مشاركين. واليوم ، تدرب الأكاديمية البحرية الحكومية أكثر من 4000 طالب. خلال وجودها ، دربت أكاديمية الولاية البحرية أكثر من 20000 محترف.</p>
        <hr>
        <h3>كليات </h3>
        <ul class='list-group'>
            <li class='list-group-item'>ملاحة</li>
            <li class='list-group-item'>ميكانيكا السفينة</li>
            <li class='list-group-item'>إقتصاد و تسيير</li>
            <li class='list-group-item'>هيئة التدريس بالمراسلة</li>
            <li class='list-group-item'>كلية التربية العسكرية</li>
            <li class='list-group-item'> الفقه.</li>
        </ul>
        <h3>التخصصات:</h3>
        <ul class='list-group'>
            <li class='list-group-item'>الإبحار</li>
            <li class='list-group-item'>تشغيل محطة توليد الكهرباء</li>
            <li class='list-group-item'>تشغيل وصيانة المعدات الكهربائية والأوتوماتيكية للسفن</li>
            <li class='list-group-item'>مجمعات تكنولوجيا النقل البري</li>
            <li class='list-group-item'>الخدمات اللوجستية</li>
            <li class='list-group-item'>علم البيئة</li>
            <li class='list-group-item'>تشغيل وإدارة معدات النقل اللاسلكي</li>
            <li class='list-group-item'>إدارة النقل المائي الداخلي والسلامة الهيدروغرافية للملاحة</li>
            <li class='list-group-item'>أمن المعلومات</li>
            <li class='list-group-item'>نظم الكمبيوتر والتقنيات</li>
            <li class='list-group-item'>اقتصاد</li>
            <li class='list-group-item'>تشغيل الآلات ومجمعات تكنولوجيا النقل</li>
            <li class='list-group-item'>إدارة</li>
            <li class='list-group-item'>إدارة الموظفين</li>
            <li class='list-group-item'>إدارة الجودة</li>
            <li class='list-group-item'>عملية تكنولوجيا النقل</li>
            <li class='list-group-item'>علم الثقافة</li>
            <li class='list-group-item'>القانون</li>
            <li class='list-group-item'>خدمة</li>
            <li class='list-group-item'>علم النفس</li>
            <li class='list-group-item'>إدارة الدولة والبلدية</li>
            <li class='list-group-item'>الجمارك</li>
        </ul>
        <h3>برامج الدراسات العليا:</h3>
        <ul class='list-group'>
            <li class='list-group-item'>علوم الأرض - علم البيئة (السفن)</li>
            <li class='list-group-item'>علوم الكمبيوتر وهندسة الحاسبات - تحليل النظم والتحكم ومعالجة المعلومات وأتمتة وإدارة العمليات والإنتاجيات التكنولوجية</li>
            <li class='list-group-item'>الإلكترونيات وهندسة الراديو وأنظمة الاتصالات - أنظمة الاتصالات والشبكات والأجهزة</li>
            <li class='list-group-item'>معدات وتقنيات بناء السفن ونقل المياه - محطات توليد الطاقة البحرية ومكوناتها (رئيسية ومساعدة) وتشغيل النقل المائي والملاحة</li>
            <li class='list-group-item'>الاقتصاد - الاقتصاد وإدارة الاقتصاد الوطني (حسب فروع وفعاليات النشاط ، بما في ذلك: الاقتصاد ، التنظيم ، إدارة الشركات ، الفروع ، المجمعات (المركبات البحرية)</li>
            <li class='list-group-item'>الفقه - النظرية وتاريخ القانون والدولة ؛ تاريخ عقائد القانون والدولة</li>
            <li class='list-group-item'>العلوم العسكرية - التدريب والتعليم العسكري ، التدريب على القتال ، التربية العسكرية وعلم النفس ، إدارة الأنشطة اليومية للقوات.</li>
        </ul>" : (($lang == 'en') ? "<p>The State Maritime Academy named after Admiral Ushakov is the largest water transport institution and the only institution of higher education in southern Russia. The State Maritime Academy was established in 1975 in Novorossiysk. State Maritime Academy prepares specialists for the civilian and commercial fleet. The State Maritime Academy currently has 7 faculties, 36 departments. The teaching staff of the State Maritime Academy has more than 300 teachers. Among them, 29 doctors and professors, 198 science candidates and associate professors. Today, the State Maritime Academy trains more than 4,000 students. During its existence, the State Maritime Academy has trained more than 20,000 professionals.</p>
        <hr>
        <h3>faculties </h3>
        <ul class='list-group'>
            <li class='list-group-item'>Navigation</li>
            <li class='list-group-item'>ship mechanics</li>
            <li class='list-group-item'>Economics and Management</li>
            <li class='list-group-item'>correspondence teaching faculty</li>
            <li class='list-group-item'>faculty of military education,</li>
            <li class='list-group-item'> jurisprudence.</li>
        </ul>
        <h3>Specialties:</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Navigation</li>
            <li class='list-group-item'>Operation of the ship power station</li>
            <li class='list-group-item'>Operation and maintenance of the electrical and automatic equipment of ships</li>
            <li class='list-group-item'>Ground Transportation Technology Complexes</li>
            <li class='list-group-item'>Logistics</li>
            <li class='list-group-item'>Ecology</li>
            <li class='list-group-item'>Operation and management of transport radio equipment</li>
            <li class='list-group-item'>Management of Inland Waterway Transport and Hydrographic Safety of Navigation</li>
            <li class='list-group-item'>Information security</li>
            <li class='list-group-item'>Computer systems and technologies</li>
            <li class='list-group-item'>Economy</li>
            <li class='list-group-item'>Operation of machinery and transport technology complexes</li>
            <li class='list-group-item'>Management</li>
            <li class='list-group-item'>Staff management</li>
            <li class='list-group-item'>Quality management</li>
            <li class='list-group-item'>Transportation technology process</li>
            <li class='list-group-item'>culturology</li>
            <li class='list-group-item'>Law</li>
            <li class='list-group-item'>A service</li>
            <li class='list-group-item'>Psychology</li>
            <li class='list-group-item'>State and municipal management</li>
            <li class='list-group-item'>Customs</li>
        </ul>
        <h3>Postgraduate Programs:</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Earth Sciences - Ecology (Ships)</li>
            <li class='list-group-item'>Computer Science and Computer Engineering - System Analysis, Control and Information Processing and Automation and Management of Technological Processes and Productions</li>
            <li class='list-group-item'>Electronics, Radio Engineering and Communication Systems - Telecommunication Systems, Networks and Devices</li>
            <li class='list-group-item'>Shipbuilding and water transport equipment and technologies - Naval power plants and their components (main and auxiliary) and operation of water transport, navigation</li>
            <li class='list-group-item'>Economy - Economy and management of the national economy (according to the branches and sectors of activity, including: Economy, organization and management of companies, branches, complexes (nautical vehicles)</li>
            <li class='list-group-item'>Jurisprudence - Theory and History of Law and State; history of doctrines of law and state</li>
            <li class='list-group-item'>Military sciences - Military training and education, combat training, military pedagogy and psychology, management of daily activities of the troops.</li>
        </ul>" : "<p>L'Académie maritime d'État du nom de l'amiral Ouchakov est la plus grande institution de transport de l'eau et la seule institution d'enseignement supérieur dans le sud de la Russie. L’Académie maritime d’État a été créée en 1975 à Novorossiisk. State Maritime Academy prépare des spécialistes pour la flotte civile et commerciale. L’Académie maritime d’État compte actuellement 7 facultés, 36 départements. Le personnel enseignant de la State Maritime Academy compte plus de 300 enseignants. Parmi eux, 29 médecins et professeurs, 198 candidats en sciences et professeurs agrégés. Aujourd'hui, l'Académie maritime d'État forme plus de 4 000 étudiants. Au cours de son existence, la State Maritime Academy a formé plus de 20 000 professionnels.</p>
        <hr>
        <h3>Facultés </h3>
        <ul class='list-group'>
            <li class='list-group-item'>Navigation</li>
            <li class='list-group-item'>mécanique du navire</li>
            <li class='list-group-item'>économie et gestion</li>
            <li class='list-group-item'>faculté d'enseignement par correspondance</li>
            <li class='list-group-item'>faculté d'enseignement militaire,</li>
            <li class='list-group-item'> jurisprudence.</li>
        </ul>
        <h3>Spécialités :</h3>
        <ul class='list-group'>
            <li class='list-group-item'>La navigation</li>
            <li class='list-group-item'>Opération de la centrale électrique de navire</li>
            <li class='list-group-item'>Exploitation et maintenance des équipements électriques et automatiques des navires</li>
            <li class='list-group-item'>Complexes technologiques de transport à terre</li>
            <li class='list-group-item'>Logistique</li>
            <li class='list-group-item'>Écologie</li>
            <li class='list-group-item'>Exploitation et gestion des équipements radio de transport</li>
            <li class='list-group-item'>Gestion du transport par voie navigable et sécurité hydrographique de la navigation</li>
            <li class='list-group-item'>Sécurité de l'information</li>
            <li class='list-group-item'>Systèmes et technologies informatiques</li>
            <li class='list-group-item'>Économie</li>
            <li class='list-group-item'>Opération de machinerie et de complexes technologiques de transport</li>
            <li class='list-group-item'>La gestion</li>
            <li class='list-group-item'>Gestion du personnel</li>
            <li class='list-group-item'>Gestion de la qualité</li>
            <li class='list-group-item'>Processus de technologie de transport</li>
            <li class='list-group-item'>Culturologie</li>
            <li class='list-group-item'>Loi</li>
            <li class='list-group-item'>Un service</li>
            <li class='list-group-item'>Psychologie</li>
            <li class='list-group-item'>Gestion d'Etat et municipale</li>
            <li class='list-group-item'>Douane</li>
        </ul>
        <h3>Postgraduate Programs :</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Sciences de la Terre - Ecologie (Embarcations)</li>
            <li class='list-group-item'>Informatique et génie informatique - Analyse de système, contrôle et traitement de l'information et automatisation et gestion de processus et de productions technologiques</li>
            <li class='list-group-item'>Electronique, Génie Radio et Systèmes de Communication - Systèmes, réseaux et appareils de télécommunication</li>
            <li class='list-group-item'>Equipements et technologies de la construction navale et du transport par eau - Centrales navales et leurs éléments (principaux et auxiliaires) et exploitation du transport par eau, navigation</li>
            <li class='list-group-item'>Economie - Economie et gestion de l'économie nationale (selon les branches et secteurs d'activité, y compris: Economie, organisation et gestion des entreprises, branches, complexes (véhicules nautiques)</li>
            <li class='list-group-item'>Jurisprudence - Théorie et histoire du droit et de l'État; histoire des doctrines du droit et de l'état</li>
            <li class='list-group-item'>Sciences militaires - Entraînement et éducation militaires, entraînement au combat, pédagogie et psychologie militaires, gestion des activités quotidiennes des troupes.</li>
        </ul>")); ?>
        
    </div>
</div>



<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
