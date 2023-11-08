
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("جامعة ولاية الشيشان ، مدينة غروزني","Chechen State University, Grozny city","Université d'État Tchétchéne, ville Grozny");
    title_page($title);
?>


<?php include $path.'/layouts/feature.php';
    $txt = get_lang_text("الجامعات الروسية", "russian universities", "Universités Russes");
    feature_txt($txt, "russia");
?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""><?php echo (($lang == 'ar') ? "جامعة ولاية الشيشان ، مدينة غروزني" : (($lang == 'en') ? "Chechen State University, Grozny city" : "Université d'État Tchétchéne, ville Grozny")); ?></h2>
    </div></div>
    <div class="post-img"><img src="images/universities/russia/edugain_chesu.jpg" alt=""></div>
    <div class="post-txt"><?php echo (($lang == 'ar') ? "<p></p><p><strong>حول CheSU</strong></p><strong>
                    </strong><p><strong></strong></p>
                    <p>يعود تاريخ جامعة الشيشان إلى 7 فبراير عام 1938 ، وهو عام تأسيس معهد تدريب المعلم غروزني ، والذي استمر عامين. أعيد تنظيم المعهد في جامعة الشيشان إنغوش الحكومية في 9 مارس 1971 ، واسمه الجديد ليف نيكولاييفيتش تولستوي. وفي ٢٨ شباط / فبراير ١٩٩٥ ، أعيدت تسمية جامعة وﻻية الشيشان - إنغوش ، التي سميت باسم ليف نيكولاييفيتش تولستوي ، بجامعة ولاية الشيشان.&nbsp;<br>
                        حاليا حوالي 15000 طالب بدوام كامل يأخذون دورات في جامعة ولاية الشيشان ، 10 كليات و 4 معاهد تقود عملية التعلم.<br>
                        يخدم مركز الاستخدام الجماعي للجامعة كنقطة انطلاق للموظفين والطلاب لتمكينهم من إجراء البحوث في المجالات ذات الأولوية للتنمية العلمية والتكنولوجية.&nbsp;<br>
                        التدريس في جامعة ولاية الشيشان يمثل بداية مسار كبير إلى وظيفة واعدة (قابلة للحياة) ومستقبل مهني ناجح. يتم تنفيذ عملية التدريس في الجامعة (المقدمة) في تسع كليات وخمس معاهد. <br>
                        يتم تنظيم العملية التعليمية باستخدام التقنيات الحديثة. تم تجهيز الفصول الدراسية بلوحات بيضاء تفاعلية ، وهي ضرورية لعقد مؤتمرات الفيديو.يمتلك الطلاب موارد واسعة من المكتبات عبر الإنترنت وقواعد البيانات الروسية والدولية. تولي إدارة الجامعة أهمية كبيرة لتطوير الحركة الأكاديمية للمحاضرين وتشارك بنشاط في دعوة المستكشفين الأجانب والأجانب (العلماء) المعترف بهم في البيئة العلمية والتعليمية. <br>
                        تقدم الجامعة مجالات مختلفة من التدريب في التخصص ، برامج البكالوريوس والماجستير ، بالإضافة إلى دورات الدراسات العليا.</p>
                        <p><strong><br>
                            المعاهد والكليات</strong></p><strong>
                            </strong><p><strong></strong></p>
                            <p>معهد الطب <br>
                                كلية تكنولوجيا <br>
                                المعلومات <br>
                                معهد تكنولوجيا الزراعية معهد الاقتصاد ومعهد المالية في <br>
                                الأحياء والكيمياء كلية الفيزياء وتكنولوجيا المعلومات والاتصالات <br>
                                كلية الرياضيات وعلوم الحاسبات <br>
                                كلية الجغرافيا والجيولوجيا <br>
                                قسم القانون الدولي</p>
                                <p><strong><br>
                                    عن المدينة</strong></p><strong>
                                    </strong><p><strong></strong></p>
                                    <p>غروزني ، كما وردت غروزني ، مدينة وعاصمة جمهورية الشيشان ، روسيا.&nbsp;<br>
                                        غروزني هي مدينة في روسيا ، عاصمة جمهورية الشيشان ، وتقع على ضفتي نهر سونزها ، أحد روافد نهر تيريك. <br>
                                        مناخ مدينة غروزني هو طقس قاري معتدل مع شتاء معتدل وصيف طويل حار. متوسط &#8203;&#8203;درجة الحرارة في يناير هو -2 درجة ، في يوليو - +24 درجة. <br>
                                        وقد تم الانتهاء من إعادة بناء المدينة على نطاق واسع في السنوات الأخيرة. يقدم المطار 'جروزني' رحلات إلى موسكو.<br>
                                        في وسط المدينة ، يمكنك رؤية مجمع إسلامي كبير بمساحة إجمالية تبلغ 14 هكتار تقريبًا. <br>
                                        على أرضه هو مسجد 'قلب 'الشيشان' (الأكبر في أوروبا). <br>
                                        غروزني هي مسقط رأس نادي كرة القدم الروسي 'إف سي تيريك' الذي يلعب في ملعب سلطان بليمخانوف.</p>" : (($lang == 'en') ? "<p></p><p><strong>About CheSU</strong></p><strong>
</strong><p><strong></strong></p>
<p>Chechen State University dates back to 7 February 1938 when Grozny Teacher Training Institute was founded with a two-year study period. The Institute was reorganized into Chechen-Ingush State University on 9 March 1971 and the new place received the name of Lev Nikolayevich Tolstoy. On 28 February 1995, Chechen-Ingush State University named after Lev Nikolayevich Tolstoy was renamed into Chechen State University.&nbsp;<br>
    Currently around 15000 full-time students are receiving education at the Chechen State University, 10 Faculties and 4 Institutes lead the learning process.<br>
    The Centre of Collective Use at the University serves as a launch pad for the staff and students to conduct research in priority development areas of science and technology.&nbsp;<br>
    Education at Chechen State University is the beginning of the big way to a promising (viable) employment and a successful career. The teaching process at the University is operated (provided) at nine faculties and five institutes.<br>
    Educational Process is organised using modern technologies. The classrooms are equipped with interactive whiteboards, hardware essential for videoconferences. Extensive resources of online-library, both Russian and international databases are at students’ service. The university administration assigns (attaches) great importance to the development of academic mobility of the lecturers and works actively on inviting Russian and foreign explorers (scientists) well-known in the scientific and educational environment.<br>
    The university offers different areas of training in specialist’s, bachelor’s and master’s programs, as well as postgraduate course.</p>
    <p><strong><br>
        Institutes and faculties</strong></p><strong>
        </strong><p><strong></strong></p>
        <p>Institute of Medicine<br>
            Faculty of Information Technology<br>
            Agriculture technology institute<br>
            Institute of Economics and Finance<br>
            Biology and Department of Chemistry Faculty of Physics and Information and Communication Technologies<br>
            Faculty of Mathematics and Computer Science<br>
            Faculty of Geography and Geoecology<br>
            International Law department</p>
            <p><strong><br>
                About city</strong></p><strong>
                </strong><p><strong></strong></p>
                <p>Grozny, also spelled Groznyy, city and capital of the republic of Chechnya, Russia.&nbsp;<br>
                    Grozny is a city in Russia, the capital of the Chechnya Republic, standing on both banks of the Sunzha River, the tributary of the Terek River.<br>
                    Grozny city climate is temperate continental with mild winters, long and hot summers. The average temperature in January is -2 degrees, in July – +24 degrees.<br>
                    Large-scale reconstruction of the city was carried out in recent years. The airport “Grozny” offers flights to Moscow.<br>
                    In the center of the city, you can see a large Islamic complex with a total area of almost 14 hectares.<br>
                    On its territory, there are the mosque “Heart of Chechnya” (the largest in Europe).<br>
                    Grozny is the home city of the Russian Premier League football club “FC Terek” playing in Sultan Bilimkhanov stadium.</p>" : "<p></p><p><strong>À propos de CheSU</strong></p><strong>
                    </strong><p><strong></strong></p>
                    <p>L’Université d’État tchétchène-ingouche remonte au 7 février 1938, année de la fondation de l’Institut de formation des enseignants de Grozny, qui durait deux ans. L'institut a été réorganisé en université d'État Tchétchène-Ingouche le 9 mars 1971 et le nouveau lieu a reçu le nom de Lev Nikolayevich Tolstoy. Le 28 février 1995, l'Université d'État tchétchène-ingouche, baptisée Lev Nikolayevich Tolstoï, a été renommée Université d'État tchétchène.&nbsp;<br>
                        Actuellement, environ 15 000 étudiants à plein temps suivent des cours à l'université d'État tchétchène, 10 facultés et 4 instituts dirigent le processus d'apprentissage. <br>
                        Le Centre d’utilisation collective de l’Université sert de tremplin au personnel et aux étudiants pour leur permettre de mener des recherches dans les domaines prioritaires du développement scientifique et technologique.&nbsp;<br>
                        L’enseignement à l’Université d’État Tchétchène-Ingouche marque le début d’un grand chemin vers un emploi prometteur (viable) et une carrière réussie. Le processus d’enseignement à l’Université est mis en œuvre (fourni) dans neuf facultés et cinq instituts. <br>
                        Le processus éducatif est organisé à l'aide de technologies modernes. Les salles de classe sont équipées de tableaux blancs interactifs, matériel indispensable aux vidéoconférences. Les étudiants disposent de vastes ressources de bibliothèques en ligne, de bases de données russes et internationales. L’administration de l’université attache une grande importance au développement de la mobilité universitaire des conférenciers et s’emploie activement à inviter des explorateurs russes et étrangers (scientifiques) reconnus dans l’environnement scientifique et éducatif.<br>
                        L'université propose différents domaines de formation dans les programmes de spécialisation, de baccalauréat et de maîtrise, ainsi que des cours de troisième cycle.</p>
                        <p><strong><br>
                            Instituts et facultés</strong></p><strong>
                            </strong><p><strong></strong></p>
                            <p>Institut de médecine <br>
                                Faculté des technologies de <br>
                                l'information <br>
                                Institut de technologie agricole Institut d'économie et finances Institut de <br>
                                biologie et de chimie Faculté de physique et des technologies de l'information et de la communication <br>
                                Faculté de mathématiques et d'informatique <br>
                                Faculté de géographie et géoécologie <br>
                                Département de droit international</p>
                                <p><strong><br>
                                    À propos de la ville</strong></p><strong>
                                    </strong><p><strong></strong></p>
                                    <p>Grozny, également orthographié Groznyy, ville et capitale de la république de Tchétchénie, en Russie.&nbsp;<br>
                                        Grozny est une ville de Russie, capitale de la République tchétchène, située sur les deux rives du fleuve Sunzha, affluent du fleuve Terek. <br>
                                        Le climat de la ville de Grozny est continental tempéré avec des hivers doux et des étés longs et chauds. La température moyenne en janvier est de -2 degrés, en juillet - +24 degrés. <br>
                                        Une reconstruction à grande échelle de la ville a été réalisée ces dernières années. L'aéroport 'Grozny' propose des vols pour Moscou. <br>
                                        Au centre de la ville, vous pouvez voir un grand complexe islamique d'une superficie totale de près de 14 hectares.<br>
                                        Sur son territoire se trouve la mosquée 'Cœur de la Tchétchénie' (la plus grande d'Europe). <br>
                                        Grozny est la ville natale du club de football russe «FC Terek», qui évolue dans le stade Sultan Bilimkhanov.</p>")); ?>
    </div>
</div>


<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>
