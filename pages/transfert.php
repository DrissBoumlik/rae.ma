<?php $path = $_SERVER['DOCUMENT_ROOT'];
	include $path.'/layouts/header.php'  ;
	$title = get_lang_text("وصول ونقل", "Arrival and transfer","Arrivée et transfert");
    title_page($title ,6)
?>


<?php include $path.'/layouts/feature.php';
    $txt = "Arrivée et transfert";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Arrivée et transfert", "وصول ونقل", "Arrival and transfer");
    }
    feature_txt($txt, "");
?>

<div class="section transfer">
	<div class="">
		<div class="row">
			<hr class="section-title-line">
			<h2 class="section-title"><?php echo (($lang == 'ar') ? "وصول ونقل إلى المطار" : (($lang == 'en') ? "Arrival and transfer to the airport" : "Arrivée et transfert à l'aéroport")); ?></h2>
		</div>
		<div class="row">
			<p><?php echo (($lang == 'ar') ? "يعد وصول الطلاب في أوكرانيا / روسيا خطوة مهمة ، وهو أمر ضروري للحصول على تنظيم جيد بسبب التشريعات والإجراءات الأوكرانية." : (($lang == 'en') ? "The arrival of students in Ukraine / Russia is an important step, which is necessary to get well organized because of the Ukrainian legislation and procedures." : "L'arrivée d'étudiants en Ukraine/ Russie est une étape importante, qui est nécessaire pour bien s'organiser en raison de la législation et des procédures ukrainiennes.")); ?></p>
			<h3><?php echo (($lang == 'ar') ? "يرجى التحقق من المعلومات التفصيلية الهامة عن جميع الإجراءات الخاصة بوصول الطالب:" : (($lang == 'en') ? "Please check the important detailed information on all procedures for the arrival of the student:" : "S'il vous plaît vérifier les informations détaillées importantes sur toutes les procédures pour l'arrivée de l'étudiant:")); ?></h3>
			<p><?php echo (($lang == 'ar') ? "بعد الحصول على التأشيرة ، يجب على الطلاب إرسال تذكرتهم إلى عنوان البريد الإلكتروني لشركتنا: studyabroad@rae.ma في غضون أسبوع إلى أسبوعين قبل وصولهم. تنظم شركتنا جميع الإجراءات اللازمة لوصول الطالب ومعالجة الهجرة والعناية والنقل إلى جامعتك" : (($lang == 'en') ? "After obtaining a visa, students must send their ticket to the email address of our company: studyabroad@rae.ma within 1 to 2 weeks before their arrival. Our company organizes all the procedures necessary for the arrival of the student, the treatment of the migration, the care and transfer to your university" : "Après avoir obtenu un visa, les étudiants  doivent envoyer leur billet à l’adresse électronique de notre société: studyabroad@rae.ma dans un délai de 1 à 2 semaines avant leur arrivée. Notre société organise toutes les procédures nécessaires à l'arrivée de l'étudiant, au traitement de la migration, à la prise en charge et au transfert vers votre université")); ?></p>
			<p><?php echo (($lang == 'ar') ? "<span class='alert alert-danger'>هام !</span> بسبب تشريعات أوكرانيا ، يجب إعادة الطلاب الأجانب الذين يصلون دون إبلاغ ممثليهم عن وصولهم إلى بلادهم دون سبب !!!" : (($lang == 'en') ? "<span class='alert alert-danger'>IMPORTANT !</span> Due to the legislation of Ukraine, foreign students arriving without informing their representatives of their arrival should be returned to their country without reason !!!" : "<span class='alert alert-danger'>IMPORTANT !</span> En raison de la législation de l'Ukraine, les étudiants étrangers qui arrivent sans informer leurs représentants de leur arrivée devraient être renvoyés dans leur pays sans motif !!!")); ?></p>
			<p><?php echo (($lang == 'ar') ? "RAE بإعلام خدمة الهجرة في أوكرانيا مع خطاب رسمي بشأن وصول الطلاب الدوليين في المطار. عند فحص جوازات سفر الطلاب في المطار ، تتحقق دائرة الحدود مما إذا كان الممثل الرسمي المذكور في هذه الرسالة يجتمع مع الطلاب." : (($lang == 'en') ? "RAE informs the Migration Service of Ukraine with the official letter concerning the arrival of international students at the airport. When screening students' passports at the airport, the Border Service checks whether the official representative mentioned in this letter meets the students." : "RAE informe le service des migrations d’Ukraine avec la lettre officielle concernant l’arrivée d’étudiants internationaux à l’aéroport. Lors du contrôle des passeports des étudiants à l’aéroport, le service des frontières vérifie si le représentant officiel mentionné dans cette lettre rencontre les étudiants.")); ?></p>
			<p><?php echo (($lang == 'ar') ? "أثناء مراقبة الحدود ، يخضع الطلاب لمقابلة مفصلة عند الوصول. ولذلك يجب أن يشيروا إلى أي جامعة يذهبون إليها ، أي الدورة التي تختارهم عند وصولهم ولديهم الأموال اللازمة لدفع الرسوم الدراسية والمصاريف الأخرى." : (($lang == 'en') ? "During border control, students undergo an in-depth interview upon arrival. They must therefore indicate in which university they go, which course, which chooses them on their arrival and have the necessary funds to pay tuition fees and other expenses." : "Lors du contrôle aux frontières, les étudiants subissent un entretien approfondi à leur arrivée. Ils doivent donc indiquer dans quelle université ils vont, quel cursus, qui les choisit à leur arrivée et disposer des fonds nécessaires pour payer les frais de scolarité et autres dépenses. ")); ?></p>
			<p><?php echo (($lang == 'ar') ? "<span class='alert alert-danger'>هام !</span> يجب على الطلاب المسافرين إلى أوكرانيا ارتداء رسالة الدعوة الأصلية في الأمتعة المحمولة ، حيث ستحتاج إليها أثناء تفويض خدمة الترحيل!" : (($lang == 'en') ? "<span class='alert alert-danger'>IMPORTANT !</span> Students traveling to Ukraine must wear the original letter of invitation in the carry-on baggage, as you will need it during the authorization of the migration service!" : "<span class='alert alert-danger'>IMPORTANT !</span> Les étudiants qui voyagent en Ukraine doivent porter la lettre d'invitation originale dans le bagage à main, car vous en aurez besoin pendant l'autorisation du service de migration!")); ?></p>
			<p><?php echo (($lang == 'ar') ? "نجاح معالجة الهجرة الواردة يعتمد بالتالي على العوامل الهامة التالية:" : (($lang == 'en') ? "Successful processing of inbound migration therefore depends on the following important factors:" : "La réussite du traitement de la migration à l'arrivée dépend donc des facteurs importants suivants:")); ?></p>
			<ul class="list-group">
				<li class="list-group-item"><?php echo (($lang == 'ar') ? "يعلمنا الطلاب في وقت وصولهم للسماح لنا بتنظيم كل شيء." : (($lang == 'en') ? "Students inform us in time of their arrival to allow us to organize everything." : "Les étudiants nous informent à temps de leur arrivée pour nous permettre de tout organiser.")); ?></li>
				<li class="list-group-item"><?php echo (($lang == 'ar') ? "يجب على الطلاب اجتياز المقابلة مع دائرة الحدود مع تقديم جميع المعلومات التفصيلية عن الغرض من وصولهم إلى أوكرانيا ؛" : (($lang == 'en') ? "Students must pass the interview with the Border Service giving all detailed information on the purpose of their arrival in Ukraine;" : "Les étudiants doivent passer l'entretien avec le service des frontières en donnant toutes les informations détaillées sur le but de leur arrivée en Ukraine;")); ?></li>
				<li class="list-group-item"><?php echo (($lang == 'ar') ? "يمكن للطلاب إثبات أن لديهم ما يكفي من الدعم المالي والأموال لدفع تكاليف دراستهم" : (($lang == 'en') ? "Students can prove they have enough financial support and funds to pay for their studies" : "Les étudiants peuvent prouver qu'ils disposent de suffisamment de soutien financier et de fonds pour payer leurs études")); ?></li>
				<li class="list-group-item"><?php echo (($lang == 'ar') ? "يختار ممثلنا الطلاب الدوليين ، وينقلهم إلى جامعة في أوكرانيا ويرافقهم إلى مكان الحياة ، ويسهل وضعهم في المنزل." : (($lang == 'en') ? "Our representative chooses international students, transfers them to a university in Ukraine and accompanies them to the place of life, facilitates placement in a home." : "Notre représentant choisit des étudiants internationaux, les transfère vers une université en Ukraine et les accompagne jusqu'au lieu de vie, facilite le placement en foyer.")); ?></li>
			</ul>
		</div>
		
		<div class="row">
			<h2><?php echo (($lang == 'ar') ? "لماذا هو مهم؟" : (($lang == 'en') ? "WHY IT'S IMPORTANT?" : "POURQUOI C'EST IMPORTANT?")); ?></h2>
			<p><?php echo (($lang == 'ar') ? "شروط التعامل الرسمي في المطار هي الأولى:" : (($lang == 'en') ? "The terms of official handling at the airport are first:" : "Les modalités de prise en charge officielle à l’aéroport sont d’abord:")); ?></p>
			<ul class="list-group">
				<li class="list-group-item capitalize"><?php echo (($lang == 'ar') ? "أمنك" : (($lang == 'en') ? "your security;" : "votre sécurité ;")); ?></li>
				<li class="list-group-item capitalize"><?php echo (($lang == 'ar') ? "ضمان 100٪ لنجاح معبرك عند الوصول إلى أوكرانيا ؛" : (($lang == 'en') ? "100% guarantee of the success of your crossing on arrival to Ukraine;" : "Garantie de 100% de la réussite de votre traversée à l'arrivée à l'Ukraine;")); ?></li>
				<li class="list-group-item capitalize"><?php echo (($lang == 'ar') ? "نقل مريح إلى الجامعة التي تختارها ؛" : (($lang == 'en') ? "comfortable transfer to the university of your choice;" : "transfert confortable à l'université de votre choix;")); ?></li>
				<li class="list-group-item capitalize"><?php echo (($lang == 'ar') ? "القبول والتنسيب السريع في نزل الجامعة." : (($lang == 'en') ? "admission and quick placement at the university hostel." : "admission et placement rapide à l'auberge de l'université.")); ?></li>
			</ul>
			<p><?php echo (($lang == 'ar') ? "لا تتردد في الكتابة إلينا لمزيد من التفاصيل" : (($lang == 'en') ? "Do not hesitate to write to us for more details" : "N'hésitez pas à nous écrire pour plus de détails")); ?></p>
			<p><?php echo (($lang == 'ar') ? "نتمنى لك رحلة ممتعة وآمنة للغاية!" : (($lang == 'en') ? "We wish you a very pleasant and safe flight!" : "Nous vous souhaitons un vol très agréable et sûr!")); ?></p>
		</div>
	</div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>