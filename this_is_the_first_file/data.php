<?php
$name = $_REQUEST["name"];
$l_name = $_REQUEST["l_name"];
$sexe = $_REQUEST["sexe"];
$cours = $_REQUEST["cours"];
echo "<ul>
<li>Name: $name</li>
<li>Last_name: $l_name</li>
<li>Sexe: $sexe</li>
<li>Cours:<ul><li>$cours</li></ul></li></ul>"
;
?>