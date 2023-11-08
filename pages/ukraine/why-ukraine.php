<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("أوكرانيا","Ukraine"," Ukraine");
    title_page($title,3)
?>


<?php include $path.'/layouts/feature.php';
    $txt = "Pourquoi Ukraine ?";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Pourquoi Ukraine ?", "لماذا اوكرانيا ؟", "Why Ukraine?");
    }
    feature_txt($txt, "ukraine");
?>
    
    <div class="section why">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title"><?php echo (($lang == 'ar') ? 'لماذا اوكرانيا' : (($lang == 'en') ? 'Why Ukraine ?' : 'Pourquoi Ukraine ?')); ?></h2>
            </div>
            <div class="row">
                <p><?php echo (($lang == 'ar') ? 'يزداد عدد الطلاب الأجانب الراغبين في مواصلة التعليم العالي في أوكرانيا كل يوم. هذا ليس من المستغرب لأن أوكرانيا توفر فرصا ممتازة للحصول على درجة جامعية في التخصص المطلوب' : (($lang == 'en') ? 'The number of foreign students wishing to pursue higher education in Ukraine is increasing every day. This is not surprising because Ukraine offers excellent opportunities to receive a university degree in the desired specialty' : "Le nombre d'étudiants étrangers souhaitant poursuivre des études supérieures en Ukraine augmente chaque jour. Cela n’est pas surprenant, car l’Ukraine offre d’excellentes possibilités de recevoir un diplôme universitaire dans la spécialité souhaitée")); ?></p>
            </div>
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title"><?php echo (($lang == 'ar') ? 'قائمة الأسباب التي تسمح باختيار أوكرانيا' : (($lang == 'en') ? 'LIST OF REASONS FOR WHICH TO CHOOSE UKRAINE' : "LISTE DES RAISONS POUR LESQUELLES CHOISIR L'UKRAINE")); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="reason-items list-group">
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'التعليم الجيد لجميع الطلاب الأجانب تتمتع الجامعات الأوكرانية بتعليم ذي جودة عالية للغاية. تقدم العديد من الجامعات دورات في اللغة الإنجليزية أو دورات تحضيرية لدراسة اللغة الروسية أو الأوكرانية.' : (($lang == 'en') ? 'Quality education for all international students Ukrainian universities have an education of very high quality. Many universities offer English courses or preparatory courses for studying Russian or Ukrainian.' : "Education de qualité pour tous les étudiants internationaux
                            Les universités ukrainiennes ont une éducation de très haute qualité. De nombreuses universités proposent des cours d'anglais ou de faculté préparatoire à l'étude du russe ou de l'ukrainien.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'دورات معترف بها في جميع أنحاء العالم (أوروبا والمملكة المتحدة والولايات المتحدة وآسيا وأفريقيا ومنظمة الصحة العالمية واليونسكو والمجلس الأوروبي، الخ) والجامعات الأوكرانية وقد اعترفت جميع. ستكون شهادتك ممتازة في كل مكان في العالم.' : (($lang == 'en') ? 'Courses recognized all over the world (Europe, United Kingdom, United States, Asia, Africa, WHO, UNESCO, EUROPEAN COUNCIL, etc.) Ukrainian universities have all recognized this. Your degree will be excellent everywhere in the world.' : "Cours reconnus dans le monde entier (Europe, Royaume-Uni, États-Unis, Asie, Afrique, OMS, UNESCO, CONSEIL EUROPÉEN, etc.)
                            Les universités ukrainiennes ont tout cela reconnu. Votre diplôme sera excellent partout dans le monde.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'درجة الدكتوراه معترف بها من قبل منظمة الصحة العالمية واليونسكو و PLAB (المملكة المتحدة) ، USMLE (الولايات المتحدة الأمريكية) ، في جميع أنحاء الاتحاد الأوروبي والمنظمات الدولية المختلفة هي الدورات الطبية الأكثر شعبية في أوكرانيا بين الطلاب الأجانب. يمكنك بسهولة دراسة MBBS في أوكرانيا لأنه سيتم التعرف عليه في جميع أنحاء العالم.' : (($lang == 'en') ? "Doctor's degree recognized by WHO, UNESCO, PLAB (United Kingdom), USMLE (USA), throughout the EU and various international organizations Medical courses are the most popular in Ukraine among students foreigners. You can easily study MBBS in Ukraine because it will be recognized all over the world." : "Diplôme de médecin reconnu par l'OMS, l'UNESCO, le PLAB (Royaume-Uni), USMLE (États-Unis), dans toute l'UE et diverses organisations internationales
                            Les cours de médecine sont les plus populaires en Ukraine parmi les étudiants étrangers. Vous pouvez facilement étudier MBBS en Ukraine, car il sera reconnu partout dans le monde.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'NO JAMB، IJMB، TOEFL، IELTS، CAMBRIDGE A.LEVEL، NABTEB هذه الكلمات مخيفة لعدد كبير من الطلاب الدوليين. إنها تعني راتبًا إضافيًا وإدخالًا صعبًا. لكن الأمر سهل في أوكرانيا. لست بحاجة إلى القيام بأي من هذه الاختبارات' : (($lang == 'en') ? "NO JAMB, IJMB, TOEFL, IELTS, CAMBRIDGE A.LEVEL, NABTEB These words are scary for a large number of international students. They mean an extra salary and a difficult admission. But it's easy in Ukraine. You do not need to do any of these exams" : "NO JAMB, IJMB, TOEFL, IELTS, CAMBRIDGE A.LEVEL, NABTEB
                            Ces mots font peur pour un grand nombre d'étudiants internationaux. Ils signifient un salaire supplémentaire et une admission difficile. Mais c'est facile en Ukraine. Vous n'avez pas besoin de faire aucun de ces examens.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'دراسة عدم الدخول ، شهادة الثانوية الثانوية فقط لبرامج درجة البكالوريوس نحن نعتقد أن كل طالب يرغب في الدراسة يستحق هذه الفرصة ونحن مستعدون لتقديمها. القبول السهل حقا.' : (($lang == 'en') ? "EXAMINING NO ENTRY, ONLY SECONDARY SCHOOL CERTIFICATE for bachelor's degree programs We believe that every student wishing to study deserves this opportunity and we are ready to give it. Admission really easy." : "EXAMENS PAS D'ENTRÉE, SEULEMENT CERTIFICAT D'ÉCOLE SECONDAIRE pour les programmes de baccalauréat
                            Nous pensons que chaque étudiant désireux d'étudier mérite cette opportunité et nous sommes prêts à la donner. Admission vraiment facile.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'يتم دفع الرسوم الدراسية عند الوصول كثير من الطلاب لا يرغبون في الدفع قبل الوصول. هنا يمكنك القيام بذلك. بالطبع ، عليك أن تدفع ثمن خطاب الدعوة والخدمات التي تقدمها الوكالة إذا كنت تستخدمها ، ولكن على أي حال ، سوف تدفع جميع الأموال فقط بعد وصولك إلى أوكرانيا. أموالك آمنة.' : (($lang == 'en') ? 'Tuition fees are paid on arrival Many students do not want to pay before arrival. Here you can do that. Of course, you have to pay for the letter of invitation and the services of the agency if you use it, but in any case, you will pay almost all the money only after your arrival in Ukraine. Your money is safe.' : "Les frais de scolarité sont payés à l'arrivée
                            Beaucoup d'étudiants ne veulent pas payer avant l'arrivée. Ici tu peux faire ça. Bien sûr, vous devez payer pour la lettre d’invitation et les services de l’agence si vous l’utilisez, mais de toute façon, vous ne paierez presque tout l’argent qu’après votre arrivée en Ukraine. Votre argent est en sécurité.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'مربحة (التعليم الأوروبي أرخص) التعليم في أوكرانيا هو على مستوى عال جدا ، لكنه أيضا أرخص بكثير من أي بلد أوروبي آخر.' : (($lang == 'en') ? 'Profitable (European education cheapest) Education in Ukraine is of a very high standard, but it is also much cheaper than in any other European country.' : "Rentable (éducation européenne la moins chère)
                            L'éducation en Ukraine est d'un très haut niveau, mais elle est également beaucoup moins chère que dans n'importe quel autre pays européen.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'European Life Standard أوكرانيا تقع في وسط وشرق أوروبا. إنها أكبر دولة في أوروبا. سوف تعطيك أوكرانيا المعايير الأوروبية للعيش بأسعار منخفضة.' : (($lang == 'en') ? 'European Life Standard Ukraine located in the center and east of Europe. It is the largest country in Europe. Ukraine will give you European standards of living with low prices.' : "European Life Standard
                            L'Ukraine située au centre et à l'est de l'Europe. C'est le plus grand pays d'Europe. L'Ukraine vous donnera les normes européennes de la vie avec des prix bas.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'الاهتمام الشخصي بكل طالب ، الحضور بنسبة 100٪ مجموعات الدراسة صغيرة ولا تضم ​​سوى 8 إلى 12 طالبًا. وبالتالي ، لدى المعلمين الوقت للتواصل مع كل طالب خلال فترة الفصل الدراسي. يتم إجراء اختبارات صغيرة كل يوم ، لذلك لا يتخطى الطلاب الفصول الدراسية. بالنسبة لأولئك الذين فاتتهم الدروس لأسباب جدية ، هناك فصول شخصية مجانية.' : (($lang == 'en') ? 'Personal attention to each student, 100% attendance The study groups are small and only have 8 to 12 students. Teachers therefore have time to communicate with each student during the class period. Small tests are done every day, so students do not skip classes. For those who have missed classes for serious reasons, there are free personal classes.' : "Attention personnelle à chaque élève, assiduité à 100%
                            Les groupes d'étude sont petits et ne comptent que 8 à 12 élèves. Les enseignants ont donc le temps de communiquer avec chaque élève pendant la période de classe. De petits tests sont effectués chaque jour, afin que les étudiants ne sautent pas de cours. Pour ceux qui ont manqué des cours pour des raisons sérieuses, il existe des cours personnels gratuits.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'فرص عمل أفضل أوكرانيا مكان جيد لبدء حياتك المهنية.' : (($lang == 'en') ? 'Better job prospects Ukraine is a good place to start your career.' : "De meilleures perspectives d'emploi
                            L'Ukraine est un bon endroit pour commencer sa carrière.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'مناخ معتدل طوال العام. ننسى الحرارة أو البرودة المذهلة مدى الحياة. كل فصول السنة جميلة في أوكرانيا.' : (($lang == 'en') ? 'Moderate climate all year Forget the amazing hot or cold for life. All seasons of the year are beautiful in Ukraine.' : "Climat modéré toute l'année
                            Oubliez le chaud étonnant ou le froid à vie. Toutes les saisons de l'année sont belles en Ukraine.")); ?>
                        </li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? 'توسيع نطاق الخبرة من خلال زيارة أساتذة من الولايات المتحدة وكندا والمملكة المتحدة والهند وغيرها. العديد من الجامعات لديها شراكات مع الجامعات الأمريكية والكندية والأوروبية. إنها فرصتك للقاء أساتذة الجامعات المشهورين عالمياً في أوكرانيا بأقل رسوم التعليم.' : (($lang == 'en') ? "Expansion of experience through visiting professors from the United States, Canada, the United Kingdom, India, etc. Many universities have partnerships with American, Canadian and European universities. It's your chance to meet world-renowned professors in Ukraine with the lowest tuition fees." : "Enrichissement de l'expérience grâce aux professeurs invités des États-Unis, du Canada, du Royaume-Uni, de l'Inde, etc.
                            Un grand nombre d'universités ont établi des partenariats avec des universités américaines, canadiennes et européennes. C'est votre chance de rencontrer des professeurs de renommée mondiale en Ukraine aux frais de scolarité les plus bas.")); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>