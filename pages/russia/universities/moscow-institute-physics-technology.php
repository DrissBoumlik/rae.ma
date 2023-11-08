
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("معهد موسكو للفيزياء والتكنولوجيا ، مدينة موسكو","Moscow Institute of Physics and Technology, Moscow City","Institut de Physique et de Technologie de Moscou, ville Moscou");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الروسية", "russian universities", "Universités Russes");
    feature_txt($txt, "russia");
?>



<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "معهد موسكو للفيزياء والتكنولوجيا ، مدينة موسكو" : (($lang == 'en') ? "Moscow Institute of Physics and Technology, Moscow City" : "Institut de Physique et de Technologie de Moscou, ville Moscou")); ?></h2>
    </div></div>
    <div class="post-img"><img src="images/universities/russia/1.png" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p>تأسست في عام 1951 ، ومعهد موسكو للفيزياء والتكنولوجيا (MIPT) هي واحدة من أعرق المؤسسات التعليمية والتدريس في العالم. MIPT هي الجامعة التقنية الرئيسية في البلاد ، مرتبة في الترتيب المرموق لأفضل الجامعات في العالم. لدينا برامج تعليمية في مجالات الفيزياء الأساسية والتطبيقية والرياضيات وعلوم الكمبيوتر والكيمياء والبيولوجيا وتكنولوجيا الكمبيوتر وغيرها من العلوم الطبيعية والأساسية. اليوم ، MIPT هو مركز البحوث المتقدمة.</p>
        <p>تم إنشاء معهد الفيزياء والتكنولوجيا في موسكو (MIPT) من قبل الحائزين على جائزة نوبل بيوتر كابتسا ، نيكولاي سيميونوف وليف لانداو. تدرب المتخصصين المؤهلين تأهيلا عاليا في الفيزياء النظرية والتطبيقية والرياضيات التطبيقية وعلوم الكمبيوتر والتكنولوجيا الحيوية والتخصصات ذات الصلة. يعرف MIPT أيضا باسم Phystech بشكل غير رسمي.</p>
        <hr>
        <h2>الدورات المقدمة:
        </h2><h2>IT</h2>
        <p>يعتمد برنامج الكمبيوتر على أسس نظرية الكمبيوتر والبرمجة. فهو يوفر المعرفة والمهارات التي توفر أساسًا قويًا لتطبيق العمليات الرقمية بفعالية على القضايا ذات الاهتمام العام للمجتمع العالمي. توفر الدورة أيضًا فرصًا في البحث الجامعي والدراسات الدولية.</p>
        <p>يوفر هذا البرنامج مجموعة من الدورات التدريبية التلقائية والمرنة. هذا يسمح للطالب لخلق مستقبل استثنائي في مجال الحوسبة.</p>
        <p>الهدف من البرنامج هو تدريب المتخصصين المؤهلين تأهيلا عاليا في مجال البرمجة. بدءًا من الرياضيات المنفصلة إلى تكنولوجيا الإنترنت ، يشارك طلابنا في الأبحاث والدراسات الأساسية في هذه المجالات.</p>
        <hr>
        <h2>هندسة الطيران</h2>
        <p>هندسة الفضاء الجوي هو فرع أساسي من الهندسة التي تتعامل مع تطور الطائرات والمركبات الفضائية.</p>
        <p>توفر هندسة الطيران والفضاء للطلاب المعرفة والمهارات العملية التي تعتبر مهمة لتطوير وإنتاج أنظمة الفضاء الجوي. بالإضافة إلى ذلك ، فإنه يتضمن مبادئ الاقتصاد الجزئي والهياكل ، ودراسة الوحدات المتخصصة في أداء الطائرات ، بما في ذلك الديناميكا الهوائية المتقدمة ، والدورات الاختيارية في مجالات ميكانيكا الجسم القابلة للتشوه ، الطيران والفضاء.</p>
        <p>يوفر MIPT درجة موقف جيد للفرص وظيفية في قطاع الطيران، وكذلك لشغل مناصب في الشركات الخاصة والقطاع العام وفي المدارس العليا.</p>
        <hr>
        <h2>الهندسة الطبية الحيوية</h2>
        <p>الهندسة الطبية الحيوية هو برنامج جامعي للطلاب الذين يرغبون في تطوير الأدوات التي يحتاجونها ليصبحوا قادة في مجال الهندسة الطبية الحيوية في القرن الحادي والعشرين.</p>
        <p>توفر الدورة أساسًا متينًا في الهندسة الأساسية والرياضيات والعلوم الطبيعية: علم الأحياء والكيمياء والفيزياء. أهداف التدريب المهني في برنامج البكالوريوس في الهندسة الطبية هي الأجهزة الطبية الأساسية ، النظم ، المجمعات والتقنيات ، بالإضافة إلى أساليب البحث ، معالجة المعلومات في الرعاية الصحية العملية والمتنوعة مجالات البحوث الطبية الحيوية.</p>
        <hr>
        <h2>الكليات</h2>
        <ul class='list-group'>
            <li class='list-group-item'>راديو و هندسة Cybernetic</li>
            <li class='list-group-item'>الفيزياء العامة والتطبيقية</li>
            <li class='list-group-item'>البحوث الفضائية والفضائية</li>
            <li class='list-group-item'>الفيزياء الجزيئية والبيولوجية</li>
            <li class='list-group-item'>الالكترونيات الفيزيائية والكمية</li>
            <li class='list-group-item'>الميكانيكا الجوية وهندسة الطيران</li>
            <li class='list-group-item'>الرياضيات التطبيقية والتحكم</li>
            <li class='list-group-item'>المشاكل المادية والطاقة</li>
            <li class='list-group-item'>الابتكار والتكنولوجيا العالية</li>
            <li class='list-group-item'>تقنيات النانو ، الحيوية ، المعلوماتية والإدراكية</li>
        </ul>" : (($lang == 'en') ? "<p>Founded in 1951, the Moscow Institute of Physics and Technology (MIPT) is one of the most prestigious research and teaching institutions in the world. MIPT is the main technical university of the country, ranked in the prestigious ranking of the best universities in the world. We have educational programs in the fields of fundamental and applied physics, mathematics, computer science, chemistry, biology, computer technology and other natural and fundamental sciences. Today, MIPT is the advanced research center.</p>
        <p>The Institute of Physics and Technology of Moscow (MIPT) was created by Nobel laureates Pyotr Kapitsa, NikolaySemyonov and Lev Landau. It trains highly qualified specialists in theoretical and applied physics, applied mathematics, computer science, biotechnology and related disciplines. MIPT is also known as Phystech informally.</p>
        <hr>
        <h2>Courses offered:
        </h2><h2>Computing</h2>
        <p>The computer program is based on the foundations of computer theory and programming. It provides the knowledge and skills that provide a solid foundation for effectively applying digital processes to issues of general interest to the global society. The course also offers opportunities in undergraduate research and international studies.</p>
        <p>This program provides a spontaneous and flexible set of courses. This allows a student to create an exceptional future in the field of computing.</p>
        <p>The objective of the program is to train highly qualified specialists in the field of programming. Ranging from discrete mathematics to Internet technology, our students are engaged in fundamental research and studies in these areas.</p>
        <hr>
        <h2>Aerospace Engineering</h2>
        <p>Aerospace engineering is a fundamental branch of engineering that deals with the development of aircraft and spacecraft.</p>
        <p>Aerospace Engineering provides students with the knowledge and practical skills that are important for the development and production of aerospace systems. In addition, it includes the principles of microeconomics and structures, the study of specialized modules in aircraft performance, including advanced aerodynamics, elective courses in the fields of deformable body mechanics, the aviation and spaceflight.</p>
        <p>MIPT offers a well-placed degree for career opportunities in the aerospace industry, as well as for positions in private companies, the public sector and postgraduate schools.</p>
        <hr>
        <h2>Biomedical genius</h2>
        <p>Biomedical Engineering is an undergraduate program for students who want to develop the tools they need to become a leader in the field of biomedical engineering in the 21st century.</p>
        <p>The course provides a solid foundation in basic engineering, mathematics and natural sciences: biology, chemistry and physics. The objects of professional training in the Bachelor of Biomedical Engineering program are basic medical devices, systems, complexes and technologies, as well as research methods, information processing in practical health care and miscellaneous areas of biomedical research.</p>
        <hr>
        <h2>FACULTIES</h2>
        <ul class='list-group'>
            <li class='list-group-item'>Radio and Cybernetic Engineering</li>
            <li class='list-group-item'>General and Applied Physics</li>
            <li class='list-group-item'>Aerophysical and space research</li>
            <li class='list-group-item'>Molecular and biological physics</li>
            <li class='list-group-item'>Physical and quantum electronics</li>
            <li class='list-group-item'>Aeromechanics and Flight Engineering</li>
            <li class='list-group-item'>Applied Mathematics and Control</li>
            <li class='list-group-item'>Physical and energy problems</li>
            <li class='list-group-item'>Innovation and high technology</li>
            <li class='list-group-item'>Nano, bio, informational and cognitive technologies</li>
        </ul>" : " <p>Fondé en 1951, l'Institut de physique et de technologie de Moscou (MIPT) est l'une des institutions de recherche et d'enseignement les plus prestigieuses au monde. MIPT est la principale université technique du pays, classée dans le prestigieux classement des meilleures universités du monde. Nous avons des programmes éducatifs dans les domaines de la physique fondamentale et appliquée, des mathématiques, de l'informatique, de la chimie, de la biologie, des technologies de l'informatique et d'autres sciences naturelles et fondamentales. Aujourd'hui, le MIPT est le centre de recherche avancée.</p>
        <p>L’Institut de physique et de technologie de Moscou (MIPT) a été créé par les lauréats du prix Nobel Pyotr Kapitsa, NikolaySemyonov et Lev Landau. Il forme des spécialistes hautement qualifiés en physique théorique et appliquée, en mathématiques appliquées, en informatique, en biotechnologie et dans les disciplines connexes. MIPT est également connu sous le nom de Phystech de manière informelle.</p>
        <hr>
        <h2>Cours offerts :</h>
        <h2>L'informatique</h2>
        <p>Le programme d'informatique est basé sur les fondements de la théorie informatique et de la programmation. Il fournit les connaissances et les compétences qui constituent une base solide pour appliquer efficacement les processus numériques aux problèmes d’intérêt général pour la société mondiale. Le cours offre également des opportunités en recherche de premier cycle et en études internationales.</p>
        <p>Ce programme fournit un ensemble de cours spontané et flexible. Cela permet à un étudiant de créer un avenir exceptionnel dans le domaine de l'informatique.</p>
        <p>L'objectif du programme est de former des spécialistes hautement qualifiés dans le domaine de la programmation. Allant des mathématiques discrètes à la technologie Internet, nos étudiants sont engagés dans des recherches et des études fondamentales dans ces domaines.</p>
        <hr>
        <h2>Génie aérospatial</h2>
        <p>Le génie aérospatial est une branche fondamentale de l’ingénierie qui concerne le développement des aéronefs et des engins spatiaux.</p>
        <p>Le génie aérospatial fournit aux étudiants les connaissances et les compétences pratiques qui sont importantes pour le développement et la production de systèmes aérospatiaux. En outre, il inclut les principes de la microéconomie et des structures, l’étude de modules spécialisés dans les performances des aéronefs, y compris l’aérodynamique avancée, les cours à option dans les domaines de la mécanique des corps déformables, de l’aviation et du vol spatial.</p>
        <p>MIPT offre un diplôme bien placé pour les opportunités de carrière dans l'industrie aérospatiale, ainsi que pour des postes dans des entreprises privées, dans le secteur public et dans des écoles de troisième cycle.</p>
        <hr>
        <h2>Génie biomédical</h2>
        <p>Le génie biomédical est un programme de premier cycle destiné aux étudiants qui souhaitent se doter des outils nécessaires pour devenir un chef de file dans le domaine du génie biomédical au XXIe siècle.</p>
        <p>Le cours fournit une base solide en ingénierie fondamentale, en mathématiques et en sciences naturelles: biologie, chimie et physique. Les objets de la formation professionnelle au programme de baccalauréat en génie biomédical sont les appareils, les systèmes, les complexes et les technologies médicales de base, ainsi que les méthodes de recherche, le traitement de l’information dans les soins de santé pratiques et divers domaines de la recherche biomédicale.</p>
        <hr>
        <h2>FACULTES</h2>
        <ul class='list-group'>
            <li class='list-group-item'>Ingénierie Radio et Cybernétique</li>
            <li class='list-group-item'>Physique générale et appliquée</li>
            <li class='list-group-item'>Recherche aérophysique et spatiale</li>
            <li class='list-group-item'>Physique moléculaire et biologique</li>
            <li class='list-group-item'>Electronique physique et quantique</li>
            <li class='list-group-item'>Aéromécanique et ingénierie de vol</li>
            <li class='list-group-item'>Mathématiques appliquées et contrôle</li>
            <li class='list-group-item'>Problèmes de physique et d’énergie</li>
            <li class='list-group-item'>Innovation et haute technologie</li>
            <li class='list-group-item'>Technologies nano, bio, informationnelles et cognitives</li>
        </ul>")); ?>
    </div>
</div>



<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
