<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا","State Academy of Civil Engineering and Architecture of Odessa","Académie d'état de génie civil et d'architecture d’Odessa");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الأوكرانية", "Ukrainian universities", "Universités Ukraniennes");
    feature_txt($txt, "ukraine");
?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا" : (($lang == 'en') ? "State Academy of Civil Engineering and Architecture of Odessa" : "Académie d'état de génie civil et d'architecture d’Odessa")); ?></h2>
    </div></div>
    <div class="post-img"><img src="/images/universities/ukraine/25.png" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p> أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا هي خليفة للتقاليد المجيدة لمدرسة عمال البناء في أوديسا التابعة لإدارة أوديسا (نوفوروسيسك) بالجمعية الفنية الروسية الإمبراطورية منذ عام 1891. </p>
        <p>في عام 1918 ، لإعداد المهندسين والبنائين ، تم إنشاء كلية الهندسة في معهد البوليتكنيك.</p>
        <p>افتتحت في قاعدتها في عام 1930 جامعة في قطاع البناء ، ومعهد الهندسة والبناء في أوديسا (OISI) ، والتي غيرت اسمها على مر السنين. القرار رقم 244 المؤرخ 24 نيسان / أبريل 1994 لمجلس وزراء أوكرانيا الذي أنشأ أكاديمية الدولة للهندسة المدنية والهندسة في أوديسا على أساس معهد الهندسة والبناء في أوديسا.</p>
        <p>تقدم الأكاديمية دورات وبرامج تؤدي إلى الحصول على درجات علمية معترف بها رسمياً ، مثل شهادات البكالوريوس في العديد من مجالات الدراسة. </p>
        <ul class='list-group'>
            <li class='list-group-item'>هندسة معمارية </li>
            <li class='list-group-item'>الفنون الجميلة، </li>
            <li class='list-group-item'>الهندسة المدنية، </li>
            <li class='list-group-item'>موارد مائية</li>
            <li class='list-group-item'>اقتصاد الأعمال والتسويق والإدارة.</li>
        </ul>" : (($lang == 'en') ? "<p> State Academy of Civil Engineering and Architecture of Odessa is the successor of the glorious traditions of the School of Odessa Building Workers of the Odessa Department (Novorossiysk) of the Imperial Russian Technical Society from 1891. </p>
        <p>In 1918, to prepare the engineers-builders, an engineering faculty was created at the Polytechnic Institute.</p>
        <p>At its base was opened in 1930 a university of the construction sector, the Institute of Engineering and Construction of Odessa (OISI), which changed its name over the years. Resolution No. 244 of 24 April 1994 of the Cabinet of Ministers of Ukraine established the State Academy of Civil Engineering and Architecture of Odessa on the basis of the Institute of Engineering and Construction of 'Odessa.</p>
        <p>The Academy offers courses and programs leading to officially recognized higher education degrees, such as bachelor's degrees in several fields of study. </p>
        <ul class='list-group'>
            <li class='list-group-item'>Architecture, </li>
            <li class='list-group-item'>Fine arts, </li>
            <li class='list-group-item'>Civil Engineering, </li>
            <li class='list-group-item'>Water resources,</li>
            <li class='list-group-item'>business economics and marketing and management.</li>
        </ul>" : "<p> Académie d’État de génie civil et d’architecture d’Odessa est le successeur des glorieuses traditions de l’École des ouvriers du bâtiment d’Odessa du département d’Odessa (Novorossiysk) de la Société technique russe impériale à partir de 1891. </p>
        <p>En 1918, afin de préparer les ingénieurs-constructeurs, une faculté d'ingénierie est créée à l'Institut polytechnique.</p>
        <p>C'est à sa base qu'a été ouverte en 1930 une université du secteur de la construction, l'Institut d'ingénierie et de construction d'Odessa (OISI), qui a changé de nom au fil des années. La résolution n ° 244 du 24 avril 1994 du Cabinet des ministres de l'Ukraine a créé l'Académie d'État du génie civil et de l'architecture d'Odessa sur la base de l'Institut d'ingénierie et de construction d'Odessa.</p>
        <p>L'Académie propose des cours et des programmes menant à des diplômes d'enseignement supérieur officiellement reconnus, tels que des diplômes de licence dans plusieurs domaines d'études. </p>
        <ul class='list-group'>
            <li class='list-group-item'>Architecture, </li>
            <li class='list-group-item'>Beaux-arts, </li>
            <li class='list-group-item'>Génie civil, </li>
            <li class='list-group-item'>Ressources en eau,</li>
            <li class='list-group-item'>économie des entreprises et de marketing et management .</li>
        </ul>")); ?>
        
    </div>
</div>


<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
