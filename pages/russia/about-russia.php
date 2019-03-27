<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/layouts/header.php'  ;
    $title = get_lang_text("روسيا","Russia","Russie");
    title_page($title,4)
?>

<?php include $path.'/layouts/feature.php';
    $txt = "à propos de Russie";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("à propos de Russie", "حول روسيا", "about russia");
    }
    feature_txt($txt, "russia");
?>
    <div class="about">
        <div class="">
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "حول روسيا" : (($lang == 'en') ? "About Russia" : "à propos de Russie")); ?></h2>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "العيش في روسيا هو تجربة فريدة من نوعها. مع النظام التعليمي الصحيح سوف تجد روسيا منهجية ومتحضرة للغاية. الشعب الروسى متعلمون جيدا ، ونوع ومفيدون. بغض النظر عن العرق أو البلد الذي تنتمي إليه ، سوف يرحب بك قلبًا واحترامًا. هذا هو السبب في أن معظم الطلاب الذين يرغبون في العيش خارج الحرم الجامعي يؤجرون غرفة في شقة عائلية. مقارنة مع الدول الأوروبية الأخرى ، الحياة في روسيا أرخص." : (($lang == 'en') ? "Living in Russia is a totally unique experience. With the right educational system you will find Russia very systematic and civilized. The Russian people are well educated, kind and helpful. No matter what race or country you belong to, they will welcome you with heart and respect. That's why most students who want to live off campus rent a room in a family apartment. Compared with other European countries, life in Russia is cheaper." : "Vivre en Russie est une expérience totalement unique. Avec le bon système éducatif, vous trouverez la Russie très systématique et civilisée. Les peuples russes sont bien élevés, gentils et serviables. Peu importe la race ou le pays auquel vous appartenez, ils vous accueilleront avec cœur et respect. C'est pourquoi la plupart des étudiants qui souhaitent vivre hors campus louent une chambre dans un appartement familial. En comparaison avec d’autres pays européens, la vie en Russie est moins chère.")); ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "معلومات عامة" : (($lang == 'en') ? "GENERAL INFORMATIONS" : "INFORMATIONS GÉNÉRALES")); ?></h2>
                    </div>
                    <div class="row">
                        <?php echo (($lang == 'ar') ? "<p>روسيا أو روسيا هي دولة ذات تاريخ عظيم ، موطن للعلماء المشهورين وأرض الجمال الطبيعي. رأس المال: موسكو الرئيس: فلاديمير بوتين روسيا تغطي مساحة 17،075500 كيلومتر مربع ، مما يجعل روسيا أكبر دولة في العالم.</p>
                        <p>لعقود من الزمان ، كانت روسيا مركزًا للبحث والتعليم. روسيا هي المكان الذي يصل فيه الحد الأقصى لعدد الطلاب الأجانب كل عام في التعليم العالي في مجالات الطب والهندسة والاقتصاد والعلوم الطبيعية والاجتماعية.</p>
                        <p>يعتبر نظام التعليم الروسي أفضل نظام في العالم. اليوم ، روسيا لديها الحد الأقصى لعدد العلماء في مجال الطب والتكنولوجيا.</p>
                        <p>التعليم العالي في روسيا بأسعار معقولة على عكس البلدان الأخرى.</p>
                        <p>التعليم العالمي المستوى الذي تجتذبه روسيا العديد من الطلاب الأجانب الذين يرغبون في دراسة MBB في روسيا. بالإضافة إلى ذلك ، فإن الرسوم الدراسية المنخفضة وتكلفة المعيشة المنخفضة تجعل من روسيا الخيار المفضل لدورات وبرامج بكالوريوس الطب والجراحة في جميع أنحاء العالم.</p>" : (($lang == 'en') ? "<p>Russia or the Russian Federation is a country with a great history, home of famous scientists and a land of natural beauty. Capital: Moscow President: Vladimir Putin Russia covers an area of ​​17,075,500 km2, making Russia the largest country in the world.</p>
                        <p>For decades, Russia has been a center for research and education. Russia is the place where a maximum number of foreign students arrive each year in higher education in the fields of medicine, engineering, economics, natural and social sciences.</p>
                        <p>The Russian education system is considered the best system in the world. Today, Russia has a maximum number of scientists in the field of medicine and technology.</p>
                        <p>Higher education in Russia is affordable unlike other countries.</p>
                        <p>The world-class education that Russia attracts many foreign students who wish to study the MBB in Russia. In addition, the low tuition fees and low cost of living make Russia the preferred choice of MBBS courses and degree programs around the world.</p>" : "<p>La Russie ou  la Fédération de Russie  est un pays avec une grande histoire, la maison de scientifiques célèbres et une terre de beauté naturelle.  
                        Capitale : Moscou
                        Président : Vladimir Poutine
                        La Russie couvre une superficie de 17 075 500 km2, faisant de la Russie le plus grand pays du monde .</p>
                        <p>Depuis des décennies, la Russie était un centre de recherche et d’éducation. La Russie est le lieu où un nombre maximum d'étudiants étrangers arrivent chaque année dans l'enseignement supérieur dans les domaines de la médecine, de l'ingénierie, de l'économie, des sciences naturelles et sociales.</p>
                        <p>Le système éducatif russe est considéré comme le meilleur système au monde. Aujourd'hui, la Russie compte un nombre maximum de scientifiques dans le domaine de la médecine et de la technologie.</p>
                        <p>Les études supérieures en Russie sont abordables contrairement à d'autres pays.</p>
                        <p>L’enseignement de haut niveau mondial que la Russie attire beaucoup d’étudiants étrangers qui souhaitent étudier les MBB en Russie. En outre, les frais de scolarité et le coût de la vie peu élevés font de la Russie le choix favori des cours MBBS et des programmes de diplômes universitaires partout dans le monde.</p>")); ?>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "المناخ والطبيعة" : (($lang == 'en') ? "Climate And Nature" : "climat et nature")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "جمال المناظر الطبيعية في روسيا سوف يريحك!" : (($lang == 'en') ? "The beauty of the natural landscapes of Russia will take your breath away!" : "La beauté des paysages naturels de la Russie va vous couper le souffle!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "المواسم الأربعة - الصيف والخريف والشتاء والربيع - تبرز بسهولة. كل موسم يستمر حوالي ثلاثة أشهر ، مما يجعل المناخ لطيفا. بينما تمتد روسيا عبر منطقة شاسعة من الجنوب إلى الشمال ومن الغرب إلى الشرق ، فإن المناخ يختلف باختلاف مناطق البلاد. الشتاء بارد بشكل عام في روسيا ، مع متوسط ​​درجة حرارة -5. يمكن أن تنخفض درجة الحرارة من -15 إلى -20 لمدة أسبوع أو اثنين. تعد منطقة سيبيريا أكثر برودة من المناطق الأخرى في روسيا ، لكنها محتملة لجميع مجتمعات العالم لأن هناك العديد من الأجانب من المناطق الدافئة في أفريقيا والهند الذين يستغلون هذا الوقت. . تمتلك روسيا حوالي 3 ملايين كم من الأنهار. هناك العديد من البحيرات في روسيا ، المياه العذبة أو المالحة. بحيرة بايكال هي أكبر بحيرة للمياه العذبة في العالم ، مع أقصى عمق 1620 م. المناخ الروسي هو أفضل مناخ في العالم لحياة صحية. يتم إثرائه بالهواء النقي والأكسجين." : (($lang == 'en') ? "The four seasons - summer, autumn, winter and spring - stand out easily. Each season lasts about three months, which makes the climate pleasant. While Russia stretches across a vast region from south to north and from west to east, the climate varies according to the regions of the country. Winter is generally cold In Russia, with an average temperature of -5. The temperature can drop from -15 to -20 for a week or two. The Siberian region is a bit colder than the other regions of Russia but it is bearable for all the communities of the world because there are many foreigners from warm regions of Africa and India who take advantage of this time . Russia has about 3 million km of rivers. There are many lakes in Russia, fresh or salt water. Lake Baikal is the largest freshwater lake in the world, with a maximum depth of 1620 m. The Russian climate is the best climate in the world for a healthy life. It is enriched with fresh air and oxygen." : "Les quatre saisons - été, automne, hiver et printemps - se distinguent facilement. Chaque saison dure environ trois mois, ce qui rend le climat agréable. Alors que la Russie s’étend sur une vaste région du sud au nord et d’ouest en est, le climat varie selon les régions du pays.
                        L'hiver est généralement froid En Russie, avec une température moyenne de -5. La température peut chuter de -15 à -20 pendant une semaine ou deux. La région sibérienne est un peu plus froide que les autres régions de la Russie mais elle est supportable pour toutes les communautés du monde car il y a beaucoup d'étrangers venus de régions chaudes d'Afrique et d'Inde et qui profitent de ce temps. La Russie a environ 3 millions de km de rivières. Il y a beaucoup de lacs en Russie, d'eau douce ou salée. Le lac Baïkal est le plus grand lac d'eau douce du monde, sa profondeur maximale est de 1620 m. Le climat russe est le meilleur climat au monde pour une vie saine. Il est enrichi en air frais et en oxygène.")); ?></p>               
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "السكان والمجتمع" : (($lang == 'en') ? "POPULATION AND SOCIETY" : "")); ?>POPULATION ET SOCIETE</h2>
                        <h3><?php echo (($lang == 'ar') ? "لديك وقت مذهلة حول الناس ودية ودافئة!" : (($lang == 'en') ? "Have an amazing time around a friendly and warm people!" : "Passez un moment incroyable autour d'un peuple amical et chaleureux!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "روسيا هي خامس دولة في العالم من حيث عدد السكان (148.8 مليون نسمة) بعد الصين والهند والولايات المتحدة وإندونيسيا. في المجموع ، يعيش 73 ٪ من المواطنين الروس في المناطق الحضرية. الشركة مفتوحة حديثة ومتعلمة. يمكن لأي شخص أن يعيش حياته الخاصة بحرية وأمان. الناس متعاونون ومفتوحون. يتواصل الطلاب الأجانب بسهولة مع الروس. روسيا لديها أعلى معدل معرفة القراءة والكتابة في العالم لأن التعليم إلزامي ومجاني لجميع المواطنين." : (($lang == 'en') ? "Russia is the fifth most populous country in the world (148.8 million inhabitants) after China, India, the United States and Indonesia. In total, 73% of Russian citizens live in urban areas. The company is open modern and educated. Everyone can live his own life freely and safely. People are cooperative and open. Foreign students communicate easily with the Russians. Russia has the highest literacy rate in the world because education is compulsory and free for all citizens." : "La Russie est le cinquième pays le plus peuplé au monde (148,8 millions d’habitants) après la Chine, l’Inde, les États-Unis et l’Indonésie. 
                        Au total, 73% des citoyens russes vivent dans des zones urbaines. La société est ouverte moderne et éduquée. Chacun peut vivre sa propre vie librement et en toute sécurité. Les gens sont coopératifs et ouverts. Les étudiants étrangers communiquent facilement avec les Russes. La Russie a un taux d'alphabétisation maximum dans le monde entier car l'éducation est obligatoire et gratuite pour tous les citoyens.")); ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "الأمان" : (($lang == 'en') ? "SECURITY" : "SÉCURITÉ")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "أشعر بالأمان والهدوء!" : (($lang == 'en') ? "Feel safe and calm!" : "Sentez-vous en sécurité et calme!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "الاتحاد الروسي بلد آمن جدا! البقاء في نزل ، والمشي في الشوارع ، والسفر في البلاد ، فلن تخشى أي شيء سيئ. إذا كنت تواجه مشاكل وتحتاج إلى مساعدة شخص ما ، فستجد بالتأكيد أشخاصًا يحاولون حلها أو تخبرك أين تذهب وكيفية الوصول إلى مكان ما. تم تجهيز الحرم الجامعي وبيوت الشباب والجامعات بكاميرات مراقبة وأنظمة أمنية. توفر مراكز الأمن الجامعية تغطية أمنية على مدار الساعة للجامعات والمساكن الجامعية. نظام كامل من كاميرات الدوائر التلفزيونية المغلقة تعمل في حرم الجامعات ، بما في ذلك بعض المواقع السكنية الكبيرة. تستخدم الكاميرات لتوجيه موظفي الأمن في حالة وقوع حادث وتعمل المراكز بشكل وثيق مع الشرطة." : (($lang == 'en') ? "The Russian Federation is a very safe and secure country! Staying in a hostel, walking the streets, traveling in the country, you will not fear anything bad. If you are having problems and need someone's help, you will certainly find people trying to solve them or telling you where to go and how to get somewhere. Campuses, hostels and universities are equipped with surveillance cameras and security systems. University security centers provide 24-hour security coverage for campuses and university residences. A complete system of CCTV cameras is operating on university campuses, including some of the larger residential sites. Cameras are used to direct security personnel in the event of an incident and the centers work closely with the police." : "La Fédération de Russie est un pays très sûr et sécurisé! En séjournant dans une auberge, en marchant dans les rues, en voyageant dans le pays, vous ne craindrez rien de mal. Si vous rencontrez des problèmes et avez besoin de l'aide de quelqu'un, vous trouverez certainement des personnes qui essaient de les résoudre ou vous disent où vous devez aller et comment vous rendre quelque part. Les campus, les auberges et les universités sont équipés de caméras de surveillance et de systèmes de sécurité. Les centres de sécurité des universités fournissent une couverture de sécurité 24 heures sur 24 pour les campus et les résidences universitaires. Un système complet de caméras de vidéosurveillance fonctionne sur les campus des universités, y compris certains des grands sites résidentiels. Les caméras sont utilisées pour diriger le personnel de sécurité en cas d'incident et les centres travaillent en liaison étroite avec la police.")); ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "طبخ" : (($lang == 'en') ? "cooking" : "CUISINE")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "تذوق النكهات المختلفة من المطبخ الروسي. لن تكون قادرا على مقاومة!" : (($lang == 'en') ? "Taste the different flavors of Russian cuisine. You will not be able to resist!" : "Goûtez les différentes saveurs de la cuisine russe. Vous ne pourrez pas résister!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "المطبخ الروسي مميز وفريد ​​، وشأنه شأن أي مأكولات وطنية أخرى ، فقد تم تشكيله تحت تأثير مختلف العوامل البيئية والاجتماعية والجغرافية والاقتصادية والتاريخية. يتميز المطبخ الروسي من وفرة ومتنوعة من المنتجات المستخدمة للطهي. يقدم المطبخ الروسي تشكيلة واسعة من الأطباق النباتية ، بما في ذلك الفطر والمخللات ، إلخ. كما أن لوحة الطهي الروسية غنية بأطباق اللحوم والدواجن والأسماك التي يتم تقديمها في مناسبات مختلفة." : (($lang == 'en') ? "Russian cuisine is distinctive and unique and, like any other national cuisine, it has been formed under the influence of various environmental, social, geographical, economic and historical factors. Russian cuisine is characterized by an abundance and variety of products used for cooking. Russian cuisine offers a wide variety of vegetarian dishes, including mushrooms, pickles, etc. The Russian culinary palette is also rich in meat, poultry and fish dishes, served on various occasions." : "La cuisine russe est distinctive et unique et, comme toute autre cuisine nationale, elle a été formée sous l’influence de différents facteurs environnementaux, sociaux, géographiques, économiques et historiques. La cuisine russe se caractérise par une abondance et une variété de produits utilisés pour la cuisine. La cuisine russe propose un grand nombre de plats végétariens, notamment des champignons, des cornichons, etc. La palette culinaire russe est également riche en plats à base de viande, de volaille et de poisson, servis à diverses occasions.")); ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "الثقافة والفن" : (($lang == 'en') ? "CULTURE AND ART" : "CULTURE ET ART")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "سوف تكون بالتأكيد مستوحاة من التراث الثقافي والفن الحديث!" : (($lang == 'en') ? "You will certainly be inspired by cultural heritage and modern art!" : "Vous serez certainement inspiré par le patrimoine culturel et l'art moderne!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "يوجد في روسيا أكثر من 50 ألف مكتبة عامة وطنية تضم أكثر من مليار كتاب. هناك حوالي 1500 متحف (تاريخي ، إثنوغرافي ، نصب تذكاري ، الحرف الشعبية ، الفنون الجميلة والفنون التطبيقية ، المسرح ، الموسيقى ، العلوم الطبيعية ، التكنولوجيا وغيرها الكثير). تعرض عشرون متحفاً إثنوغرافياً في الهواء الطلق فن العمارة والفنون والحياة اليومية." : (($lang == 'en') ? "Russia has more than 50,000 national public libraries with more than one billion books. There are about 1500 museums (historical, ethnographic, memorial, folk crafts, fine arts and applied arts, theater, music, natural sciences, technology and many more). Twenty ethnographic open-air museums showcase popular architecture, arts and daily life." : "La Russie compte plus de 50 000 bibliothèques publiques nationales qui possèdent plus d’un milliard de livres. Il existe environ 1500 musées (historiques, ethnographiques, mémoriaux, d’artisanat populaire, des beaux-arts et des arts appliqués, le théâtre, la musique, les sciences naturelles, la technologie et bien d’autres). Vingt musées ethnographiques à ciel ouvert présentent l'architecture populaire, les arts et la vie quotidienne.")); ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "العلوم والتكنولوجيا" : (($lang == 'en') ? "SCIENCE AND TECHNOLOGY" : "SCIENCE ET TECHNOLOGIES")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "اكتشف أحدث الأبحاث العلمية والتقنية والاختراعات الشهيرة للعلماء الروس البارزين!" : (($lang == 'en') ? "Discover the latest scientific and technical research and the famous inventions of outstanding Russian scientists!" : "Découvrez les recherches scientifiques et techniques les plus récentes et les célèbres inventions de scientifiques russes remarquables!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "وكانت روسيا أول من وضع واستكشاف العديد من فروع البحث العلمي وإنجازاته: الاختراعات الرئيسية: لأول مرة في العالم: المصباح الكهربائي، الإذاعة والتلفزيون، وطائرات الهليكوبتر، صاروخ فضائي، ومسجل فيديو، قاطرة رئيسية، لون التصوير الفوتوغرافي ، والترفيه، وأشباه الموصلات وتوليد زيادة، جنبا إلى جنب بناء آلة، آلة اختيار الحبوب، نموذج القلب الميكانيكية والقنابل الحرارية، محرك البنزين وغيرها الكثير في روسيا، حوالي 4000 المنظمات العاملة في مجال البحوث والتطوير العلمي. حوالي 70 ٪ من هذه المنظمات تنتمي إلى الحكومة." : (($lang == 'en') ? "Russia was the first to develop and explore many branches of scientific research and its achievements: Main inventions: first in the world: light bulb, radio, television, helicopter, space rocket, video recorder, main locomotive, color photography , animation, semiconductor device strengthening and generating, combined machine building, cereal picking machine, mechanical heart model, thermonuclear and atomic bomb, gasoline engine and many more In Russia, about 4,000 organizations participate in research and scientific development. About 70% of these organizations belong to the government." : "La Russie a été la première à développer et à explorer de nombreuses branches de la recherche scientifique et de ses réalisations: 
                        Principales inventions:  première au monde: ampoule électrique, radio, télévision, hélicoptère, fusée spatiale, enregistreur vidéo, locomotive principale, photographie couleur, animation, dispositif semi-conducteur renforçant et générant, machine combinée bâtiment, machine à cueillir les céréales, modèle de cœur mécanique, bombe thermonucléaire et atomique, moteur à essence et bien d'autres
                        En Russie, environ 4 000 organisations participent à la recherche et au développement scientifiques. Environ 70% de ces organisations appartiennent au gouvernement.")); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="">
                    <div class="row">
                        <hr class="section-title-line">
                        <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? "حياة الطالب" : (($lang == 'en') ? "STUDENT LIFE" : "VIE ÉTUDIANTE")); ?></h2>
                        <h3><?php echo (($lang == 'ar') ? "كن طالبًا في جامعة حكومية مرموقة وعش حياة مستقلة مليئة بانطباعات وانفعالات وأصدقاء جدد!" : (($lang == 'en') ? "Become a student of a prestigious state university and live an independent life full of new impressions, emotions and friends!" : "Devenez étudiant d'une prestigieuse université d'État et vivez une vie indépendante pleine de nouvelles impressions, d'émotions et d'amis!")); ?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo (($lang == 'ar') ? "الحياة الطلابية ... لا يتعلق الأمر بالدراسة فقط. سوف تزور المتاحف ودور السينما والحفلات الموسيقية المثيرة والعروض والعروض. سوف تقابل أصدقاء جدد من جميع مناطق العالم. إنها تجربة ممتعة ومجزية ومثيرة. خلال دراستهم في روسيا ، لا يفوت الطلاب الأجانب فرصة لتجربة الضيافة الروسية الفريدة ، وتاريخ وثقافة البلاد التي تنعكس في التراث المقدس الموروث للأجيال القادمة ، أن تكون مسحورا بالجمال الأصيل للطبيعة الروسية ، فضلا عن البلدات والقرى مع الأساليب المعمارية القديمة والحديثة." : (($lang == 'en') ? "Student life ... it's not just about studying. You will visit museums, cinemas, interesting concerts, shows and performances. you will meet new friends from all regions of our globe. It's a fun, rewarding and exciting experience. During their studies in Russia, foreign students do not miss an opportunity to experience the unique Russian hospitality, history and culture of the country reflected in the sacred heritage bequeathed to future generations, to be enchanted by the authentic beauty of Russian nature, as well as its towns and villages with ancient and modern architectural styles." : "La vie étudiante… il ne s'agit pas que d'étude. Vous visiterez des musées, des cinémas, des concerts intéressants, des spectacles et des performances. vous allez rencontrer de nouveaux amis de toutes les régions de notre globe. C'est une expérience amusante, enrichissante et excitante.
                        Au cours de leurs études en Russie, les étudiants étrangers ne manquent pas une occasion de faire l'expérience de l'hospitalité russe unique, de l'histoire et de la culture du pays reflétées dans l'héritage sacré légué aux générations futures, pour être enchantés par la beauté authentique de la nature russe, ainsi que ses villes et villages comprenant des styles architecturaux anciens et modernes.")); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>