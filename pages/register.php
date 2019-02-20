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
        <p>Ces dernières années, l’Ukraine et la Russie sont devenue la destination d’un nombre important d'étudiants marocains, pour poursuivre leurs études supérieures dans l’une de ses universités internationales.</p>
        <hr>
        <div class="">
            <h2>Critères d'admission et d’inscription :</h2>
            <p>L’étudiant marocain (comme tout autre étudiant étranger) a le droit d’être admis aux études supérieures dans les Universités  d’Ukraine/Russie : 
            - Seul le bac ou un diplôme équivalent est exigé.  Il n’y a pas de note éliminatoire. 
            - baccalauréat (note minimale est 10+);</p>
            <p>La première étape la plus essentielle de l’inscription à l’université d’État d'Ukraine /Russie c’est le dépôt du dossier d'inscription et recevoir votre « Lettre d’inscription » confirmant votre admission à l’université.
            RAE se charge de vous guider tout au long de la procédure d’admission aux universités, vous n’avez qu’à nous envoyer les documents suivants pour commencer:</p>
            <ul class="list-group">
                <li class="list-group-item">Scan du passeport (Validité du passeport ne doit pas être moins qu’un an) ;</li>
                <li class="list-group-item">Scan de certificat des études secondaires (Baccalauréat)</li>
                <li class="list-group-item">Scan de  relevés de notes.</li>
            </ul>
            <p class="">Ces derniers  sont nécessaires pour demander une Invitation et qu’elle est obligatoire d’être présenter à l’Ambassade de l’Ukraine/Russie pour obtenir le Visa étudiant !!!</p>
            <hr>
            <p>Si le dossier est accepté, l’intéressé doit venir chez nous pour avoir son «Invitation pour études» officielle délivrée à son nom par le Ministère de l’Education et des Sciences de l’Ukraine/Russie.</p>
            <ul class="list-group">
                <li class="list-group-item">Le paiement des frais d’études et d’autres dépenses sont effectués par l’intéressé après son arrivée sur place (en Ukraine).</li>
                <li class="list-group-item">Le paiement des frais d’études et d’autres dépenses sont effectués par l’intéressé avant son arrivée (en Russie).</li>
            </ul>
        </div>
        <p class="">
            <span>Pour ceux qui ont déjà un bac+2 ou plus, l’Ukraine/Russie vous accueille également. Un plan d’études récapitulant les matières étudiées au Maroc et le nombre d’heure d’étude pour chaque matière ainsi qu'un relevé des notes permettra de vérifier que vous avez bien tous les pré requis pour intégrer la filière de votre choix !!!</span>
        </p>
        <hr>
        <p>Pour ceux qui veulent poursuivre leurs études en anglais ou bien en Français Il n y a pas besoin de présenter les résultats de testes internationaux comme IELTS ,TOELF, CAE ,DALF,TCF ,etc !!!</p>
        <hr>
        <p><span class="btn btn-danger">Attention</span> : les inscriptions se font selon la disponibilité des places réservées par les universités de l'état d'Ukraine /Russie pour les étudiants venant du Maroc. Il est recommandé de ne pas tarder avec le dépôt du dossier !!!</p>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>