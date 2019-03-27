<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("روسيا","Russia","Russie");
    title_page($title,4)
?>


<?php include $path.'/layouts/feature.php';
    $txt = "L'éducation en Russie";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("L'éducation en Russie", "التعليم في روسيا", "Education in russia");
    }
    feature_txt($txt, "russia");
?>

<div class="sup-study">
    <div class="">
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "التعليم في روسيا" : (($lang == 'en') ? "Education in Russia" : "L'éducation en Russie")); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo (($lang == 'ar') ? "<p>روسيا بلا شك هي الوجهة المفضلة للطلاب من جميع أنحاء العالم. مع أراضيها الشاسعة ، يوجد في البلاد مئات الجامعات في المدن الكبرى. خلال دراستهم في روسيا ، الأجانب لديهم فرصة كبيرة لاكتساب المعرفة والمهارات الممتازة في مجال التعليم ، وكذلك لتعلم اللغة الروسية ، ليشعر بجو أصيل للغة الروسية. الضيافة الروسية ، ومراقبة والتراث الثقافي والجمال الأصيل للطبيعة الروسية - المناظر الطبيعية الرائعة للبلاد والجبال الجميلة والمناظر الطبيعية للبحر والبحر.</p>
                        <p><strong>في العام الماضي وحده ، ارتفع عدد الطلاب الأجانب في الجامعات الروسية بنسبة 40 ٪ إلى أكثر من 250،000.</strong></p>
                        <p>يتجاوز التعليم العالي في روسيا حدودًا جديدة من خلال أن يصبح منافسًا أقوى للجامعات الأوروبية.</p>" : (($lang == 'en') ? "<p>Russia is undoubtedly a destination of choice for students from all over the world. With its vast territory, the country has hundreds of universities in major cities. During their studies in Russia, foreigners have the great opportunity to acquire excellent knowledge and skills in the field of education, as well as to learn the Russian language, to feel the authentic atmosphere of the Russian language. Russian hospitality, observe the and cultural heritage and authentic beauty of Russian nature - wonderful country landscapes, beautiful mountains and lake and seascapes landscapes.</p>
                        <p><strong>In the last year alone, the number of foreign students in Russian universities has increased by 40% to more than 250,000.</strong></p>
                        <p>Higher education in Russia crosses new frontiers by becoming a stronger competitor of European universities.</p>" : "<p>La Russie est sans aucun doute une destination de choix pour les étudiants du monde entier. Avec son vaste territoire, le pays compte des centaines d'universités dans les grandes villes. Pendant leurs études en Russie, les étrangers ont l’occasion formidable d’acquérir des connaissances et des compétences excellentes dans le domaine de l’éducation, ainsi que par l’apprentissage de la langue russe, de ressentir l’atmosphère authentique de l’hospitalité russe, d’observer le et patrimoine culturel et beauté authentique de la nature russe - merveilleux paysages de pays, magnifiques montagnes et paysages lacustres et marins. </p>
                        <p><strong>Au cours de la dernière année seulement, le nombre d'étudiants étrangers dans les universités russes a augmenté de 40% et s'est élevé à plus de 250 000 personnes. </strong></p>
                        <p>L'enseignement supérieur en Russie franchit de nouvelles frontières en devenant un concurrent plus fort des universités européennes.")); ?></p>
                    </div>
                </div>            
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "التعليم العالي الروسي" : (($lang == 'en') ? "RUSSIAN HIGHER EDUCATION" : "ENSEIGNEMENT SUPERIEUR RUSSE")); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo (($lang == 'ar') ? "هناك ثلاثة أنواع رئيسية من مؤسسات التعليم العالي في روسيا. هم الجامعات والأكاديميات والمعاهد." : (($lang == 'en') ? "There are three main types of higher education institutions in Russia. They are universities, academies and institutes." : "Il existe trois types principaux d’établissements d’enseignement supérieur en Russie. Ce sont des universités, académies et instituts.")); ?></p>
                        <ul class="list-group">
                            <li class="list-group-item"><?php echo (($lang == 'ar') ? "تقدم الجامعات مجموعة واسعة من البرامج على أعلى مستوى من التعليم." : (($lang == 'en') ? "Universities offer a wide range of programs on the highest level of education." : "Les universités offrent un large éventail de programmes sur le plus haut niveau d’éducation.")); ?></li>
                            <li class="list-group-item"><?php echo (($lang == 'ar') ? "توفر الأكاديميات التعليم العالي على جميع المستويات وتنفذ عددًا كبيرًا من الأعمال البحثية ، وعادةً ما تكون متخصصة في فرع مثل العلوم أو الفن أو الهندسة المعمارية." : (($lang == 'en') ? "The academies provide higher education at all levels and carry out a large number of research work, usually specialized in a branch such as science, art or architecture." : "Les académies dispensent un enseignement supérieur à tous les niveaux et effectuent un grand nombre de travaux de recherche, généralement spécialisés dans une branche comme la science, l’art ou l’architecture.")); ?></li>
                            <li class="list-group-item"><?php echo (($lang == 'ar') ? "المعاهد هي كيانات مستقلة للجامعات أو الأكاديميات تقدم برامج التدريب المهني." : (($lang == 'en') ? "Institutes are independent entities of universities or academies offering vocational training programs." : "Les instituts sont des entités indépendantes d'universités ou d'académies offrant des programmes de formation professionnelle.")); ?></li>
                        </ul>
                        <p><?php echo (($lang == 'ar') ? "روسيا لديها أكثر من خريجي الجامعات أكثر من أي بلد آخر في أوروبا. لطالما أولت روسيا أهمية كبيرة للعلوم والتكنولوجيا في التعليم ، ومعظم المؤسسات العامة متخصصة في هذا المجال. وهذا أيضا هو المكان الذي يتمتع فيه التعليم العالي الروسي بأفضل السمعة." : (($lang == 'en') ? "Russia has more university graduates than any other country in Europe. Russia has always attached great importance to science and technology in education, and most public institutions are specialized in this field. This is also where Russian higher education has the best reputation." : "La Russie compte plus de diplômés universitaires que tout autre pays d'Europe. La Russie a toujours accordé beaucoup d’importance à la science et à la technologie dans l’éducation, et la plupart des institutions publiques sont spécialisées dans ce domaine. C’est également là que l’enseignement supérieur russe a la meilleure réputation.")); ?></p>
                    </div>
                </div>            
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "نظام التعليم في روسيا:" : (($lang == 'en') ? "Education system in Russia:" : "Système d’éducation en Russie :")); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo (($lang == 'ar') ? "عادة ما يستمر التعليم العالي في روسيا ما بين أربع إلى ست سنوات. تؤدي السنوات الأربع الأولى للدراسة الجامعية بدوام كامل إلى الحصول على درجة البكالوريوس. تُمنح شهادة البكالوريا في جميع المجالات باستثناء الطب ، حيث تستغرق المرحلة الأولى ست سنوات. بمجرد تخرج الطلاب ، يكونون مؤهلين للحصول على برنامج درجة الماجستير المتخصص. يتم منح الماجستير بعد عامين من الدراسة ، واحدة منها هي سنة من البحوث بما في ذلك الممارسة والإعداد والدفاع عن الأطروحة. تم تقديم شهادات البكالوريوس والماجستير لإدخال النظام الروسي في عملية بولونيا." : (($lang == 'en') ? "Higher education in Russia normally lasts between four and six years. The first four years of full-time university studies lead to a bachelor's degree. The baccalaureate is awarded in all fields except medicine, where the first stage lasts six years. Once students have graduated, they are eligible for a specialist and master's degree program. The master is awarded after two years of study, one of which is a year of research including practice, preparation and defense of a thesis. Bachelor's and Master's degrees have been introduced to bring the Russian system into the Bologna Process." : "L’enseignement supérieur en Russie dure normalement entre quatre et six ans. Les quatre premières années d'études universitaires à plein temps mènent à un licence. La licence est décerné dans tous les domaines sauf la médecine, où la première étape dure six ans. 
                        Une fois que les étudiants ont obtenu leur licence, ils sont éligibles pour un programme de diplôme de spécialiste et de master. Le master est délivré après deux années d'études, dont l'une est une année de recherche incluant la pratique, la préparation et la défense d'une thèse. 
                        Des diplômes de licence et de master ont été introduits pour conformer le système russe au processus de Bologne.")); ?></p>
                    </div>
                </div>            
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "الطلاب الدوليين في روسيا" : (($lang == 'en') ? "INTERNATIONAL STUDENTS IN RUSSIA" : "ÉTUDIANTS INTERNATIONAUX EN RUSSIE")); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo (($lang == 'ar') ? "مع تزايد عدد الطلاب الأجانب كل عام ، يمكن للمرء أن يجد طريقة لتدريس اللغة الإنجليزية في جميع الجامعات تقريبًا. أصبحت روسيا أفضل مكان للدراسة في الخارج بسبب الرسوم الدراسية بأسعار معقولة وجودة التعليم. يأتي عدد كبير من الطلاب من الصين وأفريقيا والهند وأمريكا وأوروبا. ومن المزايا المهمة لروسيا هو أنه من الممكن دراسة دون معرفة اللغة الروسية: يمكنك اختيار البرنامج الذي يتم تدريسها باللغة الإنجليزية أو تبدأ مع قسم إعداد وتتبع فصول الروسية لمدة عام أن يمكن أن تكون كافية للتدريب والحياة المريحة في روسيا." : (($lang == 'en') ? "As the number of foreign students increases each year, one can find a way to teach English almost in all universities. Russia has become the best place to study abroad because of affordable tuition fees and the quality of education. A large number of students come from China, Africa, India, America and Europe. An important advantage of Russia is that it is possible to study without knowing the Russian language: you can choose a program that is taught in English or start with the preparation department and take a Russian course for one year. could be enough for training and comfortable life in Russia." : "Comme le nombre d'étudiants étrangers augmente chaque année, on peut trouver un moyen d'enseigner l'anglais presque dans toutes les universités. La Russie est devenue le meilleur endroit pour étudier à l'étranger en raison des frais de scolarité abordables et de la qualité de l'éducation. Un grand nombre d'étudiants viennent de Chine, d'Afrique, d'Inde, d'Amérique et d'Europe. Un avantage important de la Russie est qu’il est possible de faire des études sans connaître la langue russe: vous pouvez choisir un programme qui est enseigné en anglais ou bien commencer par le département de préparation et suivre un cours de russe pendant un an qui pourrait suffire à la formation et la vie confortable en Russie.")); ?></p>
                    </div>
                </div>            
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "MBBS في روسيا" : (($lang == 'en') ? "MBBS IN RUSSIA" : "MBBS EN RUSSIE")); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo (($lang == 'ar') ? "<p>على مدى عقود، والآلاف من الطلاب مغادرة بلادهم بحثا عن تعليم جيد. ومن الضروري بالنسبة لهم لإيجاد دولة جيدة حيث يمكن العثور على جامعة مرموقة والمقررات التي يرغبون في متابعة. عندما يأتي السؤال « أين تذهب لدراسة الطب؟ » ، روسيا هي الحل لجميع الطلاب الواعدين الذين يرغبون في مواصلة حياتهم المهنية في مجال الطب بأقل تكلفة تعليمية.</p>
                        <p>هناك أكثر من 100 الجامعات الطبية حيث يمكن للطلاب مواصلة دراستهم في مجال الطب. تقريبا جميع الجامعات الطبية الروسية معترف بها في جميع أنحاء العالم. أكثر من 500،000 طلاب الدراسات العليا الأجانب في الجامعات الطبية في روسيا العمل في المستشفيات والمؤسسات الطبية المعروفة في وطنهم. معظم الجامعات الطبية في روسيا 100 سنة وحتى 200-250 سنة. كل عام والجامعات الطبية الروسية تقبل الآلاف من الطلاب من أفريقيا وآسيا وأوروبا وأمريكا الشمالية وأمريكا الجنوبية. تعتبر الجامعات الطبية في روسيا أكثر الجامعات بأسعار معقولة في فئة الدخل المتوسط. معظم الجامعات الطبية في روسيا تقدم جميع الدورات باللغة الروسية والإنجليزية، بما في ذلك فصول رئيسية. في الجامعات الطبية في روسيا، يمكن أن يجد الطلاب دورات متخصصة أنهم لا يستطيعون العثور على أو من الصعب أن تجد في بلد آخر. جميع الجامعات الطبية في روسيا تقدم أفضل التدريب كجزء من أعضاء هيئة التدريس المؤهلين تأهيلا عاليا، بما في ذلك الأطباء والعلماء والباحثين والمعلمين والمرشحين في العلوم. كل كلية الطب روسيا لديها المستشفيات الخاصة والعيادات ومراكز البحوث، والتي تساعد الطلاب على تحسين مهاراتهم العملية جنبا إلى جنب مع نظرية ويصبح طبيبا جيدا في المستقبل.</p>
                        <p>وهكذا، والجامعات الروسية تصبح أكثر جاذبية للطلاب الأجانب من الدول الأوروبية والآسيوية. بالإضافة إلى أسعار معقولة وجودة التعليم العالي والجامعات الروسية تقدم برامج أكثر وأكثر أهمية، مما يسمح للخريجين للحصول على وظيفة في الطلب في سوق العمل وتعزيز عملهم.</p>" : (($lang == 'en') ? "<p>For decades, thousands of students have been leaving their home country in search of a good education. It is essential for them to find a good country where they can find a reputable university and the courses they wish to follow. When comes the question «Where to go to study medicine?», Russia is the solution for all promising students who wish to pursue their careers in the field of medicine with a minimal cost of education.</p>
                        <p>There are more than 100 medical universities where students can pursue their studies in the field of medicine. Almost all Russian medical universities are recognized worldwide. More than 500,000 foreign students graduating from Russian medical universities work in reputable hospitals and medical institutions in their home country. Most medical universities in Russia are 100 years old and even 200-250 years old. Every year, Russian medical universities accept thousands of students from the African, Asian, European, North American and South American continents. Medical universities in Russia are considered the most affordable universities for the middle income group. Most medical universities in Russia offer all courses in Russian and English, including master's courses. In Russian medical universities, students can find specialized courses that they can not find or that are difficult to find in another country. All medical universities in Russia offer the best possible training for their highly qualified teaching staff, which includes doctors, scientists, researchers, professors and science candidates. Each Russian medical university has its own hospitals, clinics and research centers, which helps students develop practical skills along with the theory and become the right doctor in the future.</p>
                        <p>Russian universities are becoming more attractive to international students from European and Asian countries. In addition to affordable prices and high-quality education, Russian universities are offering more and more relevant programs, enabling graduates to obtain a job-seeking position in the labor market and promoting their jobs.</p>" : "<p>Depuis des décennies, des milliers d'étudiants quittent leur pays d'origine à la recherche d'une bonne éducation. Il est essentiel pour eux de trouver un bon pays où ils peuvent trouver une université réputée et les cours qu’ils souhaitent suivre. Quand vient la question «Où aller étudier la médecine?», La Russie est la solution pour tous les étudiants prometteurs qui souhaitent poursuivre leur carrière dans le domaine de la médecine avec un coût minimal d'éducation.</p>
                        <p>Il existe plus de 100 universités médicales où les étudiants peuvent poursuivre leurs études dans le domaine de la médecine. Presque toutes les universités de médecine de Russie sont reconnues dans le monde. Plus de 500 000 étudiants étrangers diplômés des universités de médecine de Russie travaillent dans des hôpitaux et des établissements médicaux réputés dans leur pays d'origine. La plupart des universités médicales de Russie ont 100 ans et même 200-250 ans. Chaque année, les universités de médecine de Russie acceptent des milliers d'étudiants des continents africain, asiatique, européen, nord-américain et sud-américain. Les universités médicales en Russie sont considérées comme les universités les plus abordables pour le groupe de revenu moyen. La plupart des universités médicales en Russie proposent tous les cours en russe et en anglais, y compris les cours de master. Dans les universités médicales de Russie, les étudiants peuvent trouver les cours spécialisés qu’ils ne peuvent pas trouver ou qui sont difficiles à trouver dans un autre pays. Toutes les universités médicales de Russie offrent la meilleure formation possible dans le cadre de leur personnel pédagogique hautement qualifié, qui comprend des médecins, des scientifiques, des chercheurs, des professeurs et des candidats aux sciences. Chaque université médicale de Russie possède ses propres hôpitaux, cliniques et centres de recherche, ce qui aide les étudiants à perfectionner leurs compétences pratiques en même temps que la théorie et à devenir le bon médecin à l'avenir.</p>
                        <p>Ainsi, les universités russes deviennent plus attrayantes pour les étudiants internationaux des pays européens et asiatiques. Outre des prix abordables et une éducation de haute qualité, les universités russes proposent de plus en plus de programmes pertinents, ce qui permet aux diplômés d’obtenir un poste en demande sur le marché du travail et de promouvoir leur emploi.</p>")); ?>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

    
    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>