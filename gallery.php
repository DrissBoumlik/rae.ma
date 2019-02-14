<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    title_page('Gallery')
?>

<?php include $path.'/layouts/feature.php';
    feature_txt("gallery", "");
?>


<div class="gallery">
    <div class="">
        <div class="row">
            <!-- <div class="col-md-4">
                <div class="youtube">
                    <div class="ukraine">
                        <h2>Ukraine</h2>
                        <div class="row"><iframe src="https://www.youtube.com/embed/XpTAlgdgfDk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="row"><iframe src="https://www.youtube.com/embed/fBGHdqXuD0E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="row"><iframe src="https://www.youtube.com/embed/v=nGU2PiaoMfA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                    <div class="russia">
                        <h2>Russia</h2>
                        <div class="row"><iframe src="https://www.youtube.com/embed/rVuAf-0RpTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="row"><iframe src="https://www.youtube.com/embed/iChZF9MVB4g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="row"><iframe src="https://www.youtube.com/embed/WD54QDyRwoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="gallery-container">

                    <h1>Gallery</h1>

                    <p class="page-description text-center">Grid Layout With Zoom Effect</p>
                    
                    <div class="tz-gallery">

                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/park.jpg">
                                    <img src="/images/gallery/park.jpg" alt="Park">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/bridge.jpg">
                                    <img src="/images/gallery/bridge.jpg" alt="Bridge">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/tunnel.jpg">
                                    <img src="/images/gallery/tunnel.jpg" alt="Tunnel">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/coast.jpg">
                                    <img src="/images/gallery/coast.jpg" alt="Coast">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/rails.jpg">
                                    <img src="/images/gallery/rails.jpg" alt="Rails">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/traffic.jpg">
                                    <img src="/images/gallery/traffic.jpg" alt="Traffic">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/rocks.jpg">
                                    <img src="/images/gallery/rocks.jpg" alt="Rocks">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/benches.jpg">
                                    <img src="/images/gallery/benches.jpg" alt="Benches">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="/images/gallery/sky.jpg">
                                    <img src="/images/gallery/sky.jpg" alt="Sky">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div> -->
            <div class="gallery-container">
                <h1>Gallery</h1>
                <div class="tz-gallery">
                    <div class="row">
                    <?php for($i=1;$i<=9;$i++){ ?>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="/images/gallery/1 (<?php echo $i; ?>).jpg">
                                <img src="/images/gallery/1 (<?php echo $i; ?>).jpg" alt="">
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gallery-container">
                <h1>Hébérgement</h1>
                <div class="tz-gallery">
                    <div class="row">
                    <?php for($i=1;$i<=17;$i++){ ?>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="/images/Hebergement/1 (<?php echo $i; ?>).jpg">
                                <img src="/images/Hebergement/1 (<?php echo $i; ?>).jpg" alt="">
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
                    <h2>Ukraine</h2>
                    <div class="row">
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/XpTAlgdgfDk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/fBGHdqXuD0E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/nGU2PiaoMfA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                </div>
                <div class="russia">
                    <h2>Russia</h2>
                    <div class="row">
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/rVuAf-0RpTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/iChZF9MVB4g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe src="https://www.youtube.com/embed/WD54QDyRwoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>


<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>