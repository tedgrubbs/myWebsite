<?php

$firstname = $_REQUEST['firstname'];

$lastname = $_REQUEST['lastname'];

echo 'Welcome to my web site, ' .

    htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .

    htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';

?>
