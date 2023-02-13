<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require get_template_directory() . '/inc/generale.php';
require get_template_directory() . '/inc/func.php';
require get_template_directory() . '/inc/validation.php';
require get_template_directory() . '/inc/wpdbrequest.php';


require get_template_directory() . '/inc/image.php';
require get_template_directory() . '/inc/parameters.php';


require get_template_directory() . '/inc/ajax/ajax-register.php';
require get_template_directory() . '/inc/ajax/ajax-login.php';

require get_template_directory() . '/inc/ajax/ajax-listingcv.php';

require get_template_directory() . '/inc/ajax/ajax-add_cv.php';



require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

