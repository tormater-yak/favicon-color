<?php
function faviconColor($args) {
    global $config, $grTop, $grMedium, $grBottom, $grHighlight, $grBorder;
    if (!is_null($config["forumColor"]) && isset($grMedium)) {
        $favicon_svg = file_get_contents("themes/Skyline/icon.svg");
        $favicon_svg = str_replace("#0065c1", $grBottom, $favicon_svg);
        $favicon_svg = str_replace("#219fff", $grMedium, $favicon_svg);
        
        $favicon_svg = str_replace("#e1eeff", $grHighlight, $favicon_svg);
        $favicon_svg = str_replace("#00afff", $grTop, $favicon_svg);
        
        $favicon_svg = str_replace("#0f488f", $grBorder, $favicon_svg);        
        
        $args[1]["favicon_svg"] = "data:image/svg+xml," . rawurlencode($favicon_svg);
    }
}

hook("beforeTemplateRender", "faviconColor");
?>
