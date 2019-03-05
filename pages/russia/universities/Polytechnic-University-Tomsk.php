
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("جامعة البوليتكنيك في تومسك ، تومسك سيتي","Polytechnic University of Tomsk, Tomsk City","Université Polytechnique de Tomsk");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الروسية", "russian universities", "Universités Russes");
    feature_txt($txt, "russia");
?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "جامعة البوليتكنيك في تومسك ، تومسك سيتي" : (($lang == 'en') ? "Polytechnic University of Tomsk, Tomsk City" : "Université Polytechnique de Tomsk")); ?></h2>
    </div></div>
    <div class="post-img"><img src="/images/universities/russia/3.png" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p>جامعة Tomsk Polytechnic هي أقدم جامعة تقنية روسية تقع شرق الأورال.</p>
        <p>تأسست UPT في عام 1896 وافتتحت في عام 1900 باسم معهد Tomsk التكنولوجي. في عام 1923 ، أعيدت تسميتها 'معهد سيبيريا التكنولوجي' ، وفي عام 1930 ، تم تقسيم المعهد إلى خمسة أقسام ، ثلاثة منها ظلت في تومسك. في عام 1934 ، اتحدت معاهد تومسك الثلاثة لتشكيل معهد جديد يسمى 'معهد البوليتكنيك في تومسك'.</p>
        <p>تعلِّم جامعة UPT أكثر من 22000 طالبًا ولديها أكثر من 130 ألف خريج من الخريجين في مختلف التخصصات التقنية. تقدم UPT 25 وجهة و 86 تخصصًا. يعمل في موظفي UPT 2300 متخصص ، من بينهم 2000 أساتذة.</p>
        <p>أنشأت جامعة UPT شبكة عالمية من التعاون العلمي والأكاديمي ، والعقود العلمية ، وتبادل الطلاب ، وطلاب الدكتوراه ، وأساتذة الجامعات ، والدراسات. وهي تتعاون بشكل أكثر تحديدًا مع جامعة ولاية أوهايو وجامعة ولاية ميشيغان ومعهد جوته. لديها مكاتب في كارلسروه وبراغ ونيقوسيا.</p>
        <p>تشارك في اتحادات مشاريع الجامعات الأوروبية. وهي عضو في شبكة Top Man Administrators for Europe (TIME) لتبادل الطلاب في أوروبا وشبكة Cluster Network.</p>
        <h3>المعاهد</h3>
        <ul class='list-group'>
            <li class='list-group-item'>معهد التعليم الدولي</li>
            <li class='list-group-item'>معهد اللغات والتواصل</li>
            <li class='list-group-item'>معهد الهندسة الجيولوجية وصناعات الغاز والنفط</li>
            <li class='list-group-item'>معهد الهندسة الكهربائية</li>
            <li class='list-group-item'>معهد Cybernetic Centre</li>
            <li class='list-group-item'>معهد التعلم عن بعد</li>
            <li class='list-group-item'>معهد الهندسة التربوية</li>
            <li class='list-group-item'>معهد الإدارة الدولية</li>
        </ul>
        <h3>كليات</h3>
        <ul class='list-group'>
            <li class='list-group-item'>كلية الفيزياء التطبيقية والهندسة الفيزيائية</li>
            <li class='list-group-item'>كلية الفيزياء الكهربائية والمعدات الإلكترونية</li>
            <li class='list-group-item'>كلية الهندسة الميكانيكية</li>
            <li class='list-group-item'>كلية الكيمياء والهندسة الكيميائية</li>
            <li class='list-group-item'>كلية الهندسة الحرارية والطاقة</li>
            <li class='list-group-item'>كلية الاقتصاد والإدارة</li>
            <li class='list-group-item'>كلية العلوم الانسانية</li>
            <li class='list-group-item'>كلية العلوم الطبيعية والرياضيات</li>
        </ul>" : (($lang == 'en') ? "<p>Tomsk Polytechnic University is the oldest Russian technical university east of the Urals.</p>
        <p>UPT was founded in 1896 and inaugurated in 1900 as the Tomsk Technological Institute. In 1923, it was renamed 'Siberian Technological Institute' and in 1930, the Institute was split into five divisions, three of which remained in Tomsk. In 1934, the three institutes of Tomsk are united to form a new institute which is named 'Polytechnic Institute of Tomsk'.</p>
        <p>UPT University teaches more than 22,000 students and has over 130,000 alumni graduates in various technical specialties. The UPT offers 25 orientations and 86 specialties. The UPT staff has 2,300 specialists, 2,000 of whom are professors.</p>
        <p>UPT University has established a worldwide network of scientific and academic cooperation, scientific contracts, exchange of students, PhD students, professors, studies. She cooperates more particularly with the Ohio State University, Michigan State University and the Goethe-Institute. It has offices in Karlsruhe, Prague and Nicosia.</p>
        <p>She participates in consortia of European university projects. She is a member of the Top Industrial Managers for Europe (TIME) network for student exchanges in Europe and the Cluster Network.</p>
        <h3>institutes</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Institute of International Education</li>
            <li class='list-group-item'>Institute of Languages &#8203;&#8203;and Communication</li>
            <li class='list-group-item'>Institute of Geological Engineering and the Gas and Oil Industries</li>
            <li class='list-group-item'>Institute of Electrical Engineering</li>
            <li class='list-group-item'>Cybernetic Center Institute</li>
            <li class='list-group-item'>Distance Learning Institute</li>
            <li class='list-group-item'>Institute of Pedagogical Engineering</li>
            <li class='list-group-item'>Institute of International Management</li>
        </ul>
        <h3>faculties</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Faculty of Applied Physics and Physical Engineering</li>
            <li class='list-group-item'>Faculty of Electrophysics and Electronic Equipment</li>
            <li class='list-group-item'>Faculty of Mechanical Engineering</li>
            <li class='list-group-item'>Faculty of Chemistry and Chemical Engineering</li>
            <li class='list-group-item'>Faculty of Thermal Engineering and Energy</li>
            <li class='list-group-item'>Faculty of Economics and Management</li>
            <li class='list-group-item'>Faculty of Human Sciences</li>
            <li class='list-group-item'>Faculty of Natural Sciences and Mathematics</li>
        </ul>        
    </div>" : "<p>Université Polytechnique de Tomsk est la plus ancienne université technique russe à l'est de l'Oural.</p>
        <p>UPT a été fondée en 1896 et inaugurée en 1900 en tant qu'Institut technologique de Tomsk. En 1923, elle a été rebaptisée « Institut technologique de Sibérie » et en 1930, l'Institut a été scindé en cinq divisions, dont trois sont restées à Tomsk. En 1934, les trois instituts de Tomsk sont réunis pour former un nouvel institut qui est nommé « Institut polytechnique de Tomsk ».</p>
        <p>l’université UPT enseigne à plus de 22 000 étudiants et compte plus de 130 000 anciens élèves diplômés en diverses spécialités techniques. L'UPT offre 25 orientations et 86 spécialités. Le personnel de l'UPT compte 2 300 spécialistes dont 2 000 sont professeurs.</p>
        <p>L'université UPT a établi un réseau mondial de coopération scientifique et académique, contrats scientifiques, échange d’étudiants, de thésards, de professeurs, études. Elle coopère plus particulièrement avec l'université de l'État de l'Ohio, l'université de l'État du Michigan et le Goethe-Institut. Elle possède des bureaux à Karlsruhe, Prague et Nicosie.</p>
        <p>Elle participe à des consortia de projets universitaires européens. Elle est membre du réseau TIME (Top Industrial Managers for Europe) d'échanges d'étudiants en Europe et du Réseau Cluster.</p>
        <h3>Instituts</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Institut de l’Enseignement International</li>
            <li class='list-group-item'>Institut des Langues et de la Communication</li>
            <li class='list-group-item'>Institut de Génie Géologique et des Industries du Gaz et du Pétrole</li>
            <li class='list-group-item'>Institut de Génie électrique</li>
            <li class='list-group-item'>Institut Centre Cybernétique</li>
            <li class='list-group-item'>Institut de Formation à Distance</li>
            <li class='list-group-item'>Institut de Génie pédagogique</li>
            <li class='list-group-item'>Institut du Management International</li>
        </ul>
        <h3>Facultés</h3>
        <ul class='list-group'>
            <li class='list-group-item'>Faculté de Physique Appliquée et de Génie Physique</li>
            <li class='list-group-item'>Faculté d'Electrophysique et d’Equipement électronique</li>
            <li class='list-group-item'>Faculté de Génie Mécanique</li>
            <li class='list-group-item'>Faculté de Chimie et de Génie Chimique</li>
            <li class='list-group-item'>Faculté de Génie Thermique et d’Energie</li>
            <li class='list-group-item'>Faculté d’Economie et de Management</li>
            <li class='list-group-item'>Faculté de Sciences Humaines</li>
            <li class='list-group-item'>Faculté de Sciences Naturelles et de Mathématiques</li>
        </ul>")); ?>
        
    </div>
</div>


<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
