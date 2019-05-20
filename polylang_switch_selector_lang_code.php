/*** funtions.php ***/

/* language selector only lang code */
function language_selector_flags(){
    if (function_exists('icl_get_languages')) {
        $languages = icl_get_languages('skip_missing=0&orderby=code&order=asc');
        echo '<div class="lang_selector">';
        $langs = '';
        if(!empty($languages)){
            foreach($languages as $l){
                $class = $l['active'] ? ' class="active"' : NULL;
                $langs .=  '<a ' . $class . ' href="'.$l['url'].'">' . strtoupper ($l['language_code']). '</a> | ';
            }
            $langs = substr($langs,0,-3);
            echo $langs;
        }
        echo '</div>';
    }
}




/* Apply on theme position */
language_selector_flags();
