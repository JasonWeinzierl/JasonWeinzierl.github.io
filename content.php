<?php
if (empty($_GET['content'])) {
    exit;
}

switch ($_GET['content']) {
case 0:
    echo '';
    break;
case 1:
    echo 'projects here';
    break;
case 2:
    echo 'education here';
    break;
case 3:
    echo 'hobbies';
    break;
default:
    break;
}
