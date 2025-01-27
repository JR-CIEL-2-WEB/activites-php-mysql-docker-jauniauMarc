<?php
include 'config.php';

function getSalaires($pdo) {
    $query = "SELECT salaire FROM employees";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$salaires = getSalaires($pdo);

echo "<h3>Liste des salaires des employés :</h3>";
if (count($salaires) > 0) {
    foreach ($salaires as $row) {
        echo "Salaire: " . $row['salaire'] . " €<br>";
    }
} else {
    echo "Aucun salaire trouvé.";
}
?>
