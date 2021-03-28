<?php
    function loadTemplate($filename, $tempVars){
        extract($tempVars);
        require $filename;
        $content = ob_get_clean();
        return $content;
    }


?>

