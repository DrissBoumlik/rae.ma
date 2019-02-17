<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Universités')
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "Universités";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Universités", "الجامعات", "universities");
    }
    feature_txt($txt, "universities");
?>
    <div class="section universities">
    <h3>Hébergement en Ukraine et en Russie </h3>
    <p>sont moins cher selon les autres États européens, les prix varient en fonction de vos propres priorités, il est totalement à votre choix et la demande ce que vous aimez et ce qui vous rend le confort. Normalement, nous recommandons de vivre dans l’auberge pour les nouveaux étudiants à venir.</p>
    <p>Parce que;</p>
    <p>Ils ne savent pas la langue de communication avec les habitants</p>
    <p>Ils ne savent pas les racines de bus de la ville à l’extérieur du campus universitaire</p>
    <p>Nous aidons l’étudiant tout au long mais si ils vivent en dehors du campus universitaire nous ne pouvons pas les approcher, il est donc difficile de les aider.</p>
    <p>Le campus universitaire est le meilleur endroit pour rencontrer de nouvelles personnes, acquérir de nouvelles expériences et faire de nouveaux amis qui vit pour la vie.</p>
    <h3>HÉBERGEMENT UNIVERSITAIRE</h3>
    <p>Option pas cher et bon pour les nouveaux étudiants à venir, fournies par l’Université.</p>
    <p>La chambre de deux à trois personnes: charges d’une place – 1000 $-1200 $ avec une excellent rénovation (comprend tous les équipements nécessaires pour vivre à l’aise).</p>
    <p>Les frais de l’appartement sont classés selon leur espace, leur état et leur lieu.</p>
    <p><span class="btn btn-danger">NB :</span> Les étudiants étrangers peuvent être logés dans des foyers d’étudiants, mais vous pouvez également, trouver des appartements à louer.</p>
    </div>
<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>