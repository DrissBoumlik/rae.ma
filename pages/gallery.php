<?php $_SERVER['DOCUMENT_ROOT'] . "/rae.ma";
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("رواق", "Gallery","Galerie");
    title_page($title, null, $page_id = 'gallery');
?>

<?php include $path.'/layouts/feature.php';
        $txt = "galerie";
        if(isset($_GET['lang'])){
            $txt = translate_feature_txt("galerie", "رواق", "gallery");
        }
        feature_txt($txt, "gallery");
?>


<div class="gallery">
    <div class="">
        <div class="row">
            <div class="gallery-container">
                <hr class="section-title-line">
                <h1 class="section-title uppercase"><?php echo (($lang == 'ar') ? 'رواق' : (($lang == 'en') ? 'Gallery' : 'Galerie')); ?></h1>
                <div class="tz-gallery">
                    <div class="row">
                    <?php for($i=1;$i<=9;$i++){ ?>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="images/gallery/1 (<?php echo $i; ?>).jpg">
                                <img src="images/gallery/1 (<?php echo $i; ?>).jpg" alt="">
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gallery-container">
                <hr class="section-title-line">
                <h1 class="section-title uppercase"><?php echo (($lang == 'ar') ? 'الإقامة' : (($lang == 'en') ? 'accommodation' : 'Hébérgement')); ?></h1>
                <div class="tz-gallery">
                    <div class="row">
                    <?php for($i=1;$i<=17;$i++){ ?>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="images/Hebergement/1 (<?php echo $i; ?>).jpg">
                                <img src="images/Hebergement/1 (<?php echo $i; ?>).jpg" alt="">
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="youtube">
                <div class="ukraine">
                    <hr class="section-title-line">
                    <h1 class="section-title uppercase"><?php echo (($lang == 'ar') ? 'أوكرانيا' : (($lang == 'en') ? 'Ukraine' : 'Ukraine')); ?></h2>
                    <div class="row">
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/XpTAlgdgfDk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/fBGHdqXuD0E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/nGU2PiaoMfA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                </div>
                <div class="russia">
                    <hr class="section-title-line">
                    <h1 class="section-title uppercase"><?php echo (($lang == 'ar') ? 'روسيا' : (($lang == 'en') ? 'Russia' : 'Russie')); ?></h2>
                    <div class="row">
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/rVuAf-0RpTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/Ln6hsUN_vx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/S_dfq9rFWAE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>


<?php //include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(true); ?>