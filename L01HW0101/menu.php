<?php
$pages = [
    "Home" => "index.php",
    "About" => "About.php",
    "Contacts" => "Contacts.php",
    "Projects" => "Projects.php",
];
foreach ($pages as $key => $value) {
    echo "<li class='nav-item'> <a class='nav-link' href='$value'> $key </a></li>";
}
;
?>