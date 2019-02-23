
<?php echo (($lang == 'ar') ? "" : (($lang == 'en') ? "" : "")); ?>


<div class="carousel-container">
    <div class='row'>
        <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel" data-interval="false">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#quote-carousel" data-slide-to="1"></li>
                <li data-target="#quote-carousel" data-slide-to="2"></li>
                <li data-target="#quote-carousel" data-slide-to="3"></li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
                
                <div class="row static-txt">
                    <div class="col-md-12 col-sm-12 height-100">
                        <div class="feature-txt body-txt">
                            
                            <p class="no-margin bg-dark-lighter">Articles categorized as</p>
                            
                            <p class="bg-dark-lighter serious-font" style="top:-0.5px"><span class="bg-light"><?php _e(get_queried_object()->name); ?></span></p><br/>
                           
                            <p class="no-margin bg-dark-lighter">Search Results for : </p><p class="bg-dark-lighter"><span class="bg-light"><?php _e($_GET['s'])?></span></p><br/>
                           
                            <h1 class="bg-dark">Page not found</h1><br/><p class="no-margin bg-dark">Ouch !!! no body's here</p>
                        
                            <h1 class="bg-dark small"><?php _e(get_the_title()) ?></h1><br/>
                            <p class="no-margin bg-dark-lighter"><?php _e(get_the_tag_list('<span class="bg-light">Tags</span> : ',' | ')); ?></p>
                           
                            <h1 class="bg-dark-lighter"><?php _e($page->post_title); ?></h1><br/>
                           
                            
                        </div>                                
                    </div>
                </div>
            </div>

            <!-- Carousel Buttons Next/Prev -->
            <div class="left carousel-control">
                <a data-slide="prev" href="#quote-carousel" class=""><i class="fa fa-chevron-left"></i></a>
            </div>
            <div class="right carousel-control">
                <a data-slide="next" href="#quote-carousel" class=""><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>


if($lang == 'en') echo '';
elseif ($lang == 'fr') echo '';
else echo '';


<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page("")
?>


<?php include $path.'/layouts/feature.php';
    $txt = "";
    feature_txt($txt, "russia");
?>

<div class="post">
    <div class="post-header"><div class="col-sm-12 col-md-12">
        <h2 class=""></h2>
    </div></div>
    <div class="post-img"><img src="/images/universities/russia/" alt=""></div>
    <div class="post-txt"></div>
</div>


<?php include $path.'/layouts/sidebar.php' ?>
<?php include $path.'/layouts/footer.php' ?>


<!-- You can start editing here. -->