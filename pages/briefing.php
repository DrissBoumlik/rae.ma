<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("توجيهات","Briefing","Briefing");
    title_page($title, 6)
?>

<?php include $path.'/layouts/feature.php';
    $txt = "briefing";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("briefing", "توجيهات", "briefing");
    }
    feature_txt($txt, "briefing");
?>

<div class="section briefing">
    <div class="">
        <div class="row">
            <hr class="section-title-line">
            <h2 class="section-title"><?php echo (($lang == 'ar') ? "إحاطة قبل المغادرة" : (($lang == 'en') ? "Briefing before departure" : "Briefing avant le départ")); ?></h2>
        </div>
        <div class="row">
            <?php echo (($lang == 'ar') ? "<p>يسعدنا أن تكون قد قررت الدراسة في أوكرانيا / روسيا ونأمل أن نراكم قريبًا.</p>
            <p>نحن نعلم أنه سيكون لديك الكثير من الأشياء لتنظيمها قبل وصولك ، ويصعب أحيانًا معرفة من أين تبدأ. نأمل أن تساعدك هذه الصفحة في تحضيراتك وتعطيك فكرة عما تتوقعه عند وصولك.</p>
            <p>أولا ، تحقق مع شركة الطيران الخاصة بك عن القيود المفروضة على شركات الطيران ، أي عدد الحقائب المسموح بها وما هو الحد الأقصى للوزن؟ يجب دفع أي أمتعة زائدة بالكيلوغرام ويمكن أن تكون باهظة الثمن.</p>" : (($lang == 'en') ? "<p>We are delighted that you have decided to study in Ukraine / Russia and we hope to see you soon</p>
            <p>We know that you will have many things to organize before your arrival and it is sometimes difficult to know where to start. We hope this page will help you in your preparations and give you an idea of ​​what to expect when you arrive.</p>
            <p>First, check with your airline for restrictions on carriers, ie how many bags are allowed and what is the maximum weight? Any excess luggage must be paid in kg and can be expensive.</p>" : "<p>Nous sommes ravis que vous avez décidé d’étudier en Ukraine / Russie et nous espérons vous voir bientôt.</p>
            <p>Nous savons que vous aurez beaucoup de choses à organiser avant votre arrivée et il est parfois difficile de savoir par où commencer. Nous espérons que cette page vous aidera dans vos préparatifs et vous donnera une idée de ce qui vous attendre lors de votre arrivée.</p>
            <p>Tout d’abord, vérifiez auprès de votre compagnie aérienne les restrictions imposées aux transporteurs, c’est-à-dire combien de sacs sont autorisés et quel est le poids maximal? Tout excédent de bagage doit être payé en kg et peut coûter cher.</p>")); ?>
        </div>
        <div class="row">
            <h3><?php echo (($lang == 'ar') ? "الملابس لجلب!" : (($lang == 'en') ? "Clothes to bring!" : "Des vêtements à apporter!")); ?></h3>
            <?php echo (($lang == 'ar') ? "<p>يرتدي الطلاب عرضا ، بشكل غير رسمي ، مع الجينز والقمصان والسترات الصوفية ، ولكن ستكون هناك حاجة لعدة مجموعات من الملابس الرسمية. من المستحسن أن تجلب ملابس دافئة مثل معطف ، حذاء ، غطاء ، قفازات ، وشاح ، إلخ ، بالإضافة إلى مستلزمات النظافة الشخصية. ننصحك بعدم شراء الكثير من الملابس الشتوية قبل الوصول إلى الجامعة. لرحلتك من سبتمبر إلى أكتوبر ، يمكنك جلب سترة سهلة ، والجينز ، والجوارب ، والأحذية ، بينما في فصل الشتاء ، من نوفمبر إلى ديسمبر ، سيكون عليك ارتداء معطف دافئ ، وسترة ، والسراويل الدافئة ، الأحذية والقبعات والقفازات. بالإضافة إلى الملابس غير الرسمية ، قد ترغب في جلب ملابس رسمية للمناسبات الخاصة مثل مؤتمر أو ندوة. قد ترغب أيضًا في جلب الزي الوطني للأحداث الطلابية الدولية.</p>
            <p>من بين المنتجات الكهربائية ، يرجى إحضار الأشياء الصغيرة فقط مثل مجففات الشعر وشفرات الحلاقة وأجهزة الكمبيوتر المحمولة.</p>
            <p><strong>يرجى عدم إحضار أكثر من حقيبتين وتأكد من أنه يمكنك رفع وحمل هذه الحقائب.</strong></p>" : (($lang == 'en') ? "<p>Students dress casually, informally, with jeans, t-shirts and sweaters, but several sets of formal clothing will be required. It is recommended that you bring warm clothing such as a coat, boots, cap, gloves, scarf, etc., as well as personal hygiene items. We recommend that you do not buy too much winter clothing before arriving at the university. For your trip from September to October, you can bring an easy jacket, jeans, socks, boots, while in winter, from November to December, you will have to wear a warm coat, a sweater, warm pants, boots, cap and gloves. In addition to casual clothes, you may want to bring formal wear for special events such as a conference or seminar. You may also want to bring your national costume for international student events.</p>
            <p>Among the electrical products, please bring only small items such as hair dryers, razors and laptops.</p>
            <p><strong>Please do not bring more than two suitcases and make sure you can lift and carry these suitcases.</strong></p>" : "<p>Les étudiants s'habillent de façon décontractée, de manière informelle, avec des jeans, des t-shirts et des pulls, mais plusieurs ensembles de vêtements officiels seront nécessaires. Il est recommandé d’emporter avec vous des vêtements chauds comme un manteau, des bottes, une casquette, des gants, une écharpe, etc., ainsi que des articles d’hygiène personnelle. Nous vous recommandons de ne pas acheter trop de vêtements d'hiver avant d'arriver à l'université. Pour votre voyage de septembre à octobre, vous pourrez emporter une veste facile, un jean, des chaussettes, des bottes, tandis qu'en hiver, de novembre à décembre, vous devrez porter un manteau chaud, un pull, un pantalon chaud, des bottes , casquette et gants. En plus des vêtements décontractés, vous voudrez peut-être apporter des vêtements de cérémonie pour des événements spéciaux tels qu'une conférence ou un séminaire. Vous voudrez peut-être aussi apporter votre costume national pour des événements étudiants internationaux.</p>
            <p>Parmi les produits électriques, veuillez n’apporter que des articles de petite taille tels que sèche-cheveux, rasoirs et ordinateurs portables. </p>
            <p><strong>Veuillez ne pas apporter plus de deux valises et assurez-vous de pouvoir soulever et transporter ces valises.</strong></p>")); ?>
        </div>
        <div class="row">
            <h3><?php echo (($lang == 'ar') ? "من فضلك لا تجلب:" : (($lang == 'en') ? "Please do not bring:" : "S'il vous plaît ne pas apporter:")); ?></h3>
            <ul class="list-group">
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "أجهزة طهي الأرز أو الطعام أو أواني الطهي معك. سوف تكون قضيتك ثقيلة جدا لتحملك! يمكنك شراء القدور والمقالي والأطباق وغيرها من أدوات المطبخ بأسعار رائعة في محلات السوبر ماركت بالقرب من المساكن الجامعية." : (($lang == 'en') ? "Rice cookers, food or cooking utensils with you. Your case will be too heavy to carry you! You can buy pots and pans, plates and other kitchen utensils at great prices in supermarkets near university residences." : "Cuiseurs de riz, de la nourriture ou des ustensiles de cuisine avec vous. Votre cas sera trop lourd pour vous porter! Vous pouvez acheter des casseroles, des assiettes et d'autres ustensiles de cuisine à très bon prix dans les supermarchés situés à proximité des résidences universitaires.")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "ستجد أن المدن التي توجد بها الجامعات بها العديد من متاجر الأغذية الدولية ، بالإضافة إلى محلات السوبر ماركت الكبيرة والأسواق حيث يمكنك العثور على العديد من المكونات المتوفرة في بلدك. يمكنك أيضًا استخدام الكانتين أو الفوضى أو المطاعم لتناول الوجبات اليومية." : (($lang == 'en') ? "You will find that the cities where the universities are located have many international food stores, as well as large supermarkets and markets where you can find many ingredients available in your home country. You can also use the canteen, mess or restaurants for your daily meals." : "Vous constaterez que les villes où sont situées les universités comptent de nombreux magasins d’aliments internationaux, ainsi que de grands supermarchés et marchés où vous pourrez trouver de nombreux ingrédients disponibles dans votre pays d’origine. Vous pouvez également utiliser la cantine, le mess ou les restaurants pour vos repas quotidiens.")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "كل ما كنت تكره أن تخسره. ترك المجوهرات الثمينة أو باهظة الثمن ، وجميع بطاقات الائتمان وبطاقات المكتبة والعناصر المماثلة التي تحتاج إليها في محفظتك." : (($lang == 'en') ? "All you would hate to lose. Leave valuable or expensive jewelery, all the credit cards, library cards and similar items you need in your wallet." : "Tout ce que tu détesterais perdre. Laissez à la maison des bijoux précieux ou chers, toutes les cartes de crédit, cartes de bibliothèque et objets similaires inutiles que vous pourriez avoir dans votre portefeuille.")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "أدوات النظافة التي يمكنك شراؤها في الخارج لأنه وزن غير مجدية (الشامبو / مكيف ، مزيل العرق ، ومعجون الأسنان)." : (($lang == 'en') ? "Toiletries you can buy abroad because it's a useless weight (shampoo / conditioner, deodorant, toothpaste)." : "Articles de toilette que vous pouvez acheter à l'étranger parce que c'est un poids inutile (shampoing / revitalisant, déodorant, dentifrice).")); ?></li>
            </ul>
        </div>
        <p class="underline"><?php echo (($lang == 'ar') ? "لأوكرانيا! تأكد من أنك ترتدي جواز سفرك الدولي ورسالة الدعوة الأصلية في حملتك !!" : (($lang == 'en') ? "For Ukraine! Make sure you wear your international passport and the original invitation letter in your carry-on !!" : "Pour l'Ukraine! Assurez-vous que vous portez votre passeport international et la lettre d'invitation originale dans votre bagage à main !!")); ?></p>
        <div class='row'>
            <h3><?php echo (($lang == 'ar') ? "وثائق لجلبها إلى أوكرانيا:" : (($lang == 'en') ? "Documents to bring to Ukraine:" : "Documents à apporter en Ukraine:")); ?></h3>
            <ul class="list-group">
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "خطاب الدعوة الأصلي" : (($lang == 'en') ? "Original invitation letter;" : "Lettre d'invitation originale;")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "جواز السفر الدولي (صالح لمدة سنتين كحد أدنى) ؛" : (($lang == 'en') ? "International passport (valid for 2 years minimum);" : "Passeport international (valable 2 ans minimum);")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة الميلاد (مترجمة إلى الأوكرانية وتحمل ختم الرسول لوزارة الشؤون الخارجية في بلدك). إذا لم يكن هناك شهادة ميلاد ، فيجب أن يحصل طالب التأشيرة على شهادة خطية (موثقة) ؛" : (($lang == 'en') ? "Birth certificate (translated into Ukrainian and bearing the seal of the Apostle of the Ministry of Foreign Affairs of your country). If there is no birth certificate, the visa applicant should obtain an affidavit (notarized);" : "Acte de naissance (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires étrangères de votre pays). En cas d'absence de certificat de naissance, le demandeur de visa devrait obtenir un affidavit (notarié);")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "دبلوم المدرسة الثانوية (مترجمة إلى اللغة الأوكرانية وتحمل ختم الرسول الخاص بوزارة الشؤون الخارجية في بلدك الأصلي) ؛" : (($lang == 'en') ? "Secondary School Diploma (translated into Ukrainian and bearing the seal of the Apostle of the Ministry of External Affairs of your country of origin);" : "Diplôme d'études secondaires (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires extérieures de votre pays d'origine);")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة طبية من aptitude العام (مترجمة إلى الأوكرانية وتحمل ختم الرسول لوزارة الشؤون الخارجية في بلدك)." : (($lang == 'en') ? "Medical certificate of general aptitude (translated into Ukrainian and bearing the seal of the apostle of the Ministry of Foreign Affairs of your country)." : "Certificat médical d'aptitude générale  (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires étrangères de votre pays).")); ?></li>

            </ul>
        </div>
        <div class='row'>
            <h3><?php echo (($lang == 'ar') ? "وثائق لجلب إلى روسيا:" : (($lang == 'en') ? "Documents to bring to Russia:" : "Documents à apporter en Russie:")); ?></h3>
            <ul class="list-group">
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "جواز السفر الدولي الأصلي (صالح لمدة سنتين كحد أدنى) ؛" : (($lang == 'en') ? "Original international passport (valid for 2 years minimum);" : "Passeport international original (valable 2 ans minimum);")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "دبلوم المدرسة الثانوية (مصدقة من وزارة الخارجية أو بختم أبوستيل) ؛" : (($lang == 'en') ? "Secondary school diploma (attested by the Ministry of Foreign Affairs or with the stamp of the Apostille);" : "Diplôme d'études secondaires (attesté par le ministère des Affaires étrangères ou avec le cachet de l'Apostille);")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "اختبار فيروس نقص المناعة البشرية / الإيدز ، الذي يظهر غياب فيروس نقص المناعة البشرية / الإيدز ؛" : (($lang == 'en') ? "HIV-AIDS test, showing the absence of HIV / AIDS;" : "Test VIH-SIDA , montrant l'absence de VIH / SIDA;")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "8 صور بحجم جواز السفر 3.5 × 4.5 ؛" : (($lang == 'en') ? "8 passport size photos 3.5 x 4.5;" : "8 photos de format passeport 3,5 x 4,5;")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "السنة الأولى رسوم تحويلات الرسوم." : (($lang == 'en') ? "First year fee remittance slip." : "Bulletin de versement des frais de première année .")); ?></li>
            </ul>
        </div>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>