<?php
function faviconColor($args) {
    global $config, $grTop, $grMedium, $grBottom, $grBottomDarker, $grHighlight, $grBorder;
    if (!is_null($config["forumColor"]) && isset($grMedium)) {
        $favicon_svg = file_get_contents("themes/Skyline/icon.svg");
        $favicon_svg = str_replace("#0065c1", hexAdjustLight($grMedium,-0.35), $favicon_svg);
        $favicon_svg = str_replace("#219fff", $grTop, $favicon_svg);
        
        $favicon_svg = str_replace("#e1eeff", $grHighlight, $favicon_svg);
        $favicon_svg = str_replace("#00afff", hexAdjustLight($grHighlight,-0.1), $favicon_svg);
        
        $favicon_svg = str_replace("#0f488f", $grBottomDarker, $favicon_svg);        
        
        $args[1]["favicon_svg"] = "data:image/svg+xml," . rawurlencode($favicon_svg);
    }
}

hook("beforeTemplateRender", "faviconColor");
?>
