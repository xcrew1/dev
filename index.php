<?php
echo ("PHP Sample Extension List");
echo ("<p>");
echo ("<p>");
echo print_r(get_loaded_extensions());
echo ("<p>");
echo ("<p>");
$loader = new \Phalcon\Loader();
echo "<pre>" .print_r ($loader). "</pre>";
?>