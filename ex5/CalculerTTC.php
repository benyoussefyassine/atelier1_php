<?php
function CalculerTTC($PrixHT, $Qte, $TVA) {
    $TotalHT = $PrixHT * $Qte;
    $Montant_TVA = $TotalHT * ($TVA / 100);
    $Prix_TTC = $TotalHT + $Montant_TVA;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Prix HT</th>";
    echo "<th>Quantité</th>";
    echo "<th>Total HT</th>";
    echo "<th>Montant TVA</th>";
    echo "<th>Total TTC</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $PrixHT . "</td>";
    echo "<td>" . $Qte . "</td>";
    echo "<td>" . $TotalHT . "</td>";
    echo "<td>" . $Montant_TVA . "</td>";
    echo "<td>" . $Prix_TTC . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>