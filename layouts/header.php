
<?php
    function get_lang_text($ar, $en, $fr)
    {
        $lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';
        return ($lang == 'ar') ? $ar
            : ( ($lang == 'en') ? $en : $fr);
    }
    
    function title_page($title_page, $active_page = null, $page_id = null)
    {
        include 'header/head.php';
        head_section($page_id);
        echo '<title>' . $title_page . '</title>';
        include 'header/body.php';
        main_menu($active_page);
    }
?>
    

