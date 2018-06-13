<?php

// vars
define("THEME_URL", get_stylesheet_directory_uri());
define("TEMPLATE_PATH", get_stylesheet_directory() .'/');
define("SITE_URL", site_url());

show_admin_bar(false);

//include php files
include("incl/general.php");

include("incl/acf.php");

include("incl/cpt.php");

include("incl/widgets.php");