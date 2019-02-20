
<?php
    function title_page($title_page, $active_page = null)
    {
        include 'header/head.php';
        echo '<title>' . $title_page . '</title>';
        include 'header/body.php';
        main_menu($active_page);
    }
?>
    

