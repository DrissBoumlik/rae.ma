<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Arrivée et transfert',6)
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
			<h2 class="section-title">Arrivée et transfert à l'aéroport</h2>
		</div>
		<div class="row">
			<p>L'arrivée d'étudiants en Ukraine/ Russie est une étape importante, qui est nécessaire pour bien s'organiser en raison de la législation et des procédures ukrainiennes.</p>
			<h3>S'il vous plaît vérifier les informations détaillées importantes sur toutes les procédures pour l'arrivée de l'étudiant:</h3>
			<p>Après avoir obtenu un visa, les étudiants  doivent envoyer leur billet à l’adresse électronique de notre société: studyabroad@rae.ma dans un délai de 1 à 2 semaines avant leur arrivée. Notre société organise toutes les procédures nécessaires à l'arrivée de l'étudiant, au traitement de la migration, à la prise en charge et au transfert vers votre université</p>
			<p><span class="btn btn-danger">IMPORTANT!</span> En raison de la législation de l'Ukraine, les étudiants étrangers qui arrivent sans informer leurs représentants de leur arrivée devraient être renvoyés dans leur pays sans motif !!!</p>
			<p>RAE informe le service des migrations d’Ukraine avec la lettre officielle concernant l’arrivée d’étudiants internationaux à l’aéroport. Lors du contrôle des passeports des étudiants à l’aéroport, le service des frontières vérifie si le représentant officiel mentionné dans cette lettre rencontre les étudiants.</p>
			<p>Lors du contrôle aux frontières, les étudiants subissent un entretien approfondi à leur arrivée. Ils doivent donc indiquer dans quelle université ils vont, quel cursus, qui les choisit à leur arrivée et disposer des fonds nécessaires pour payer les frais de scolarité et autres dépenses. </p>
			<p><span class="btn btn-danger">IMPORTANT!</span> Les étudiants qui voyagent en Ukraine doivent porter la lettre d'invitation originale dans le bagage à main, car vous en aurez besoin pendant l'autorisation du service de migration!</p>
			<p>La réussite du traitement de la migration à l'arrivée dépend donc des facteurs importants suivants:</p>
			<ul class="list-group">
				<li class="list-group-item">Les étudiants nous informent à temps de leur arrivée pour nous permettre de tout organiser.</li>
				<li class="list-group-item">Les étudiants doivent passer l'entretien avec le service des frontières en donnant toutes les informations détaillées sur le but de leur arrivée en Ukraine;</li>
				<li class="list-group-item">Les étudiants peuvent prouver qu'ils disposent de suffisamment de soutien financier et de fonds pour payer leurs études</li>
				<li class="list-group-item">Notre représentant choisit des étudiants internationaux, les transfère vers une université en Ukraine et les accompagne jusqu'au lieu de vie, facilite le placement en foyer.</li>
			</ul>
		</div>
		
		<div class="row">
			<h2>POURQUOI C'EST IMPORTANT?</h2>
			<p>Les modalités de prise en charge officielle à l’aéroport sont d’abord:</p>
			<ul class="list-group">
				<li class="list-group-item">votre sécurité ;</li>
				<li class="list-group-item">Garantie de 100% de la réussite de votre traversée à l'arrivée à l'Ukraine;</li>
				<li class="list-group-item">transfert confortable à l'université de votre choix;</li>
				<li class="list-group-item">admission et placement rapide à l'auberge de l'université.</li>
			</ul>
			<p>N'hésitez pas à nous écrire pour plus de détails</p>
			<p>Nous vous souhaitons un vol très agréable et sûr!</p>
		</div>
	</div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>