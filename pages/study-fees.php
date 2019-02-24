<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("رسوم الدراسة", "Study Fees","FRAIS D'ÉTUDES");
    title_page($title)
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "FRAIS D'ÉTUDES";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("FRAIS D'ÉTUDES", "رسوم الدراسة", "study fees");
    }
    feature_txt($txt, "study-fees");
?>

<div class="section study-fees">
    <div class="row">
        <h2>FRAIS D'INSCRIPTION POUR CERTAINES DE NOS UNIVERSITES PARTENAIRES DE LA SESSION 2018-2019</h2>
    </div>
    <div class="row">
        <h3>Filières médicales : </h3>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Obtention du diplôme</th>
                    <th scope="col">Obtention du diplôme</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Médecine</td>
                    <td> 	6 ans</td>
                </tr>
                <tr>
                    <td>Dentisterie / Pharmacie</td>
                    <td>5 années</td>
                </tr>
                <tr>
                    <td>Baccalauréat en sciences infirmières</td>
                    <td>4 années</td>
                </tr>
                <tr>
                    <td>PG / Résidence</td>
                    <td>2-3 ans</td>
                </tr>
                <tr>
                    <td>Doctorat</td>
                    <td>3 années</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>