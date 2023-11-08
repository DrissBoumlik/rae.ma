

<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("الأكاديمية الوطنية لتكنولوجيات الأغذية أوديسا","National Academy of Food Technologies Odessa","Académie Nationale Des Technologies Alimentaires D’Odessa");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الأوكرانية", "Ukrainian universities", "Universités Ukraniennes");
    feature_txt($txt, "ukraine");
?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "الأكاديمية الوطنية لتكنولوجيات الأغذية أوديسا" : (($lang == 'en') ? "National Academy of Food Technologies Odessa" : "Académie Nationale Des Technologies Alimentaires D’Odessa")); ?></h2>
    </div></div>
    <div class="post-img"><img src="ages/universities/ukraine/21.png" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p>اليوم الأكاديمية الوطنية لتكنولوجيا الأغذية أوديسا هي واحدة من أقدم المؤسسات التعليمية ليس فقط في أوديسا ، ولكن أيضا في تدريب المتخصصين في أوكرانيا لجميع فروع الصناعات الغذائية. يعمل خريجو الأكاديمية في العديد من المدن الأوكرانية ، وكذلك في الجمهوريات السوفيتية السابقة والدول الأجنبية. تمتلك الأكاديمية كل التسهيلات للتدريس الفعال - يوجد 6 مباني تعليمية مجهزة بالمختبرات التعليمية والعلمية ، مكتبة كبيرة بها 3 قاعات للقراءة ، مركز كمبيوتر حديث. هناك برامج ودورات ل 19 تخصصات للمستويات: البكالوريوس ، أخصائي وماجستير.</p>
        <h3>القطاعات الرئيسية</h3>
        <p>23 تخصصًا: منتجات الحبوب ومنتجات الحبوب ، وتكنولوجيا الخبز ، والحلويات والمنتجات الغذائية ، وتكنولوجيا الحفظ ، وتكنولوجيا صناعة النبيذ ، وتكنولوجيا منتجات اللحوم والألبان ، والبيئة ، والاقتصاد ، والإدارة والأعمال والمعدات التكنولوجية والخدمات التقنية والأتمتة وتقنيات الكمبيوتر. الإدارة التحضيرية للطلاب الأجانب.</p>
        <h3>علاقات دولية</h3>
        <p>عضو في رابطة جامعات أوروبا ، عضو في الرابطة الأوروبية لعلوم وتكنولوجيا الأغذية. عضو في رابطة جامعات دول حوض البحر الأسود ، عضو في الرابطة الأوروبية الآسيوية للجامعات.</p>
        <h3>بحث</h3>
        <p>عضو في رابطة جامعات أوروبا ، عضو في الرابطة الأوروبية لعلوم وتكنولوجيا الأغذية. عضو في رابطة جامعات دول حوض البحر الأسود ، عضو في الرابطة الأوروبية الآسيوية للجامعات.</p>
        <h3>نقاط القوة</h3>
        <p>الأكاديمية معترف بها لأنشطتها في مجال الأعمال التجارية الزراعية والاقتصاد والإدارة والإدارة. طلاب الأكاديمية يقومون بتدريبهم في الشركات ذات السمعة الطيبة في أوكرانيا والخارج.</p>" : (($lang == 'en') ? "<p>Today National Academy of Food Technology Odessa is one of the oldest educational institutions not only in Odessa, but also in the training of specialists of Ukraine for all branches of the food industry. Graduates of the Academy work in many Ukrainian cities, as well as in the former Soviet republics and foreign countries. The Academy has all the facilities for effective teaching - there are 6 educational buildings equipped with educational and scientific laboratories, a large library with 3 reading rooms, a modern computer center. There are programs and courses for 19 specialties for the levels: Bachelor, Specialist and Master.</p>
        <h3>Main sectors</h3>
        <p>23 specialties: cereals and cereal products technology, bread technology, confectionery and food products, conservation technology, winemaking technology, meat and dairy products technology, ecology, economy, management and business , technological equipment and technical service, automation, computer technologies. Preparatory department for foreign students.</p>
        <h3>International relationships</h3>
        <p>Member of the Association of Universities of Europe, member of the European Association of Food Science and Technology. Member of the Association of Universities of the Black Sea Basin Countries, member of the Euro-Asian Association of Universities.</p>
        <h3>Research</h3>
        <p>Member of the Association of Universities of Europe, member of the European Association of Food Science and Technology. Member of the Association of Universities of the Black Sea Basin Countries, member of the Euro-Asian Association of Universities.</p>
        <h3>Strong points</h3>
        <p>The academy is recognized for its activities in the field of agribusiness, economics, management and management. Academy students do their internships at reputable companies in Ukraine and abroad.</p>" : "<p>Aujourd'hui Académie nationale des technologies alimentaires d’Odessa est l'un des établissements d'enseignement les plus anciens non seulement à Odessa, mais aussi dans la formation des spécialistes de l’Ukraine pour toutes les branches de l'industrie alimentaire. Les diplômés de l'Académie travaillent dans de nombreuses villes ukrainiennes, ainsi que dans les anciennes Républiques soviétiques et pays étrangers. L’Académie a tous les équipements pour l'enseignement efficace - il y a 6 bâtiments d'enseignement équipés de laboratoires pédagogiques et scientifiques, une grande bibliothèque avec 3 salles de lecture, un centre informatique moderne. Il y a des programmes et des cours pour 19 spécialités pour les niveaux: licence, spécialiste et master.</p>
        <h3>Principales filières</h3>
        <p>23 spécialités: technologie des céréales et des produits céréaliers, technologie du pain, des produits de la confiserie et de l’alimentation, technologie de la conservation, technologie de la vinification, technologie des produits carnés et laitiers, écologie, économie, management et business, équipements technologiques et service technique, automatisation , technologies informatiques.
        Département préparatoire pour les étudiants étrangers.</p>
        <h3>Relations internationales</h3>
        <p>Membre de l’association des universités d’Europe, membre de l’association européenne des sciences et technologies alimentaires.
        Membre de l’association des universités des pays du bassin de la mer noire, membre de l’association euro-asiatique des universités.</p>
        <h3>Recherche</h3>
        <p>Membre de l’association des universités d’Europe, membre de l’association européenne des sciences et technologies alimentaires.
        Membre de l’association des universités des pays du bassin de la mer noire, membre de l’association euro-asiatique des universités.</p>
        <h3>Points forts</h3>
        <p>L’académie est reconnue pour ses activités dans le domaine de l’agro-alimentaire, de l’économie, du management et de la gestion.
        Les étudiants de l’académie font leurs stages dans des entreprises réputées en Ukraine et à l’étranger.</p>")); ?>
        
    </div>
</div>


<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
