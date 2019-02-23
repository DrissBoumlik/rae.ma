<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page("Cours")
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "Cours";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Cours", "الدورات", "Courses");
    }
    feature_txt($txt, "courses");
?>

<div class="section additional-infos">
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Est-ce qu’il faut présenter un certificat confirmant mes connaissances de l’anglais / du français?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Il n’y a pas besoin de présenter les résultats des tests internationaux comme IELTS, TOEFL, CAE, DALF, TCF etc. Quand même les étudiants qui s’inscrivent à la formation en anglais ou en français, doivent passer un entretien à leur arrivée pour que l’Université puisse examiner et confirmer le niveau de la langue. Pour l’inscription aux études il suffit de présenter un document attestant que le candidat a validé des cours de la langue anglaise / française (par exemple, le relevé de notes du BAC ou de Licence).")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Je fais mes études dans une université dans mon pays. Le transfert à l’université russe, est¬-il possible?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Les transferts de l’université étrangère à l’université russe sont interdits selon la loi de la Russie. Il est seulement possible de s’inscrire en 1ère année de l’université russe. Quand même les étudiants ont droit de présenter les relevés de notes attestant un certain nombre des cours validés à l’université étrangère. En ce cas la commission spéciale examine les documents en comparant le contenu de deux programmes, pour identifier la difference entre les programmes de deux universités, et cependant elle pourrait prendre la décision de permettre le transfert d‘un tel ou tel étudiant pour une telle ou telle année en conformité avec les documents d’éducation anterieure présentés. Il est également possible de passer les examens en certaines matières. La solution peut varier d’une situation à l’autre, pour un tel ou tel candidat.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Vous pouvez accéder au niveau des études suivant après avoir obtenu le diplôme dans votre université. Par exemple si vous avez le diplôme de Licence, vous pouvez vous inscrire en Master en Russie.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Quels documents est-ce que je dois préparer avant de venir en Russie?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Quand l’étudiant arrive en Russie, il doit déposer à l’université la liste suivante des documents obligatoires:")); ?></p>
        <ul class="list-group">
            <il class="list-group-item">•	Les originaux de diplôme du BAC avec le Relevé de notes/ les originaux de diplôme de Licence ou Master avec le Relevé de notes légalisés auprès du Ministère des Affaires Etrangères de votre pays (ou via un autre organisme établi par la législation de votre pays de résidence) et par l’Ambassade de la Fédération de Russie dans le pays qui a délivré vos documents éducatifs (ou bien avec l’Apostille pour les pays signataires de la Convention de La Haye)</il>
            <il class="list-group-item">•	****Certificat de vaccination ou bien un certificat médical avec l’information sur toutes les vaccinations faites;</il>
            <il class="list-group-item">•	Certificat d’absence de SIDA / VIH (photocopie);</il>
            <il class="list-group-item">•	12 photos 3x4 cm, en couleur ,papier mat.</il>
        </ul>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Qu’est¬ce que c’est que la légalisation des documents éducatifs?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Avant d’arriver en Russie l’étudiant doit faire la légalisation de ses documents éducatifs (avec le relevé des notes) dans le pays qui a délivré ses documents.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Il existe deux types de légalisation: la légalisation consulaire et l’Apostille (ce dernier est prévu pour les pays signataires de la Convention de La Haye).")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "La légalisation consulaire comprend:")); ?></p>
        <ul class="list-group">
            <li class="list-group-item">•	Le cachet de légalisation par le Ministère des Affaires Etrangères du pays qui a délivré les documents (ou bien par un autre organisme responsable).</li>
            <li class="list-group-item">•	Le cachet de légalisation par l’Ambassade (le Consulat Général) de la Fédération de Russie dans le pays qui a délivré les documents.</li>
        </ul>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Si le pays qui a délivré les documents éducatifs est un pays signataire de la Convention de la Haye, il suffit seulement un seul cachet, notamment l’Apostille (dans la plupart des cas l’Apostille est fait par le Ministère des Affaires Etrangères).")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "La légalisation se fait soit sur les originaux de diplôme (du BAC, de Licence ou de Master) avec le Relevé de notes, soit sur les copies notariées de ces documents.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Qu’est ce que je peux prendre avec moi?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Bagage à main (normalement 8 kg):")); ?></p>
        <ul class="list-group">
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "passeport")); ?></li>
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "enveloppe avec tous les documents")); ?></li>
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "ordinateur portable/téléphone/tablette")); ?></li>
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "argent liquide, environ 500 USD ou Euro")); ?></li>
        </ul>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pour bagage, normalement c’est 23 kilo les vols intérieurs et internationaux. Il vaut mieux préciser auprès de la compagnie aérienne combien de bagage maximum vous pouvez prendre.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Qui va m’accueillir à l’aéroport et m’accompagner à l’université?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "A l’arrivée à l’aéroport vous devrez passer par le point de contrôle de passeports, recevoir vos bagages et passer par le contrôle douanier. Après le contrôle douanier vous sortirez dans la salle d’arrivée de l’aéroport où vous serez accueilli par le représentant de RAE .")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pour vous garantir l’accueil et l’accompagnement vers la ville et l’université de votre destination nous allons faire à l'avance une procuration spéciale pour le contrôle de passeports et le contrôle douanier aux aéroports. D’après le règlement en vigueur les services de contrôle des frontières peuvent empêcher l'entrée d’un étudiant en Russie s’il n’y a pas de responsable avec une procuration de l’Université qui l’accueille. N’arrivez pas seul sans informer RAE  afin d’éviter des problèmes à l’aéroport. S’il n’y a personne avec une procuration pour vous accueillir à l’aéroport, un étudiant étranger peut être renvoyé dans son pays natal par le vol le plus proche (toutes les dépenses sont à payer par l'étudiant). Ainsi chaque étudiant doit avoir un billet de retour ou bien de l’argent pour en acheter un.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Veuillez nous informer si votre vol est en retard, si vous avez raté votre avion, si vous êtes perdu dans l’aéroport ou bien si vous avez des difficultés.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Dès l’accueil à l’aéroport RAE s’occupera de votre transfert vers la ville et l’université de votre destination (y inclus l’accueil à l’aéroport de la ville de votre destination et le transfert jusqu’au foyer d’étudiants), de votre hébergement au foyer, de toutes les formalités d’inscription aux études à l’université.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Comment est-ce que je peux contacter mes parents à mon arrivée en Russie?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "A votre arrivée en Russie un des représentants de RACUS vous assistera sur tous les sujets, et bien sûr qu’il vous aidera à acheter une carte SIM russe pour votre portable afin d’assurer votre communication avec vos parents. De plus après votre arrivée en Russie, organisation RACUS informera un représentant de RACUS dans votre pays afin qu’il informe vos parents que vous êtes arriver, que vous êtes logé au foyer et que tout est bien.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Combien de bagages est-ce que je peux prendre?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Il est fortement déconseillé d’avoir plus de 20-30 kilos de bagage. Les bagages trop lourds impliquent l’appel au service de porteurs, ce qui coûte des frais supplémentaires. La plupart des étudiants arrivent à l’aéroport international de Moscou et de là-bas prennent le train ou l’avion pour aller dans la ville de destination finale. Pour bagage hors normes il faudra payer un supplément (c’est à peu près 4 euros pour chaque kilo supplémentaire). Vous pouvez trouver tous les types d’affaires et de nourriture en Russie et les employés de RACUS dans les villes peuvent vous aider à le faire. Même après avoir payé pour bagage hors normes à l’aéroport du départ, vous devrez passer par le contrôle douanier en Russie. Avec bagage de 50 kg il vous faudra payer les taxes de douane, c’est 4 euros pour 1 kilo hors normes (selon la législation douanière en Russie). Il est interdit d’apporter les produits alimentaires en Russie. Ça prend énormément de temps (jusqu’à 3 heures) pour payer pour bagage hors normes, ce qui peut entraîner le retard pour le vol suivant ou le train pendant le transfert")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Combien d’argent il me faut?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "En arrivant à l’aéroport de Moscou/St.Pétersbourg, les étudiants doivent avoir (en outre de leur carte bancaire) le montant de 500 USD/Euro en liquide pour acheter les billets d’avion ou de train afin de voyager vers la ville de leur destination, et aussi pour les dépenses pendant le premier mois en Russie. Il est fortement déconseillé de mettre l’argent, des objets précieux et les documents dans le bagage enregistré, il faut les porter dans le bagage à main et les bien surveiller pour ne rien perdre!")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Les billets de train et les billets d’avion pour les vols intérieurs sont à payer d’une manière supplémentaire (si le prix du billet n’a pas été inclus dans la facture)!")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Est-ce que je peux avoir un emploi pendant les études en Russie?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pour travailler en Russie, les étudiants étrangers doivent avoir la permission appropriée de la Direction générale de la migration auprès du Ministère de l’intérieur de Russie. La permission est valable pendant 1 année et elle doit être renouvelée pour la période du contrat du travail. Si l’étudiant a quitté les études, la permission est annulée.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Cette permission est préparée pendant 10 jours ouvriers après le dépôt du dossier complet à l’organe territorial de la Direction générale de la migration auprès du Ministère de l’intérieur de Russie. Le dossier comprend:")); ?></p>
        <ul class="list-group">
            <li class="list-group-item">Demande</li>
            <li class="list-group-item">Passeport</li>
            <li class="list-group-item">Carte de migration</li>
            <li class="list-group-item">Confirmation du paiement de la charge (3500 roubles)</li>
            <li class="list-group-item">Contrat de travail</li>
            <li class="list-group-item">Certificat d’analyse sur SIDA, maladies contagieuses, dépendance aux narcotiques</li>
            <li class="list-group-item">Certificat de l’Université qui confirme que vous faites vos études en présentiel</li>
        </ul>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Mais il ne faut pas attendre que le travail couvre tous les frais d’hébergement. Les études aux universités russes sont assez rigoureuses, il y a le devoir c’est pourquoi il n’y a pas beaucoup de temps libre. Les parents (sponsors) doivent avoir des moyens pour couvre la totalité des frais pendant votre séjour en Russie en tant que l’étudiant.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Ce n’est pas souhaitable que les étudiants travaillent pendant les deux premières années comme ils ne parlent pas russe au niveau suffisant et ne sont pas encore s’habitués aux conditions du nouveau pays. Le travail que les étudiants étrangers peuvent trouver dans la plupart des cas est temporel, non-spécialisé et sous-payé: dans les restaurants, cafés, hôtels, magasins, camps d’été etc.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Visa d’études")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Les étudiants étrangers qui arrivent aux études pour la première fois reçoivent le visa d’études simple pour 90 jours. Après l’arrivée aux études en Russie les étudiants sont obligés de déposer les documents pour la prolongation du visa 45 jours ouvriers avant la date d’expiration du visa d’études simple et ils auront le visa d’études à entrées multiples pour une année académique. Les années suivantes la prolongation du visa d’études à entrées multiples (45 jours ouvriers avant la date d’expiration) est une charge de l’étudiant étranger.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pour préparer le visa d’études à entrées multiples il faut que la validité du passeport de l’étudiant soit au minimum 1.5 ans de la date de délivrance du visa. Il ne faut pas l’oublier et en cas de besoin il faut changer ou prolonger la validité du passeport.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "La prolongation du visa d’études à temps est une charge de l’étudiant étranger. En cas de non-prolongation du visa l’étudiant paiera une amende jusqu’à 5000 roubles ou sera déporté et aura l’interdiction de revenir en Russie pendant 5 ans suivants.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Est-ce que je peux changer l’université pour y continuer mes études?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Le changement de l’université est possible si vous respectez les règles académiques et les engagements financiers. ")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Est-ce que je peux rester en Russie et y travailler après les études à l’Université?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Malheureusement, ce n’est pas si facile. Pendant les études à l’Université russe l’étudiant étranger a le visa d’études qui est délivré pour la période d’études. Après les études de l’Université vous ne pouvez pas rester en Russie et trouver un emploi sans le visa du travail (qui est délivré en cas de l’invitation de la part de l’employeur) et sans le permis du travail.")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Est-ce que je peux partir dans des autres villes/pays pendant les vacances?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pendant les vacances d’hiver et d’été les étudiants peuvent voyager en Russie ou visiter d’autres pays. Mais n’oubliez pas de la législation migratoire russe:")); ?></p>
        <ul class="list-group">
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Informer l’université d’avance sur votre voyage et vérifier que votre visa restera toujours valable pour la période de votre voyage.")); ?></li>
            <li class="list-group-item"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pendant 3 jours après le retour s’adresser à l’Université pour l’enregistrement migratoire - c’est une procédure obligatoire pour tous les étrangers qui reviennent des voyages faits en Russie ou à l’étranger.")); ?></li>
        </ul>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Qu’est-ce que c’est le Certificat d’équivalence?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Pendant la première année d’études à l’Université (la faculté préparatoire) l’étudiant doit passer à ses frais la procédure d’équivalence des documents éducatifs étrangers et recevoir le Certificat d’équivalence auprès de Rosobrnadzor. L’équivalence de l’éducation étrangère signifie la confirmation officielle du niveau d’études réçu à l’étranger et l’octroi au titulaire du document éducatif des droits académiques, professionnels et autres. L’étudiant présente ce Certificat d’équivalence à l’Université comme ce document est obligatoire pour l’admission des étudiants aux programmes universitaires de base (1-6 années)")); ?></p>
    </div>
    <div class="row">
        <hr class="section-title-line">
        <h2 class="section-title"><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "C’est quoi, le repas russe?")); ?></h2>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Sur chaque étage de tous les foyers universitaires il y a une cuisine où vous pouvez préparer le repas que vous voulez. Un grand choix des produits du monde entier représenté dans les magasins russes permet de manger les produits habituels. Il est utile de savoir préparer le repas avant l’arrivée en Russie en particulier les plats nationaux.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "Les dépendes moyennes pour l’alimentation de l’étudiant sont de 200-300 dollars américains par mois.")); ?></p>
        <p><?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "L’étudiant peut aussi fréquenter les cafés étudiants qui ne sont pas chers, le coût moyen du déjeuner étudiant (soupe, plat principal garni, salade, thé) est de 3-5 dollars américains.")); ?></p>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>