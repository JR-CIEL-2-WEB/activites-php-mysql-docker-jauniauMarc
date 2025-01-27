<?php
include 'config.php';

$salaires = [];
try {
    $query = $pdo->query("SELECT salaire FROM employees ORDER BY salaire ASC");
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $salaires[] = $row['salaire'];
    }
} catch (PDOException $e) {
    die("Erreur lors de la récupération des salaires : " . $e->getMessage());
}
?>
