<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("الجامعات الأوكرانية","Ukrainian Universities","Universités Ukraniennes");
    title_page($title,3)
?>


<?php include $path.'/layouts/feature.php';
        $txt = "Universités Ukraniennes";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("Universités Ukraniennes", "الجامعات الأوكرانية", "Ukrainian universities");
        }
        feature_txt($txt, "ukraine");
?>

<?php include $path.'/layouts/ukraine/universities.php'; ?>

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>