<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Briefing')
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
            <h2 class="section-title">Briefing avant le départ</h2>
        </div>
        <div class="row">
            <p>Nous sommes ravis que vous ayez décidé d’étudier en Ukraine / Russie et nous espérons vous voir bientôt.</p>
            <p>Nous savons que vous aurez beaucoup de choses à organiser avant votre arrivée et il est parfois difficile de savoir par où commencer. Nous espérons que cette page vous aidera dans vos préparatifs et vous donnera une idée de ce à quoi vous attendre lors de votre arrivée.</p>
            <p>Tout d’abord, vérifiez auprès de votre compagnie aérienne les restrictions imposées aux transporteurs, c’est-à-dire combien de sacs sont autorisés et quel est le poids maximal? Tout excédent de bagage doit être payé en kg et peut coûter cher.</p>
        </div>
        <div class="row">
            <h3>Des vêtements à apporter!</h3>
            <p>Les étudiants s'habillent de façon décontractée, de manière informelle, avec des jeans, des t-shirts et des pulls, mais plusieurs ensembles de vêtements officiels seront nécessaires. Il est recommandé d’emporter avec vous des vêtements chauds comme un manteau, des bottes, une casquette, des gants, une écharpe, etc., ainsi que des articles d’hygiène personnelle. Nous vous recommandons de ne pas acheter trop de vêtements d'hiver avant d'arriver à l'université. Pour votre voyage de septembre à octobre, vous pourrez emporter une veste facile, un jean, des chaussettes, des bottes, tandis qu'en hiver, de novembre à décembre, vous devrez porter un manteau chaud, un pull, un pantalon chaud, des bottes , casquette et gants. En plus des vêtements décontractés, vous voudrez peut-être apporter des vêtements de cérémonie pour des événements spéciaux tels qu'une conférence ou un séminaire. Vous voudrez peut-être aussi apporter votre costume national pour des événements étudiants internationaux.</p>
            <p>Parmi les produits électriques, veuillez n’apporter que des articles de petite taille tels que sèche-cheveux, rasoirs et ordinateurs portables. </p>
            <p><strong>Veuillez ne pas apporter plus de deux valises et assurez-vous de pouvoir soulever et transporter ces valises.</strong></p>
        </div>
        <div class="row">
            <h3>S'il vous plaît ne pas apporter:</h3>
            <ul class="list-group">
                <li class="list-group-item">Cuiseurs de riz, de la nourriture ou des ustensiles de cuisine avec vous. Votre cas sera trop lourd pour vous porter! Vous pouvez acheter des casseroles, des assiettes et d'autres ustensiles de cuisine à très bon prix dans les supermarchés situés à proximité des résidences universitaires.</li>
                <li class="list-group-item">Vous constaterez que les villes où sont situées les universités comptent de nombreux magasins d’aliments internationaux, ainsi que de grands supermarchés et marchés où vous pourrez trouver de nombreux ingrédients disponibles dans votre pays d’origine. Vous pouvez également utiliser la cantine, le mess ou les restaurants pour vos repas quotidiens.</li>
                <li class="list-group-item">Tout ce que tu détesterais perdre. Laissez à la maison des bijoux précieux ou chers, toutes les cartes de crédit, cartes de bibliothèque et objets similaires inutiles que vous pourriez avoir dans votre portefeuille.</li>
                <li class="list-group-item">Articles de toilette que vous pouvez acheter à l'étranger parce que c'est un poids inutile (shampoing / revitalisant, déodorant, dentifrice).</li>
            </ul>
        </div>
        <p class="underline">Pour l'Ukraine! Assurez-vous que vous portez votre passeport international et la lettre d'invitation originale dans votre bagage à main !!</p>
        <div class='row'>
            <h3>Documents à apporter en Ukraine:</h3>
            <ul class="list-group">
                <li class="list-group-item">Lettre d'invitation originale;</li>
                <li class="list-group-item">Passeport international (valable 2 ans minimum);</li>
                <li class="list-group-item">Acte de naissance (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires étrangères de votre pays). En cas d'absence de certificat de naissance, le demandeur de visa devrait obtenir un affidavit (notarié);</li>
                <li class="list-group-item">Diplôme d'études secondaires (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires extérieures de votre pays d'origine);</li>
                <li class="list-group-item">Certificat médical d'aptitude générale  (traduit en ukrainien et portant le sceau de l'apôtre du ministère des Affaires étrangères de votre pays).</li>

            </ul>
        </div>
        <div class='row'>
            <h3>Documents à apporter en Russie:</h3>
            <ul class="list-group">
                <li class="list-group-item">Passeport international original (valable 2 ans minimum);</li>
                <li class="list-group-item">Diplôme d'études secondaires (attesté par le ministère des Affaires étrangères ou avec le cachet de l'Apostille);</li>
                <li class="list-group-item">Test VIH-SIDA , montrant l'absence de VIH / SIDA;</li>
                <li class="list-group-item">8 photos de format passeport 3,5 x 4,5;</li>
                <li class="list-group-item">Bulletin de versement des frais de première année .</li>
            </ul>
        </div>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>