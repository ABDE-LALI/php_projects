<?php
$name = $_POST["name"];
$l_name = $_POST["l_name"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$cp = $_POST["cp"];

echo "<h1>Confermation de</h1><h2>vos cordonnees</h2><table border = 1>
<tr>
<td>nom:</td>
<td>$name</td>
</tr>
<tr>
<td>last_name:</td>
<td>$l_name</td>
</tr>
<tr>
<td>address:</address></td>
<td>$adresse</td>
</tr>
<tr>
<td>ville:</td>
<td>$ville</td>
</tr>
<tr>
<td>code:</td>
<td>$cp</td>
</tr>
</table>";
