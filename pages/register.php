<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Inscription',5)
?>

<?php include $path.'/layouts/feature.php';
        $txt = "inscription";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("inscription", "تسجيل", "inscription");
        }
        feature_txt($txt, "");
?>
<div class="section register">
    <div class="">
        <p><?php echo (($lang == 'ar') ? "في السنوات الأخيرة ، أصبحت أوكرانيا وروسيا وجهة لعدد كبير من الطلاب المغاربة ، لمتابعة تعليمهم العالي في واحدة من جامعاتها الدولية." : (($lang == 'en') ? "In recent years, Ukraine and Russia have become the destination of a large number of Moroccan students, to pursue their higher education in one of its international universities." : "Ces dernières années, l’Ukraine et la Russie sont devenue la destination d’un nombre important d'étudiants marocains, pour poursuivre leurs études supérieures dans l’une de ses universités internationales.")); ?></p>
        <hr>
        <div class="">
            <h2><?php echo (($lang == 'ar') ? "معايير القبول والتسجيل:" : (($lang == 'en') ? "Criteria for admission and registration:" : "Critères d'admission et d’inscription :")); ?></h2>
            <p><?php echo (($lang == 'ar') ? "الطالب المغربي (مثل أي طالب أجنبي آخر) له الحق في الالتحاق بالتعليم العالي في جامعات أوكرانيا / روسيا: - فقط شهادة البكالوريا أو ما يعادلها مطلوبة. لا توجد علامة الاستدلال. - درجة البكالوريوس (الحد الأدنى للصف هو 10+) ؛" : (($lang == 'en') ? "The Moroccan student (like any other foreign student) has the right to be admitted to higher education in the Universities of Ukraine / Russia: <br>
            - Only the baccalaureate or equivalent degree is required. There is no eliminatory mark. <br>
            - bachelor's degree (minimum grade is 10+);" : "L’étudiant marocain (comme tout autre étudiant étranger) a le droit d’être admis aux études supérieures dans les Universités  d’Ukraine/Russie : <br>
            - Seul le bac ou un diplôme équivalent est exigé.  Il n’y a pas de note éliminatoire. <br>
            - baccalauréat (note minimale est 10+);")); ?></p>
            <p><?php echo (($lang == 'ar') ? "أهم خطوة أولى للتسجيل في جامعة ولاية أوكرانيا / روسيا هي تسجيل ملف التسجيل وتلقي « خطاب التسجيل » الخاص بك الذي يؤكد قبولك في الجامعة. سيرشدك RAE خلال عملية القبول في الجامعات ، فقط أرسل لنا المستندات التالية للبدء:" : (($lang == 'en') ? "The most important first step of registration at the State University of Ukraine / Russia is the registration of the registration file and receive your «Letter of registration» confirming your admission to university. RAE will guide you through the process of admission to universities, just send us the following documents to start:" : "La première étape la plus essentielle de l’inscription à l’université d’État d'Ukraine /Russie c’est le dépôt du dossier d'inscription et recevoir votre « Lettre d’inscription » confirmant votre admission à l’université.
            RAE se charge de vous guider tout au long de la procédure d’admission aux universités, vous n’avez qu’à nous envoyer les documents suivants pour commencer:")); ?></p>
            <ul class="list-group">
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "مسح جواز السفر (يجب ألا تقل صلاحية جواز السفر عن سنة واحدة) ؛" : (($lang == 'en') ? "Scan of the passport (Validity of the passport must not be less than one year);" : "Scan du passeport (Validité du passeport ne doit pas être moins qu’un an) ;")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة الثانوية العامة (البكالوريا)" : (($lang == 'en') ? "Secondary School Certificate Scan (Baccalaureate)" : "Scan de certificat des études secondaires (Baccalauréat)")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "مسح النصوص." : (($lang == 'en') ? "Scan of transcripts." : "Scan de  relevés de notes.")); ?></li>
            </ul>
            <p class=""><?php echo (($lang == 'ar') ? "هذه ضرورية لطلب دعوة وهو إلزامي للحضور في سفارة أوكرانيا / روسيا للحصول على تأشيرة الطالب !!!" : (($lang == 'en') ? "These are necessary to request an Invitation and it is mandatory to be present at the Embassy of Ukraine / Russia to obtain the Student Visa !!!" : "Ces derniers  sont nécessaires pour demander une Invitation et qu’elle est obligatoire d’être présenter à l’Ambassade de l’Ukraine/Russie pour obtenir le Visa étudiant !!!")); ?></p>
            <hr>
            <p><?php echo (($lang == 'ar') ? "إذا تم قبول الملف ، يجب على الشخص الحضور إلينا للحصول على «دعوة للدراسات» الرسمية التي أصدرها من قبل وزارة التعليم والعلوم في أوكرانيا / روسيا." : (($lang == 'en') ? "If the file is accepted, the person must come to us to have his official «Invitation for Studies» issued to his name by the Ministry of Education and Science of Ukraine / Russia." : "Si le dossier est accepté, l’intéressé doit venir chez nous pour avoir son «Invitation pour études» officielle délivrée à son nom par le Ministère de l’Education et des Sciences de l’Ukraine/Russie.")); ?></p>
            <ul class="list-group">
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "يتم دفع الرسوم الدراسية والمصاريف الأخرى من قبل الشخص المعني بعد وصوله على الفور (في أوكرانيا)." : (($lang == 'en') ? "The payment of tuition and other expenses is made by the person concerned after his arrival on the spot (in Ukraine)." : "Le paiement des frais d’études et d’autres dépenses sont effectués par l’intéressé après son arrivée sur place (en Ukraine).")); ?></li>
                <li class="list-group-item"><?php echo (($lang == 'ar') ? "يتم دفع الرسوم الدراسية والمصاريف الأخرى من قبل الشخص المعني قبل وصوله (في روسيا)." : (($lang == 'en') ? "The payment of tuition fees and other expenses are made by the person concerned before his arrival (in Russia)." : "Le paiement des frais d’études et d’autres dépenses sont effectués par l’intéressé avant son arrivée (en Russie).")); ?></li>
            </ul>
        </div>
        <p class="">
            <span><?php echo (($lang == 'ar') ? "بالنسبة لأولئك الذين لديهم بالفعل bac + 2 أو أكثر ، ترحب بكم أوكرانيا / روسيا أيضًا. خطة دراسة تلخص المواضيع التي تمت دراستها في المغرب وعدد ساعات الدراسة لكل موضوع ونسخة طبق الأصل من الملاحظات سوف تتحقق من أن لديك جميع المتطلبات الأساسية لدمج المسار الذي تختاره! !" : (($lang == 'en') ? "For those who already have a bac + 2 or more, Ukraine / Russia also welcomes you. A study plan summarizing the subjects studied in Morocco and the number of hours of study for each subject and a transcript of the notes will verify that you have all the prerequisites to integrate the course of your choice! !" : "Pour ceux qui ont déjà un bac+2 ou plus, l’Ukraine/Russie vous accueille également. Un plan d’études récapitulant les matières étudiées au Maroc et le nombre d’heure d’étude pour chaque matière ainsi qu'un relevé des notes permettra de vérifier que vous avez bien tous les pré requis pour intégrer la filière de votre choix !!!")); ?></span>
        </p>
        <hr>
        <p><?php echo (($lang == 'ar') ? "بالنسبة لأولئك الذين يرغبون في مواصلة دراستهم في اللغة الإنجليزية أو الفرنسية لا توجد حاجة لتقديم نتائج الاختبارات الدولية مثل IELTS ، TOELF ، CAE ، DALF ، TCF ، إلخ !!!" : (($lang == 'en') ? "For those who want to continue their studies in English or in French There is no need to present the results of international tests like IELTS, TOELF, CAE, DALF, TCF, etc !!!" : "Pour ceux qui veulent poursuivre leurs études en anglais ou bien en Français Il n y a pas besoin de présenter les résultats de testes internationaux comme IELTS ,TOELF, CAE ,DALF,TCF ,etc !!!")); ?></p>
        <hr>
        <p><?php echo (($lang == 'ar') ? "<span class='btn btn-danger'>انتباه :</span>  يعتمد التسجيل على توافر الأماكن المحجوزة من قبل جامعات دولة أوكرانيا / روسيا للطلاب القادمين من المغرب. من المستحسن عدم التأخير في إيداع الملف!" : (($lang == 'en') ? "<span class='btn btn-danger'>Attention :</span> Registration is based on the availability of places reserved by the universities of the State of Ukraine / Russia for students coming from Morocco. It is recommended not to delay with the filing of the file!" : "<span class='btn btn-danger'>Attention : </span> Les inscriptions se font selon la disponibilité des places réservées par les universités de l'état d'Ukraine /Russie pour les étudiants venant du Maroc. Il est recommandé de ne pas tarder avec le dépôt du dossier !!!")); ?></p>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>