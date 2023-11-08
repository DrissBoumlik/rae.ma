<?php $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("اوكرانيا","Ukraine","Ukraine");
    title_page($title,3)
?>

<?php include $path.'/layouts/feature.php';
    $txt = "à propos d'Ukraine";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("à propos d'Ukraine", "حول اوكرانيا", "about ukraine");
    }
    feature_txt($txt, "ukraine");
?>
<div class="about">
    <div class="">
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'عن اوكرانيا' : (($lang == 'en') ? 'about Ukraine' : 'à propos d\'Ukraine')); ?></h2>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'أوكرانيا هي أفضل خيار لك إذا كنت تبحث عن خطواتك التالية في التعليم لجامعة تتحدث اللغة الإنجليزية في أوروبا.' 
                    : (($lang == 'en') ? 'Ukraine is your best option if you are looking for your next steps in education for an English-speaking university in Europe.' 
                    : 'L\'Ukraine est votre meilleure option si vous recherchez vos prochaines étapes en matière d\'éducation pour une université anglophone en Europe.')); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'معلومات عامة' : (($lang == 'en') ? '' : 'INFORMATIONS GÉNÉRALES')); ?></h2>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'عدد السكان 44 مليون. الإقليم 603 700 كم 2 العاصمة كييف (كييف) اللغة الرسمية هي الأوكرانية ، ولكن يتحدث على نطاق واسع الروسية والإنجليزية.' 
                    : (($lang == 'en') ? 'The population is 44 million. Territory 603 700 km 2 The capital Kyiv (Kiev) The official language is Ukrainian, but Russian and English are widely spoken.' 
                    : 'La population est de 44 millions. Territoire 603 700 km 2 La capitale Kyiv (Kiev) La langue officielle est l\'ukrainien, mais le russe et l\'anglais sont largement parlés.')); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'المناخ' : (($lang == 'en') ? 'Climate' : 'CLIMAT')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'استمتع بجمال الفصول الأربعة!' : (($lang == 'en') ? 'Enjoy the beauty of the 4 seasons!' : '')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'أثناء إقامتك في أوكرانيا ، سيكون لديك فرصة فريدة للاستمتاع بجمال الفصول الأربعة ، مع كل ميزاتها الاستثنائية.
                    تتمتع أوكرانيا بمناخ قاري معتدل مع فصول شتاء معتدلة باردة وصيف حار. الربيع والخريف هي أفضل المواسم مع الظروف المناخية الأكثر راحة. متوسط درجة الحرارة في فصل الشتاء هو -5 إلى 1 درجة مئوية ، في الخريف والربيع من 15 درجة مئوية إلى 18 ، في الصيف من 30 درجة إلى 35 درجة مئوية.' 
                    : (($lang == 'en') ? 'While staying in Ukraine, you will have a unique opportunity to enjoy the beauty of the 4 seasons, with all their exceptional features.
                    Ukraine has a temperate continental climate with moderate cold winters and hot summers. Spring and autumn are the best seasons with the most comfortable weather conditions. The average temperature in winter is -5 to 1 ° C, in autumn and spring from + 15 ° C to +18, in summer from + 30 ° to + 35 ° C.' 
                    : 'En séjournant en Ukraine, vous aurez une occasion unique de profiter de la beauté des 4 saisons, avec toutes leurs caractéristiques exceptionnelles.
                    L\'Ukraine a un climat continental tempéré avec des hivers froids modérés et des étés chauds. Le printemps et l\'automne sont les meilleures saisons avec les conditions météorologiques les plus confortables. La température moyenne en hiver est de -5 à 1 ° C, en automne et au printemps de + 15 ° C à +18, en été de + 30 ° à + 35 ° C.')); ?></p> 
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'السياحة' : (($lang == 'en') ? 'TOURISM' : 'TOURISME')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'أوكرانيا تجذب السياح من جميع أنحاء العالم كمغناطيس!' : (($lang == 'en') ? 'Ukraine attracts tourists from around the world as a magnet!' : 'L\'Ukraine attire les touristes du monde entier comme un aimant!')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'السياح من جميع أنحاء العالم يأتون إلى هنا ليس فقط للاستمتاع بالطبيعة الخلابة لأوكرانيا ، ولكن أيضا للتعرف على التراث الثقافي الغني للبلاد وحضور الفعاليات الإبداعية الدولية وتجربة المأكولات الأوكرانية الشهيرة. بطابعها المثير للجدل ، تعد أوكرانيا حقا مكانا فريدا للزيارة. يحتوي على سلاسل جبلية - جبال الكاربات ، مثالية للتزلج والمشي لمسافات طويلة وصيد الأسماك والصيد. ساحل البحر الأسود هو وجهة شعبية لقضاء العطلات الصيفية. هناك مدن سياحية معروفة أخرى مثل مدينة أوديسا الساحلية ومدينة لفيف القديمة إلى الغرب. يمكن للزوار أيضا القيام برحلات القوارب على Dnieper بين كييف وساحل البحر الأسود. يتميز المطبخ الأوكراني بتاريخ طويل ويقدم مجموعة متنوعة من الأطباق الأصلية.' 
                    : (($lang == 'en') ? 'Tourists from all over the world come here not only to enjoy the breathtaking nature of Ukraine, but also to get acquainted with the rich cultural heritage of the country, attend international creative events and try the famous Ukrainian cuisine. With its controversial character, Ukraine is truly a unique place to visit. It has mountain ranges - the Carpathian Mountains, ideal for skiing, hiking, fishing and hunting. The Black Sea coast is a popular summer holiday destination. There are other well-known tourist cities such as the port city of Odessa and the old town of Lviv to the west. Visitors can also do boat cruises on the Dnieper between Kiev and the Black Sea coast. Ukrainian cuisine has a long history and offers a wide variety of original dishes.' 
                    : 'Les touristes du monde entier viennent ici non seulement pour profiter de la nature à couper le souffle de l\'Ukraine, mais également pour se familiariser avec le riche patrimoine culturel du pays, assister à des événements créatifs internationaux et essayer la célèbre cuisine ukrainienne. Avec son caractère controversé, l\'Ukraine est vraiment un endroit unique à visiter. Il a des chaînes de montagnes - les montagnes des Carpates, propices au ski, à la randonnée, à la pêche et à la chasse. Le littoral de la mer Noire est une destination estivale prisée des vacanciers. Il y a d\'autres villes bien connues des touristes telles que la ville portuaire d\'Odessa et la vieille ville de Lviv à l\'ouest. Les visiteurs peuvent également faire des croisières en bateau sur le Dniepr entre Kiev et la côte de la mer Noire. La cuisine ukrainienne a une longue histoire et propose une grande variété de plats originaux.')); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'الجغرافيا والطبيعة' : (($lang == 'en') ? 'GEOGRAPHY AND NATURE' : 'GÉOGRAPHIE ET NATURE')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'استكشاف أوكرانيا والاستمتاع بكل شبر!' : (($lang == 'en') ? 'Explore Ukraine and enjoy every inch!' : 'Explorez l\'Ukraine et profitez de chaque centimètre!')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'أوكرانيا بلد في أوروبا الشرقية. أوكرانيا على حدود روسيا إلى الشرق والشمال الشرقي ، وبيلاروسيا إلى الشمال الغربي ، وبولندا وسلوفاكيا والمجر إلى الغرب ورومانيا و مولدوفا في الجنوب الغربي ، والبحر الأسود وبحر آزوف إلى الجنوب والجنوب الشرقي ، على التوالي. تبلغ مساحتها 603 628 كيلومتر مربع ، مما يجعلها أكبر دولة أوروبية بالكامل.
                    أراضي أوكرانيا مليئة بالكنوز الرائعة التي لن تترك أي شخص غير مبال. جمالها الطبيعي جميل حقا! أنه يحتوي على اثنين من الأنهار الرئيسية - دنيبرو ودنيستر ، وتحيط بها البنوك الخضراء ، واثنين من البحار - بلاك وآزوف مع الساحل الرملي الرائع. يمكنك أيضا زيارة المحميات الطبيعية ، التي يسكنها الأنواع النادرة من الحيوانات والنباتات ، وبعضها مدرجة في الكتاب الأحمر ، والحدائق الرائعة والصحراء الوحيدة في أوروبا.' 
                    : (($lang == 'en') ? 'Ukraine is a country in Eastern Europe. Ukraine borders Russia to the east and north-east, Belarus to the northwest, Poland, Slovakia and Hungary to the west, Romania and Moldova to the southwest, the Black Sea and the Sea of Azov to the south and southeast, respectively. It has an area of 603 628 km², making it the largest country entirely European.
                    The territory of Ukraine is full of wonderful treasures that will leave no one indifferent. Its natural beauty is really beautiful! It contains two major rivers - the Dnipro and the Dniester, surrounded by green banks, and two seas - Black and Azov with their magnificent sandy coastline. You can also visit nature reserves, populated by rare species of fauna and flora, some of which are listed in the Red Book, magnificent parks and the only desert in Europe.' 
                    : 'L\'Ukraine est un pays d\'Europe orientale. L\'Ukraine est frontalière de la Fédération de Russie à l\'est et au nord-est, de la Biélorussie au nord-ouest, de la Pologne, de la Slovaquie et de la Hongrie à l\'ouest, de la Roumanie et de la Moldavie au sud-ouest, de la mer Noire et de la mer d\'Azov au sud et Sud-est, respectivement. Il a une superficie de 603 628 km², ce qui en fait le plus grand pays entièrement européen. 
                    Le territoire de l\'Ukraine regorge de trésors merveilleux qui ne laisseront personne indifférent. Sa beauté naturelle est vraiment magnifique! Il contient deux rivières majeures - le Dnipro et le Dniester, entourées de berges vertes, et deux mers - Black et Azov avec leur magnifique littoral sablonneux. Vous pouvez également visiter des réserves naturelles, peuplées d\'espèces rares de faune et de flore, dont certaines sont énumérées dans le Livre rouge, de magnifiques parcs et le seul désert d\'Europe.')); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'الأمن' : (($lang == 'en') ? 'SECURITY' : 'SÉCURITÉ')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'اشعر  بالأمان والهدوء' : (($lang == 'en') ? 'Feel safe and calm!' : 'Sentez-vous en sécurité et calme!')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'كل شخص يعيش في أوكرانيا أو سائح زار هذا المكان سيخبرك بثقة أنه بلد آمن جداً! من خلال البقاء في نزل ، والمشي في الشوارع ، والسفر إلى الداخل ، فلن تخاف من أي شيء خاطئ. إذا كنت تواجه مشاكل وتحتاج إلى مساعدة شخص ما ، فستجد بالتأكيد أشخاصًا يحاولون حلها أو تخبرك أين تذهب وكيفية الوصول إلى مكان ما. معظم الأوكرانيين يتحدثون اللغة الإنجليزية وهم دائما على استعداد لتقديم المساعدة. بالإضافة إلى ذلك ، أوكرانيا لديها نظام شرطة قوي جدا. تم تجهيز الحرم الجامعي وبيوت الشباب والجامعات بكاميرات مراقبة وأنظمة أمنية. توفر مراكز الأمن الجامعية تغطية أمنية على مدار الساعة للجامعات والمساكن الجامعية. نظام كامل من كاميرات الدوائر التلفزيونية المغلقة تعمل في حرم الجامعات ، بما في ذلك بعض المواقع السكنية الكبيرة. تستخدم الكاميرات لتوجيه موظفي الأمن في حالة وقوع حادث وتعمل المراكز بشكل وثيق مع الشرطة.' 
                    : (($lang == 'en') ? "Every person living in Ukraine or a tourist who has visited this place will tell you with confidence that it is a very safe and secure country! By staying in a hostel, walking the streets, traveling inland, you will not be afraid of anything wrong. If you are having problems and need someone's help, you will certainly find people trying to solve them or telling you where to go and how to get somewhere. Most Ukrainians speak English and are always ready to offer help. In addition, Ukraine has a very strong police system. Campuses, hostels and universities are equipped with surveillance cameras and security systems. University security centers provide 24-hour security coverage for campuses and university residences. A complete system of CCTV cameras is operating on university campuses, including some of the larger residential sites. Cameras are used to direct security personnel in the event of an incident and the centers work closely with the police." 
                    : "Chaque personne vivant en Ukraine ou un touriste qui a visité cet endroit vous dira avec confiance que c'est un pays très sûr et sécurisé! En séjournant dans une auberge de jeunesse, en marchant dans les rues, en voyageant à l'intérieur du pays, vous ne craindrez rien de mal. Si vous rencontrez des problèmes et avez besoin de l'aide de quelqu'un, vous trouverez certainement des personnes qui essaient de les résoudre ou vous disent où vous devez aller et comment vous rendre quelque part. La plupart des Ukrainiens parlent anglais et sont toujours prêts à offrir leur aide. De plus, l'Ukraine dispose d'un système de police très fort. Les campus, les auberges et les universités sont équipés de caméras de surveillance et de systèmes de sécurité. Les centres de sécurité des universités fournissent une couverture de sécurité 24 heures sur 24 pour les campus et les résidences universitaires. Un système complet de caméras de vidéosurveillance fonctionne sur les campus des universités, y compris dans certains des grands sites résidentiels. Les caméras sont utilisées pour diriger le personnel de sécurité en cas d'incident et les centres travaillent en liaison étroite avec la police.")); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'حياة الطالب' : (($lang == 'en') ? 'The life of the student' : 'La vie de l\'étudiant')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'الحياة الطلابية في أوكرانيا هي بالتأكيد أرخص من الدول الأوروبية الأخرى!' : (($lang == 'en') ? 'Student life in Ukraine is obviously cheaper than other European countries!' : 'La vie étudiante en Ukraine est visiblement moins chère que celle d’autres pays européens!')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? "إنه مكان للدراسة يتجاوز الصفوف الدراسية. استمتع بحياة متعددة الثقافات واحصل على تجارب جديدة كل يوم! تعلم من أفضل المتخصصين والازدهار كمحترف معترف به عالميا. أوكرانيا تمنحك هذه الفرصة.
                    لا تختلف الحياة الطلابية في أوكرانيا كثيرًا عن الحياة في الدول الأوروبية الأخرى. يدرس الطلاب ، يلتقون بأشخاص جدد ، يقضون الوقت ، يتعلمون أشياء جديدة ، يسافرون إلى أوروبا ، وهكذا. معظم الطلاب يعيشون في الحرم الجامعي. تمتلك الحرم الجامعي كل التسهيلات اللازمة لإقامة مريحة وآمنة: المكتبات ، المستشفيات ، صالات الرياضة ، قاعات المؤتمرات والحفلات الموسيقية ، المختبرات وغيرها من مرافق التدريب ، الأمن ، إلخ.
                    جميع الجامعات لديها جمعيات طلابية تم إنشاؤها لتنظيم وإثراء حياة الطلاب الاجتماعية والأكاديمية.
                    يتم تقديم العديد من الأنشطة والمسابقات والنوادي الثقافية في مجتمعات الطلاب المحلية. تحظى مسابقات العصف الذهني بشعبية في أوكرانيا ويشارك الطلاب أيضًا في المؤتمرات العلمية لتقديم أبحاثهم." 
                    : (($lang == 'en') ? "It's a place to study that goes beyond classrooms. Enjoy your multicultural life and get new experiences every day! Learn from the best specialists and prosper as a globally recognized professional. Ukraine gives you this chance.
                    Student life in Ukraine does not differ much from that of other European countries. Students study, meet new people, spend time, learn new things, travel to Europe, and so on. Most students live on campus. Campuses have all the necessary facilities for a comfortable and safe stay: libraries, hospitals, gyms, conference and concert halls, laboratories and other training facilities, security, etc.
                    All universities have student associations that have been created to organize and enrich students' social and academic life.
                    Many activities, competitions and cultural clubs are offered in local student communities. Brainstorming competitions are popular in Ukraine and students also participate in scientific conferences to present their research." 
                    : "C'est un endroit où étudier va au-delà des salles de classe. Profitez de votre vie multiculturelle et obtenez de nouvelles expériences chaque jour! Apprenez des meilleurs spécialistes et prospérez en tant que professionnel mondialement reconnu. L'Ukraine vous donne cette chance.
                    La vie étudiante en Ukraine ne diffère pas beaucoup de celle des autres pays européens. Les étudiants étudient, rencontrent de nouvelles personnes, passent du temps, apprennent de nouvelles choses, voyagent en Europe, etc. La plupart des étudiants vivent sur le campus. Les campus disposent de toutes les installations nécessaires pour un séjour confortable et en toute sécurité: bibliothèques, hôpitaux, gymnases, salles de conférence et de concert, laboratoires et autres installations de formation, sécurité, etc.
                    Toutes les universités ont des associations d'étudiants qui ont été créées pour organiser et enrichir la vie sociale et académique des étudiants.
                    De nombreuses activités, concours et clubs culturels sont proposés dans les communautés étudiantes locales. Les concours de brainstorming sont populaires en Ukraine et les étudiants participent également à des conférences scientifiques pour présenter leurs recherches.")); ?></p>                    
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="capitalize section-title"><?php echo (($lang == 'ar') ? 'الرياضة' : (($lang == 'en') ? 'SPORT' : 'SPORT')); ?></h2>
                    <h3><?php echo (($lang == 'ar') ? 'كن صحيًا وصالحًا' : (($lang == 'en') ? 'Be healthy and fit!' : 'Être en bonne santé et en forme!')); ?></h3>
                </div>
                <div class="row">
                    <p><?php echo (($lang == 'ar') ? 'في أوكرانيا ، يمكنك العثور على جميع الألعاب الرياضية التي تريدها ، حرم الجامعات الكبيرة مع الصالات الرياضية الخاصة بهم والملاعب. أكثر الرياضات الجماعية شعبية هي كرة القدم والكرة الطائرة وكرة السلة وكرة القدم والرجبي والكريكيت. تنس ، وتنس الريشة والشطرنج هي من بين الرياضات الأخرى المتاحة للطلاب. يتم تنظيم البطولات الرياضية باستمرار في جميع أنحاء أوكرانيا.
                    الثقافة الرياضية في أوكرانيا تنمو بسرعة. استضافت أوكرانيا UEFA Euro 2012 في الملاعب الرياضية الحديثة الضخمة مثل "Olimpiyskiy" في كييف ، "Metallist" في خاركوف و "Arena Lviv" في لفيف. في كل مدينة ، يمكنك العثور على صالة رياضية بأسعار معقولة بالقرب منك ولا تنسى أن تسأل عن خصومات الطلاب!' 
                    : (($lang == 'en') ? 'In Ukraine, you can find all the sports you like, large university campuses with their own gyms and playgrounds. The most popular team sports are football, volleyball, basketball, soccer, rugby and cricket. Tennis, badminton and chess are among other sports available to students. Sports tournaments are constantly organized throughout Ukraine.
                    Sports culture in Ukraine is growing rapidly. Ukraine hosted UEFA Euro 2012 in huge modern sports stadiums such as "Olimpiyskiy" in Kiev, "Metallist" in Kharkiv and "Arena Lviv" in Lviv. In every city, you can find a reasonably priced gym near you and do not forget to ask for student discounts!' 
                    : "En Ukraine, vous pouvez trouver tous les sports que vous aimez, les grands campus universitaires disposant de leurs propres gymnases et terrains de jeux. Les sports d'équipe les plus populaires sont le football, le volleyball, le basketball, le soccer, le rugby et le cricket. Le tennis, le badminton et les échecs font partie des autres sports proposés aux étudiants. Des tournois sportifs sont constamment organisés dans toute l'Ukraine.
                    La culture sportive en Ukraine se développe rapidement. L'Ukraine a accueilli l'UEFA Euro 2012 dans d'énormes stades de sport modernes tels que «Olimpiyskiy» à Kiev, «Metallist» à Kharkiv et «Arena Lviv» à Lviv. Dans chaque ville, vous pouvez trouver un gymnase à un prix raisonnable non loin de chez vous et n'oubliez pas de demander des rabais pour étudiants!")); ?></p>                
                </div>
            </div>
        </div>
    </div>
</div>   
    <?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>