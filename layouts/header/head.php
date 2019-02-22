<?php $GLOBALS['lang'] = 'fr'; 
    if(isset($_GET['lang'])) 
        $GLOBALS['lang'] = $_GET['lang'];
    $lang = $GLOBALS['lang'];


    function head_section($id_page = null)
    {
        global $lang;
        $rtl = ($lang == 'ar');
        if($id_page && $id_page == 'gallery') $rtl = false;
        echo ('
<!DOCTYPE html>
    <html id="top-page" lang="'.$lang.'">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        <link rel="stylesheet" href="/css/gallery-grid.css">
        
        <link rel="icon" href="/images/logo.png" sizes="32x32" />
        <link rel="stylesheet" id="bootstrap-core-css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="use-fontawesome-all-css"  href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css"  href="/css/animate.css" type="text/css" media="all" />  
        <link rel="stylesheet" id="animate-css"  href="/css/fonts.css" type="text/css" media="all" />
                
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="/datatable/css/jquery.dataTables.min.css"/> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="/datatable/css/responsive.dataTables.min.css"/> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="/datatable/css/dataTables.bootstrap.min.css"/> -->
        
        
        
        <!-- <link rel="stylesheet" type="text/css" href="/plugins/footable/css/footable.core.bootstrap.css"/> -->
        
        
        <link rel="stylesheet" href="/css/app.css">
        <!--  -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="/js/jquery.js"></script> -->
        <!-- <script type="text/javascript" src="/datatable/js/jquery.min.js"></script> -->
        <!-- <script type="text/javascript" src="/js/jquery.min.js"></script> -->
        <script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/js/jquery.touch-slider.min.js"></script>
        <script type="text/javascript" src="/js/typewriter.js"></script>
        
        
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- <script type="text/javascript" src="/datatable/js/jquery.dataTables.min.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <!-- <script type="text/javascript" src="/datatable/js/dataTables.responsive.min.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>        
        <!-- <script type="text/javascript" charset="utf8" src="/datatable/js/dataTables.bootstrap.min.js"></script>-->
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        
        <!-- <script type="text/javascript" src="/plugins/footable/js/footable.core.js"></script> -->
    
        <script src="/js/app.js"></script>');
    }