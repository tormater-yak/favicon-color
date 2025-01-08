<?php
function faviconColor($args) {
    global $config, $grBottomDarker;
    if ($args[0] == "templates/header/header.html" && !is_null($config["forumColor"])) {
        $favicon_svg = file_get_contents("extensions/" . basename(__DIR__) . "/favicon.svg");
        $favicon_svg = str_replace("#00ff00", $config["forumColor"], $favicon_svg); 
        $favicon_svg = str_replace("#ff0000", $grBottomDarker, $favicon_svg);     
        
        $args[1]["favicon_svg"] = "data:image/svg+xml," . rawurlencode($favicon_svg);
    }
}

hook("beforeTemplateRender", "faviconColor");
?>
