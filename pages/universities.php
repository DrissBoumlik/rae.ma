<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("الجامعات", "Universities","Universities");
    title_page($title)
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "Universités";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("Universités", "الجامعات", "universities");
    }
    feature_txt($txt, "universities");
?>

<?php include $path.'/layouts/ukraine/universities.php'; ?>
<?php include $path.'/layouts/russia/universities.php'; ?>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>