
<?php
    function title_page($title_page, $active_page = null, $page_id = null)
    {
        include 'header/head.php';
        head_section($page_id);
        echo '<title>' . $title_page . '</title>';
        include 'header/body.php';
        main_menu($active_page);
    }
?>
    

