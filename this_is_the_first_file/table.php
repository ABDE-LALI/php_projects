<?php
$table = "<table border = 1><tr><th>Nomber</th><th>Carre</th><th>Racine</th></tr>";
for ($i = 1; $i <= 10; $i++) {
    $pow = $i**2;
    $sqrt = sqrt($i);
    $table = $table."<tr><td>$i</td><td>$pow</td><td>$sqrt</td></tr>";
};
echo $table."</table>";?>
