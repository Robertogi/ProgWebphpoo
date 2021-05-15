<?php

include('classes/_header.class.php');
include('classes/_footer.class.php');

$header = new Header('Início', '/css/index.css');
$header->get_header();

?>
bcscale
<?php

$footer = new Footer();
$footer->get_footer();
