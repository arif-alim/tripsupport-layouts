<?php
define("THEME_DIR", get_template_directory());
define("THEME_DIR_URI", get_template_directory_uri());
define("THEME_STYLES", THEME_DIR_URI . "/assets/css");
define("THEME_JS", THEME_DIR_URI . "/assets/js");
define("THEME_IMAGE", THEME_DIR_URI . "/assets/img");
define("THEME_ICON", THEME_DIR_URI . "/assets/img/icons");
define("THEME_IMAGE_FLAGS", THEME_DIR_URI . "/assets/img/flags");
define("THEME_FONTS", THEME_DIR_URI . "/assets/fonts");
define("THEME_INCLUDES", THEME_DIR . "/inc");
define("VERSION", wp_get_theme()->get('Version'));
