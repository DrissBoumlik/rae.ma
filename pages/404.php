<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php';
    $url_query = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
    $_lang = $url_query == null ? 'fr' : explode('=',parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY))[1];
    
    $title = get_lang_text( "الصفحة غير موجودة", "Page Not Found","Page non trouvé", $_lang);
    title_page($title, null, 404, $_lang);
?>
    
<?php include $path.'/layouts/feature.php';
    $txt = "Page non trouvé";
    $txt = translate_feature_txt("Page non trouvé", "الصفحة غير موجودة", "Page Not Found", $_lang);
    feature_txt($txt, "404", $_lang);
    $lang = $_lang;
?>


<div class="error-page">
    <div class="row">
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            <div class="not-found-container">
                <div class="not-found-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="not-found-header"></div>
                <div class="not-found-body">
                    <div class="row"><i class="far fa-dizzy"></i></div>
                    <div class="row"><p>
                    <?php echo (($lang == 'ar') ? "هل أنت تائه, توجه إلى <span class='bg-dark'>القائمة</span> أو حاول <br>أحد روابط <span class='bg-dark'>الشريط الجانبي</span>." : (($lang == 'en') ? "Are you lost, head to the <span class='bg-dark'>menu</span> or try <br>one of the <span class='bg-dark'>sidebar</span> links." : "Es-tu perdu, rendez-vous au <span class='bg-dark'>menu</span> ou essayez <br>un des liens de la <span class='bg-dark'>barre latérale</span>.")); ?>
                    </p></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php'; ?>