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

<div class="section add-infos">
    
</div>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>