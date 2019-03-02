<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php';
    $title = get_lang_text("الجامعات الروسية","Russian Universities","Universités Russes");
    title_page($title,4);
?>


<?php include $path.'/layouts/feature.php';
        $txt = "Universités Russes";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("Universités Russes", "الجامعات الروسية", "rissuan universities");
        }
        feature_txt($txt, "russia");
?>


<?php include $path.'/layouts/russia/universities.php'; ?>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>