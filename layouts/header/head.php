<?php $GLOBALS['lang'] = 'fr'; 
    if(isset($_GET['lang'])) 
        $GLOBALS['lang'] = $_GET['lang'];


    function head_section($id_page = null, $_lang = null)
    {
        global $lang;
        $lang =  $_lang != null ? $_lang : $GLOBALS['lang'];
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
        <link rel="stylesheet" href="https://projects.drissboumlik.com/rae.ma/css/gallery-grid.css">
        
        <link rel="icon" href="https://projects.drissboumlik.com/rae.ma/images/logo.png" sizes="32x32" />
        <link rel="stylesheet" id="bootstrap-core-css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="use-fontawesome-all-css"  href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css"  href="https://projects.drissboumlik.com/rae.ma/css/animate.css" type="text/css" media="all" />  
        <link rel="stylesheet" id="animate-css"  href="https://projects.drissboumlik.com/rae.ma/css/fonts.css" type="text/css" media="all" />
                
        
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://projects.drissboumlik.com/rae.ma/plugins/datatable/css/jquery.dataTables.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://projects.drissboumlik.com/rae.ma/plugins/datatable/css/responsive.dataTables.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://projects.drissboumlik.com/rae.ma/plugins/datatable/css/dataTables.bootstrap.min.css"/> -->
        
        
        
        <!-- <link rel="stylesheet" type="text/css" href="https://projects.drissboumlik.com/rae.ma/plugins/footable/css/footable.core.bootstrap.css"/> -->
        
        
        <link rel="stylesheet" href="https://projects.drissboumlik.com/rae.ma/css/app.css">
        <!--  -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/jquery.js"></script> -->
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/plugins/datatable/js/jquery.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/jquery.min.js"></script> -->
        <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/jquery.touch-slider.min.js"></script>
        <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/js/typewriter.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
        
        
        
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/plugins/datatable/js/jquery.dataTables.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/plugins/datatable/js/dataTables.responsive.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->
        <!-- <script type="text/javascript" charset="utf8" src="https://projects.drissboumlik.com/rae.ma/plugins/datatable/js/dataTables.bootstrap.min.js"></script>-->
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        
        <!-- <script type="text/javascript" src="https://projects.drissboumlik.com/rae.ma/plugins/footable/js/footable.core.js"></script> -->
    
        <script src="https://projects.drissboumlik.com/rae.ma/js/app.js"></script>');
    }