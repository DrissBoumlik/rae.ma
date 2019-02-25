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
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>