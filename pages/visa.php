<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("تأشيرة دخول", "visa","Visa");
    title_page($title,6)
?>


<?php include $path.'/layouts/feature.php';
        $txt = "visa";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("visa", "تأشيرة دخول", "visa");
        }
        feature_txt($txt, "");
?>

<div class="visa">
    <div class="">
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "شروط الحصول على تأشيرة دخول للطلاب (النوع D - الإقامة الطويلة) - أوكرانيا" : (($lang == 'en') ? "CONDITIONS FOR OBTAINING VISA FOR STUDENTS (type D - long stay) -UKRAINE" : "CONDITIONS D’OBTENTION DE VISA POUR ETUDIANTS  (type D – de long séjour ) -UKRAINE")); ?></h2>
                </div>
                <div class="row">
                    <h3><?php echo (($lang == 'ar') ? "يجب أن يتضمن الملف الوثائق التالية:" : (($lang == 'en') ? "The file must include the following documents:" : "Le dossier doit comporter les documents suivants :")); ?></h3>
                    <ol class="keep-list-style list-group">
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "استمارة طلب التأشيرة الموقعة والموقعة (<a href='https://visa.mfa.gov.ua/'>https://visa.mfa.gov.ua</a>)" : (($lang == 'en') ? "Completed and signed visa application form (<a href='https://visa.mfa.gov.ua/'>https://visa.mfa.gov.ua/</a>)" : "Formulaire de demande de visa dûment rempli et signé ( <a href='https://visa.mfa.gov.ua/'>https://visa.mfa.gov.ua</a> )")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "صورتا هوية بحجم 35 × 45 ملم على خلفية بيضاء ، يمثل الوجه 70 إلى 80٪ من الصورة." : (($lang == 'en') ? "Two 35 x 45 mm identity photos on a white background, the face representing 70 to 80% of the photo." : "Deux photos d’identité couleur 35 sur 45 mm, sur fond blanc, le visage représentant 70 à 80% de la photo.")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "الدعوة الأصلية الصادرة عن مؤسسة للتعليم العالي في أوكرانيا ومسجلة من قبل «مركز الدولة الأوكرانية للتعليم الدولي»." : (($lang == 'en') ? "The original invitation issued by a higher education institution in Ukraine and registered by the «Ukrainian State Center of International Education»." : "L’original de l’invitation émise par un établissement d’enseignement supérieur en Ukraine et enregistrée par le «Ukrainian State Center of International Education».")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "جواز سفر بالإضافة إلى صورة من الصفحات الرئيسية لجواز السفر (صفحات مع صورة ، تاريخ صلاحية جواز السفر ، تأشيرات مختلفة)." : (($lang == 'en') ? "Passport plus photocopy of the main pages of the passport (pages with photo, date of validity of the passport, various visas)." : "Passeport plus photocopie des pages principales du passeport (pages avec photo, date de validité du passeport, divers visas).")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "صورة من بطاقة الهوية الوطنية ؛" : (($lang == 'en') ? "Photocopy of the national identity card;" : "Photocopie de la carte nationale d’identité;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة البكالوريا مع أبوستيل." : (($lang == 'en') ? "Certificate of Baccalaureate with Apostille;" : "Attestation de baccalauréat avec Apostille;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "سجل درجات البكالوريا مع الأبوستيل." : (($lang == 'en') ? "Record of the grades of the baccalaureate with Apostille;" : "Relevé des notes du baccalauréat avec Apostille;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "مقتطف من شهادة الميلاد (مكتوبة بالفرنسية) ، مع أبوستيل ؛" : (($lang == 'en') ? "Extract of the birth certificate (written in French), with Apostille;" : "Extrait de l’acte de naissance (rédigé en français), avec Apostille;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "سجل الأنثروبومترية (سجل جنائي)" : (($lang == 'en') ? "Anthropometric record (criminal record)" : "Fiche anthropométrique (casier judiciaire)")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة طبية من اللياقة البدنية على الحالة الصحية مع أبوستيل ، التي صدرت لمدة شهرين على الأقل قبل تاريخ المغادرة إلى أوكرانيا." : (($lang == 'en') ? "Medical certificate of physical fitness on health status with Apostille, issued for at least two months prior to the date of departure to Ukraine;" : "Certificat médical d’aptitude physique sur l’état de santé avec Apostille, délivré pour une durée de deux mois au moins précédant la date du départ en Ukraine;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة فيروس نقص المناعة البشرية ذات نتيجة سلبية (وثيقة أصلية مع ختم مختبر وتوقيع الطبيب) ؛" : (($lang == 'en') ? "HIV certificate with negative result (original document with laboratory seal and doctor's signature);" : "Certificat VIH avec le résultat négatif (document original avec le cachet du laboratoire et la signature du médecin);")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "كشف البنك لأحد الوالدين في الأشهر الثلاثة الأخيرة قبل تاريخ تقديم ملف التأشيرة أو آخر 3 كشوف راتب." : (($lang == 'en') ? "The bank statement of one of the parents of the last three months before the date of the filing of the visa file or the last 3 payslips." : "Le relevé bancaire de l'un des parents de trois derniers mois avant la date du dépôt de dossier de visa ou 3 derniers bulletins de salaire.")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "دعمت شهادة مكتوبة باللغة الفرنسية من قبل أحد الوالدين، وذكر له العنوان ورقم الهاتف، والتوقيع التحقق من صحتها، ونسخة من CIN الضامن." : (($lang == 'en') ? "Attestation of care drafted in French by one of the parents, with mention of his address and telephone number, validated signature, as well as a simple photocopy of the CIN of the guarantor." : "Attestation de prise en charge rédigée en français par un des parents, avec mention de son adresse et numéro de téléphone, signature validée, ainsi que la photocopie simple de la CIN du garant.")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة التأمين على السفر العالمي صالحة لمدة لا تقل عن 6 أشهر بعد تاريخ الدخول إلى أوكرانيا." : (($lang == 'en') ? "Certificate of world travel insurance valid for a minimum of 6 months after the date of entry into Ukraine." : "Attestation d’assurance de voyage mondial valable 6 mois minimum après la date d'entrée en Ukraine.")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "إذن الأهل للخروج من الأراضي المغربية مصدقة مع السلطات المختصة - فقط للقصر." : (($lang == 'en') ? "Parental authorization of exit of the Moroccan territory certified with the competent authorities - only for the minors." : "Authorisation parentale de sortie du territoire marocain certifiée auprès des autorités compétentes - seulement pour les mineurs.")); ?></li>
                    </ol>
                    <p><?php echo (($lang == 'ar') ? "يجب أن تكون كل وثيقة تحت أرقام 3 و 4 و 5 و 6 و 7 و 8 و 9 و 10 و 13 و 14 مصحوبة بنسخة طبق الأصل من الصفحة !!!" : (($lang == 'en') ? "Each document under numbers 3, 4, 5, 6, 7, 8, 9, 10, 13 and 14 must be accompanied by a photocopy recto verso !!!" : "Chaque document sous les numéros 3, 4, 5, 6, 7, 8, 9, 10, 13 et 14 doit être accompagné de sa photocopie recto verso !!!")); ?></p>
                    <p><?php echo (($lang == 'ar') ? "ملاحظة: مدة صلاحية تأشيرة الطالب هي 90 يومًا. وخلال هذه الفترة يجب على الطالب الأجنبي يصل في أوكرانيا، إضفاء الطابع الرسمي على التسجيل في مؤسسات التعليم العالي التي يختارونها واتخاذ الخطوات اللازمة للحصول على بطاقة الإقامة - وثيقة رسمية واحدة التي تخول الطلاب الأجانب البقاء في أوكرانيا خلال فترة الدراسة." : (($lang == 'en') ? "Note: The validity period of a student visa is 90 days. During this period the foreign student is expected to arrive in Ukraine, formalize the registration at the higher education institution of his choice and complete the steps to obtain his residence permit - the only official document giving the right to foreign students stay in Ukraine during the study period." : "A noter : La durée de validité d’un visa étudiant est de 90 jours. Durant cette période l’étudiant étranger est tenu arriver en Ukraine, formaliser l’inscription à l’établissement d’enseignement supérieur de son choix et accomplir les démarches en vue d’obtenir sa carte de séjour – unique document officiel qui donne le droit aux étudiants étrangers de rester en Ukraine pendant la période des études.")); ?></p>
                    <p><?php echo (($lang == 'ar') ? "بعد وصول الطالب الأجنبي في أوكرانيا ، يعتني ممثلونا « RAE » بالإجراءات الإدارية للتسجيل لدى مصلحة الهجرة المحلية." : (($lang == 'en') ? "After the arrival of the foreign student in Ukraine, our representatives « RAE » take care of the administrative procedures for registration with the local Migration Service." : "Après l'arrivée de l’étudiant étranger en Ukraine, Nos représentants « RAE » s’occupent des démarches administratives en vue de son enregistrement auprès du Service local de la Migration.")); ?></p>
                    <p><?php echo (($lang == 'ar') ? "ومن الضروري أيضاً توقع الحاجة ، بمجرد الوصول ، إلى الحصول على بوليصة تأمين صحي صالحة لأوكرانيا." : (($lang == 'en') ? "It is also necessary to foresee the need, once there, to take out a medical insurance policy valid for Ukraine." : "Il faut aussi prévoir la nécessité, une fois sur place, de souscrire une police d'assurance médicale valable pour l’Ukraine.")); ?></p>
                    <p><?php echo (($lang == 'ar') ? "ملاحظة: لا يمكن للطلاب الأجانب العمل في أوكرانيا إلا إذا حصلوا على تصريح عمل من السلطات المختصة المحلية." : (($lang == 'en') ? "Note: foreign students can work in Ukraine only if they obtain a work permit from the local competent authorities." : "A noter : les étudiants étrangers peuvent travailler en Ukraine seulement à condition d’obtenir un permis de travail auprès des autorités compétentes locales.")); ?></p>
                    <p><?php echo (($lang == 'ar') ? "هام: قد يتم طلب مستندات إضافية إذا لزم الأمر." : (($lang == 'en') ? "Important: Additional documents may be requested if deemed necessary." : "Important : Des documents supplémentaires pourront être demandés si jugé nécessaire.")); ?></p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="">
                <div class="row">
                    <hr class="section-title-line">
                    <h2 class="section-title"><?php echo (($lang == 'ar') ? "شروط الحصول على تأشيرة دخول للطلاب - روسيا" : (($lang == 'en') ? "CONDITIONS FOR OBTAINING VISA FOR STUDENTS - RUSSIA" : "CONDITIONS D’OBTENTION DE VISA POUR ETUDIANTS  - La RUSSIE")); ?></h2>
                </div>
                <div class="row">
                    <h3><?php echo (($lang == 'ar') ? "يجب أن يتضمن الملف الوثائق التالية:" : (($lang == 'en') ? "The file must include the following documents:" : "Le dossier doit comporter les documents suivants :")); ?></h3>
                    <ol class="keep-list-style list-group">
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "جواز سفر صالح لمدة ستة (6) أشهر على الأقل ؛" : (($lang == 'en') ? "Passport valid for at least six (6) months;" : "Passeport valable encore au moins six (6) mois ")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "تعبئة نموذج طلب التأشيرة على الموقع الإلكتروني visa.kdmid.ru ، طباعة وتوقيعه من قبل مقدم الطلب شخصياً ؛" : (($lang == 'en') ? "Completed visa application form on the website visa.kdmid.ru, printed and signed by the applicant in person;" : "Formulaire de demande de visa dûment rempli sur le site visa.kdmid.ru, imprimé et signé par le demandeur en personne ;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "نسخة من الخريطة الوطنية" : (($lang == 'en') ? "Copy of the national map" : "Copie de la carte nationale ;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "1 صور (3.5 × 4.5 سم) ؛" : (($lang == 'en') ? "1 photos (3.5 × 4.5 cm);" : "1 photos (3,5×4,5 cm) ;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "أصل «خطاب الدعوة» ؛" : (($lang == 'en') ? "Original of the « Letter of Invitation »;" : "Original de la « Lettre d’invitation » ;")); ?></li>
                        <li class="list-group-item"><?php echo (($lang == 'ar') ? "شهادة اختبار الإيدز الأصلية (تحليل فيروس نقص المناعة البشرية) ؛" : (($lang == 'en') ? "Original AIDS test certificate (HIV analysis);" : "Original du certificat de test du SIDA (analyse du HIV) ;")); ?></li>
                    </ol>
                    <div>
                        <h3 class="btn btn-danger"><?php echo (($lang == 'ar') ? "مهم جدا" : (($lang == 'en') ? "Very important" : "TRES IMPORTANT")); ?> :</h3>
                        <p><?php echo (($lang == 'ar') ? "دعنا نعرف تاريخ سفرك ووقت وصولك ونقطة وصولك ومعلومات أخرى حول رحلتك. سوف نرحب بك في المطار. لذلك ، يجب عليك إبلاغنا بخطط سفرك قبل أسبوع واحد على الأقل من مغادرتك. يمكنك أن تمنع دخول أوكرانيا / روسيا إذا لم يكن أحد يتوقع منك. هذه واحدة من شروط التذكرة المفتوحة لمدة عام واحد ، لذلك لا تحاول اللعب مع القواعد." : (($lang == 'en') ? "Let us know your date of travel, your arrival time, your arrival point and other information about your flight. We will welcome you at the airport. Therefore, you must inform us of your travel plans at least one week before your departure. You can be denied entry into Ukraine / Russia if no one is expecting you. This is one of the conditions of your open ticket of one year, so do not try to play with the rules." : "Informez-nous de votre date de voyage, votre heure d’arrivée, votre point d’arrivée ainsi que les autres informations concernant votre vol.  Nous vous accueillerons à l’aéroport.  C’est pourquoi, vous devez nous informer de vos plans de voyage au moins une semaine avant votre départ.  Vous pouvez vous faire refuser l’entrée en Ukraine/Russie si personne ne vous y attend.  C’est une des conditions de votre billet ouvert d’un an, alors n’essayez pas de jouer avec les règles.")); ?></p>
                        <p><?php echo (($lang == 'ar') ? "تأكد من أنك تحمل جواز السفر الدولي الخاص بك وخطاب الدعوة الأصلي وجميع الأوراق الخاصة بك في تحمل الخاصة بك." : (($lang == 'en') ? "Make sure you carry your international passport and the original invitation letter and all your necessary papers in your carry-on." : "Assurez-vous que vous portez votre passeport international et la lettre d'invitation originale et tous vos  papiers nécessaires dans votre bagage à main.")); ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>